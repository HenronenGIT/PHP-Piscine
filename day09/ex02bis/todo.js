jQuery(document).ready(function()
{
	/* Clicking "New" button to create new task*/
	$('#submit').click(function() {
		var task;
		if (!(task = $.trim(prompt('Add new task'))))
			return ;
		var time = $.now();
		$.fn.create_element(time, task);
		$.fn.setCookie(time, task);
	});

	/* Clicking a task to remove it */
	$('div').click(function(event) {
		if (confirm("Are you sure you want to remove task?"))
		{
			$(event.target).remove();
			$(event.target.id).remove();
			var expires = "expires=Thu, 01 Jan 1970 00:00:00 UTC";
    		document.cookie = event.target.id + "=;" + expires + ":path=/";
		}
	});

	/* Create new element and prepend it */
	$.fn.create_element = function(timeStamp, task) {
		var div = $("<div>", {id: timeStamp, text: task});
		$("#ft_list").prepend(div);
	}

	$.fn.setCookie = function(timeStamp, task) {
		console.log("test")
		var expireDay = 30;
		const currentDate = new Date();
		currentDate.setTime(currentDate.getTime() + (expireDay * 24 * 60 * 60 * 1000));
		let cExpire = "expires="+ currentDate.toUTCString();
		document.cookie = timeStamp + "=" + encodeURIComponent(task) + ";" + cExpire + ":path=/";
	}

	/* Get cookies */
	let cookies = document.cookie;
	if (!cookies)
		return;
	let cookieArray = cookies.split(';');
	let i = 0;

	while (i < cookieArray.length)
	{
		let cookie = cookieArray[i];
		cookieValue = cookie.split('=');
		div = $.fn.create_element(cookieValue[0], decodeURIComponent(cookieValue[1]));
		i++;
	}
	return ;
});
