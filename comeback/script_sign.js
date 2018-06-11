window.onload = function(){
	document.querySelector('#do_signup').onclick= function(){
		var ip_email = document.querySelector('#email');
		var ip_login = document.querySelector('#login');
		var ip_pass1 = document.querySelector('#password_1');
		var ip_pass2 = document.querySelector('#password_2');

		
		var params = "login="+ip_login.value+"&"+"email="+ip_email.value+"&"+"password_1="+ip_pass1.value+"&"+"password_2="+ip_pass2.value;
		ajaxGet('signup_back.php', params);
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
						document.querySelector('#result').innerHTML = result;
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