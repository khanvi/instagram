<?php
	$con = mysqli_connect('127.0.0.1','root','','hv');
	$query = mysqli_query($con,'SELECT * FROM instagram_reg WHERE mail = "' . $_POST['mail'] .
		'" and password = "' . $_POST['password'] .'"');
	if($query->num_rows != 0){
		header("Location: http://hv/IT/post.php?id=".$query->fetch_assoc()['id']);
	}
	else {
		header("Location: http://hv/IT/input.php?user=нет");
	}
?>