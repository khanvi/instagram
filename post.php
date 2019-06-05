<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<?php
	$con = mysqli_connect('127.0.0.1','root','','hv');
	$query2 = mysqli_query($con,"SELECT * FROM instagram_reg WHERE id='".$_GET['id']."'");
	$t = $query2->fetch_assoc();
?>
<body>

	<?php
	$query = mysqli_query($con,"SELECT * FROM instagram_post ORDER BY id DESC");
	?>
	<div style="height: 50px">
	</div>
	<div class="container mb-2">
		<div class="col-6">
			<div class="h2 mb-1">
				<?php
				echo $t['name'];
				?>
			</div>
			<div class="p mb-1">
				<?php
				echo $t['login'];
				?>
			</div>
			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<h5> Добавить запись </h5>
				<input name="text" placeholder="текст" class="form-control mb-1">
				<input name="login" class="form-control mb-1" type="hidden" <?php echo 'value="'.$t['login'].'"' ?>>
				<input name="name_img" class="form-control mb-1" type="hidden" <?php echo 'value="'.$t['avatar'].'"' ?>>
				<input name="name" class="form-control mb-1" type="hidden" <?php echo 'value="'.$t['name'].'"' ?>>
				<input name="id" class="form-control mb-1" type="hidden" <?php echo 'value="'.$t['id'].'"' ?>>
				<input type="file" name="img">
				<button class="btn btn-primary">OK</button>
			</form>
		</div>
	</div>
	<div class="container">
		<div class="border p-2 col-6">
			<?php
				for($i = 0; $i < $query->num_rows; $i++){
					$rec = $query->fetch_assoc();
			?>
			<div class="mb-4">
				<div>
					<div class="row mb-1">
						<div class="col-3">
							<?php
								echo '<img src="' . $rec['name_img'] . '" class="w-100 rounded-circle">';
							?>
						</div>
						<div class="h2 col-7">
							<?php
								echo $rec['name'];
							?>
						</div>
						<div class="col-2">
							<form  method="POST" action="delete.php" class="mb-2">
								<?php
									echo '<input type="hidden" name="id_post" value="' 
									. $rec['id'] . '">';
								?>
								<input name="id" class="form-control mb-1" type="hidden" <?php echo 'value="'.$t['id'].'"' ?>>
								<button class="btn btn-primary">
									delete
								</button>
							</form>
						</div>
					</div>
					<div>
						<?php
							echo '<img src="' . $rec['img'] . '" class="w-100">';
						?>
						<p class="mt-2">
							<?php
							echo $rec['login'] . ' : '.$rec['text'];
							?>
						</p>
					</div>
				</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</body>
</html>