$(document).ready(function(){
	
	$("#do_text").click(function(){
		var message = $("#text").val();
		var login = $("#logged_user").html();
		var msg = $("#message_response");
		var newMessage = {
			message: message,
			login: login
		}
		function clear(num){
			$("#text").val("");
			setTimeout(function(){
							msg.html("");
						},num);
		}
		function chage_pos(num){
			for(var i=num; i>0; i--){
				if((i-1)==0)
					{
						//$("#position"+i).html($("#first_row").html())
						$("#position"+i).html("You wrote: "+"<i>"+message+"</i>");
						//"<u>"+login+"</u> wrote: "+"<i>"+message+"</i>"
					}
				$("#position"+i).html( $("#position"+(i-1)).html() );
			}
		}
		function first_row(){
			$("#first_row").load("first_row.php");
		}
		if(message!=""){
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
					clear(1000);
					chage_pos(10);
				}
			});
		}
		else{
			msg.html("<label style='color:red'>Enter a message</label>");
			clear(1000);
		}
	});
});