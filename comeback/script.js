window.onload = function(){
	document.querySelector('#do_signup').onclick= function(){
		var ip_email = document.querySelector('#email');

		var ip_login = document.querySelector('#login');
		var ip_pass1 = document.querySelector('#password_1');
		var ip_pass2 = document.querySelector('#password_2');
		var params = "login="+ip_login.value+"&"+"email="+ip_email.value+"&"+"password_1="+ip_pass1.value+"&"+"password_2="+ip_pass2.value;
		ajaxGet('signup_back.php', params);
		$('#login').keyup(function(){
    	var count = count+1;
});
	}
}

function ajaxGet(url, params){
	var request = new XMLHttpRequest();
	request.onreadystatechange= function(){
				if(request.readyState ==4 && request.status == 200){
					var result = request.responseText;
					if(result==1){
						setTime('index.php');
					}
					
					else
						switcher(result,2000);
					
				}
	}
	request.open('POST', url);
	request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	request.send(params);
}
function setTime(url){
	document.querySelector('#myform').display = 'none';
	document.write('redirect..');
	setTimeout(function(){window.top.location=url} , 2000);
}


function setInterval(interval,num){
	setTimeout(function(){
		$("#test"+num).html("")
	},
		interval);
}
function switcher(result, interval){
	switch(result){
		case "Enter a login":
		$("#test"+1).html(result);
		setInterval(interval,1);
		break;
		case "Enter an email":
		$("#test"+"2").html(result);
		setInterval(interval,2);
		break;
		case "Enter a password":
		$("#test3").html(result);
		setInterval(interval,3);
		break;
		case "passwords dont match":
		$("#test4").html(result);
		setInterval(interval,4);
		break;
		case "Such login exist":
		$("#test"+1).html(result);
		setInterval(interval,1);
		break;
		default:
		$("#test"+2).html(result);
		setInterval(interval,2);
	}
}