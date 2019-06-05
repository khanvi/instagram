<?php
	$con = mysqli_connect('127.0.0.1','root','','hv');
	$query = mysqli_query($con, "DELETE FROM instagram_post WHERE id = " . $_POST['id_post']);
	header("Location: http://hv/IT/post.php?id=" . $_POST['id']);
?>