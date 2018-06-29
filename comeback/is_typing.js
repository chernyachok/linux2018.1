$(document).ready(function(){
	var canPublish = true;
	var pauseTime = 3000;
	var data = {
		username: $("#logged_user").html()
	}
	
	$("#text").keyup(function(){
		if(canPublish){
			$.ajax({
				url: "is_typing.php",
				type: "POST",
				data: data,
				success: function(data){
					//end_typing();
				},
			});
			canPublish = false;
			setTimeout(function(){
				canPublish = true;
			}, pauseTime);

		}
	});
	
});