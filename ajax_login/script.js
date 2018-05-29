window.onload = function(){
		var ip_email = document.querySelector('input[name = email]');
		var ip_login = document.querySelector('input[name = login]');
		var ip_phone = document.querySelector('input[name = phone]');
		
	document.querySelector('#send').onclick = function(){
		
		var params = "email="+ip_email.value+"&"+"login="+ip_login.value+"&"+"phone="+ip_phone.value;
	
		ajaxGet('ajax_ip.php', params);
	}
	document.querySelector('#show_info').onclick = function(){
				var params = "login="+ip_login.value;
				//if(document.querySelector('#show_info').value==""){
				ajaxGet2('ajax_ip2.php', params);
			//}
			
	}
}
function ajaxGet(url, params){
	var request = new  XMLHttpRequest();
	request.onreadystatechange= function(){
		if(request.readyState == 4 && request.status == 200){
			if(request.responseText=='1'){
				//document.location = 'https://google.com';
				document.querySelector('#result').innerHTML= "registered successfully";
				document.querySelector('form').style.display=  "none";
				document.querySelector('#show_info').innerHTML = "show info";
			}

		}
	}
	request.open('POST', url);
	request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	request.send(params);
}
function ajaxGet2(url,params){
	var request2 = new XMLHttpRequest();
	request2.onreadystatechange = function(){
		if(request2.readyState == 4 && request2.status == 200){
			document.querySelector('#otvet').innerHTML = request2.responseText;

		}
	}
	request2.open('POST',url);
	request2.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	request2.send(params);
}