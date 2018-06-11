<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.post("script_upload.php", 
        {
        	name: "suka",
        	surname: "bliad"
        },
        	function(data, status){
            $("#pain").html(data);
        });
    });
});
</script>
</head>
<body>
<p id="pain"></p>
<button>Send an HTTP GET request to a page and get the result back</button>

</body>
</html>
