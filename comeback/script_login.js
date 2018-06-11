window.onload = function(){
	var login = document.querySelector('#login');
	var passwd = document.querySelector('#password');
	var subm = document.querySelector('#do_login');
	subm.onclick = function(){
		var params = "login="+login.value+"&password="+passwd.value;
		ajaxPost('login_back.php', params);
	}
}
function ajaxPost(url, params){
	var log_request = new XMLHttpRequest();
	log_request.onreadystatechange= function(){
		if(log_request.readyState== 4){
			var response = log_request.responseText;
			if(response==1){
				window.location.href ='index.php';
			}
			else{
				switch(response){
					case "User not found":
					$("#test1").html(response);
					setTime(2000,1);
					break;
					case "Incorrect password":
					$("#test2").html(response);
					setTime(2000,2);
					break;
					default:
					$("#test").html(response);
				}
			}
		}
	}
	log_request.open('POST',url);
	log_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	log_request.send(params);
}
function setTime(interval,num){
		setTimeout(function(){
		$("#test"+num).html("")
	},
		interval);
}