<?php
require_once "index.php";
//var_dump($_FILES);
//ini_set('upload_max_filesize', '1M');
	if(isset($_FILES) && $_FILES['inputfile']['error'] ==0){
		if($_FILES['inputfile']['type'] == 'image/jpeg' || $_FILES['inputfile']['type'] == 'image/png'){
			switch($_FILES['inputfile']['type']){
				case "image/jpg":
					$ext = "jpg";
				break;
				case "image/png":
					$ext = "png";
				break;
				case "image/jpeg":
					$ext = "jpeg";
				break;
				default:
				$ext = "";
				break;
			}
			$value = rand(500,1000);
			$img_server = "image$value.$ext";
			$temp = $_FILES['inputfile']['tmp_name'];
			$dir = __DIR__."/imgs/".$img_server;////////////////////
			$mov = move_uploaded_file($temp, $dir);
				if($mov){
					$res = R::findOne('avatars', 'login=?',array($_SESSION['logged_user']->login));
					$res->image = "$img_server";
					R::store($res);
					echo "file successfully downloaded under name $img_server"."<hr>";
					unset($_FILES);
				}
				else 
					echo "cant move file";
		}
		else echo "only png and jped formats!";
	}
	else{
		switch($_FILES['inputfile']['error']){
				case UPLOAD_ERR_FORM_SIZE:
				case UPLOAD_ERR_INI_SIZE:
				echo "file size exceed";
				break;
				case UPLOAD_ERR_NO_FILE:
				echo "no file selected";
				break;
				default:
				echo "only jpg and png formats!";
			}
	}
?>
