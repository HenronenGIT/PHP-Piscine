jQuery(document).ready(function()
{
	/* Clicking "New" button to create new task*/
	$('#submit').click(function() {
		var task;
		if (!(task = $.trim(prompt('Add new task'))))
			return ;
		var time = $.now();
		$.fn.create_element(time, task);
            $.cookie("geeksforgeeks", 
            "It is the data of the cookie");
            $("p").text("cookie added");
		// setCookie(time, task, 30);
	});

	/* Clicking a task to remove it */
	$('div').click(function(element) {
		if (confirm("Are you sure you want to remove task?"))
		{
			$(element.target).remove();
			// Cookie remove
		}
	});

	/* Create new element and prepend it */
	$.fn.create_element = function(timeStamp, task) {
			/* Test with decodeURIComponent(task) */
		var div = $("<div>", {id: "task", text: task});
		$("#ft_list").prepend(div);
	}

	function new_div(time)
	{
		div.setAttribute("onclick", "rm_task(this, " + time + ")");
		return (div);
	}
	/*
	function rm_task(div, time_id)
	{
			rmCookie(time_id);
		return ;
	}
	*/

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
});
