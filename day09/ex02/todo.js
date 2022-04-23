

// var time = new Date();
// console.log(new Date());
// console.log(Date.now());
function checkCookie()
{
    let username = getCookie("username");
    if (username != "")
        alert("Welcome again " + username);
    else
    {
        setCookie("username", username, 365);
        //if (username != "" && username != null)
        //username = prompt("Please enter your name:", "");
    }
}

function setCookie(cname, cvalue, exdays)
{
    const cur_d = new Date();
    cur_d.setTime(cur_d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ cur_d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ":path=/";
}

function getCookie(cname)
{
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let carr = decodedCookie.split(';');
    let i = 0;

    while (i < carr.length)
    {
        let c = carr[i];
        while (c.charAt(0) == ' ')
            c = c.substring(1);
        if (c.indexOf(name) == 0)
          return c.substring(name.length, c.length);
        i++
    }
        return "";
}

function new_div()
{
    var new_task = document.createElement("div");
    new_task.setAttribute("id", "task");
    new_task.setAttribute("onclick", "rm_task(this)");
    return (new_task);
}

function new_task()
{
    // Get whole ft_list
    var ft_list = document.getElementById('ft_list');
    // Ask task from the user if empty return
    var task = prompt('Add new task');
    if (!task)
        return ;
    // Create new <div> element
    div = new_div();
    //
    /*var new_task = document.createElement("div");
    // Add attributes to that div
    new_task.setAttribute("id", "task");
    new_task.setAttribute("onclick", "rm_task(this)"); */
    //
    // Add asked `task` to text field?
    var task_text = document.createTextNode(task);
    //console.log(task_text);
    // Append text to <div> field
    div.appendChild(task_text);
    // Add <div> to ft_list <div>
    ft_list.insertBefore(div, ft_list.firstChild);
    
    setCookie('tasks',task_text, 30);
    // Debug
    console.log("Debug");
    console.log(ft_list);
    console.log(new_task);
}

function rm_task(task)
{
    if (confirm("Are you sure you want to remove task?"))
        task.remove();
    return ;
}