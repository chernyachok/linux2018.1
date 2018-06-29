$(document).ready(function(){
	function doAjax(){
		$("#rows").load("show_rows.php");

	}
	if($("#online_count").html()>1 && $("#online_count").html()<10){
		setInterval(doAjax, 6000);
	}
	if($("#online_count").html()>=10){
		setInterval(doAjax, 3000);
	}
});