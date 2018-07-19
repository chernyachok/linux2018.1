<!DOCTYPE html>
<html>
<head>
	<title>sl</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<div id="gallery">
	<div class="photos" style="">
		<?php 
		$count = 0;
			foreach(scandir("/var/www/html/slider/img") as $png){
				if($png =="." || $png== "..")
				continue ;
				if($count==0){
				echo "<img src='img/".$png."'class='showed' >";
				$count++;
				}
					else
						echo "<img src='img/".$png."'>";

			}
		 ?>
	</div>
	<div class="buttons">
		<input type="button" name="prev" value="prev" class="prev">
		<input type="button" name="next" value="next" class="next">
	</div>
</div>


<script type="text/javascript" src="script.js"></script>
</body>
</html>