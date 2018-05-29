<?php
	if(isset($_FILES) && $_FILES['inputfile']['error'] ==0){
		$temp = $_FILES['inputfile']['tmp_name'];
		$dir = __DIR__."/". $_FILES['inputfile']['name'];
		$mov = move_uploaded_file($temp, $dir);
		var_dump($temp);
		var_dump($dir);
		if($mov){
			echo "file successfully downl."."<hr>";
		}
	}
	else echo "error by down.";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="upload.php">
	<p>Download</p>
	<input type="file" name="inputfile" id="inputfile"><br><br>
	<input type="submit" name="do_submit">
</form>
</body>
</html>