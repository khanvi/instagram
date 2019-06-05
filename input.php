<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light" style="height: 100%">
	<div style="height: 5%">
	</div>
	<div class="text-center row">
		<div class="col-5"></div>
		<div class="mb-2 border p-2 col-2">
			<img src="instagram.jpg" class="w-100">
			<div class="p">
				Вход
			</div>
			<form method="POST" action="check.php" class="mb-2">
				<input name="mail" placeholder="e-mail" class="form-control mb-1">
				<input type="password" name="password" class="form-control mb-1" placeholder="password">
				<button>OK</button>
			</form>
			<?php
				if($_GET['user'] == 'нет'){
				echo 'нет такого пользователя';
				}
			?>
			<a href="register.php">
				регистрация
			</a>
		</div>
		<div class="col-5"></div>
	</div>
</body>
</html>