<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
var suka = "bads";
	$(document).ready(function(){
		$("#get_data").click(function(){
			$("#test").load('test24back.php');
		});
	});
</script>
<input type="button" value="try me" id="get_data">
<div id="test"></div>