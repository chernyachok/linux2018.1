$(document).ready(function(){	
	$("#do_text").click(function(){
		var message = $("#text").val();
		var login = $("#logged_user").html();
		var msg = $("#message_response");
		var newMessage = {
			message: message,
			login: login
		}
		function chage_pos(num){
			for(var i=num; i>0; i--){
				if((i-1)==0)
					{
						$("#position"+i).html("<u>"+login+"</u> wrote: "+"<i>"+message+"</i>");
					}
				$("#position"+i).html( $("#position"+(i-1)).html() );
			}
		}
		function first_row(){
			$("#first_row").load("first_row.php");
		}
		$.ajax({
				url: "script_messages.php",
				type: "POST",
				data: newMessage ,
	   		    beforeSend: function(){
	   		    	msg.html("text sending..");
	   		    },
				success: function(data){				
						msg.html(data);

				},
				complete: function(){
					$("#text").val("");
					setTimeout(function(){
							msg.html("");
						},1000);
					//first_row();
					chage_pos(10);
				}
			});

	});
});