function new_task()
{
    var task = prompt('Add new task');
    task = task.trim();
    if (!task)
        return ;
    var time = Date.now();
    div = new_div(time);
    insert_div(task, div);
    setCookie(time, task, 30);
}

function new_div(time)
{
    var div = document.createElement("div");
    div.setAttribute("id", "task");
    div.setAttribute("onclick", "rm_task(this, " + time + ")");
    return (div);
}

function insert_div(task, div)
{
    var ft_list = document.getElementById('ft_list');
    var task_text = document.createTextNode(decodeURIComponent(task));
    div.appendChild(task_text);
    ft_list.insertBefore(div, ft_list.firstChild);
    return ;
}

function rm_task(div, time_id)
{
    if (confirm("Are you sure you want to remove task?"))
    {
        div.remove();
        rmCookie(time_id);
    }
    return ;
}

// Cookie functions
function rmCookie(time_id)
{
    var expires = "expires=Thu, 01 Jan 1970 00:00:00 UTC";
    document.cookie = time_id + "=;" + expires + ":path=/";
}

function setCookie(cname, cvalue, exdays)
{
    const cur_d = new Date();
    cur_d.setTime(cur_d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ cur_d.toUTCString();
    document.cookie = cname + "=" + encodeURIComponent(cvalue) + ";" + expires + ":path=/";
}

function getCookie()
{
    let cookies = document.cookie;
    if (!cookies)
        return;
    let carr = cookies.split(';');
    let i = 0;
    while (i < carr.length)
    {
        let cookie = carr[i];
        cookie_value = cookie.split('=');
        div = new_div(cookie_value[0]);   
        insert_div(cookie_value[1], div);
        i++
    }
    return ;
}
