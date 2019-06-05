<?php
	$con = mysqli_connect('127.0.0.1','root','','hv');
	$query = mysqli_query($con, "INSERT INTO instagram_post (text,name,login,name_img,img) 
		VALUES ('". $_POST['text']."',
				'" . $_POST['name'] . "', 
				'" . $_POST['login'] . "', 
				'" . $_POST['name_img'] . "', 
				'" . $_FILES['img']['name'] . "')");
	move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
	header("Location: http://hv/IT/post.php?id=" . $_POST['id']);
?>