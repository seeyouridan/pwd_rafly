<?php 
	if (isset($_POST["submit"])) {
		if ($_POST["username"] == "admin" && $_POST["password"] == "12345") {
			header("Location: publicindex/home.php");
			exit;
		} else {
			$error = true;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="website icon" type="png" href="resources/img/icon/R.png">

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<?php if(isset($error)) : ?>
		<p>user atau pass salah</p>
	<?php endif; ?>

	<div class="container">
		<form action="" method="POST">
			<div class="form-floating">
				<input type="text" name="username" class="form-control" id="floatingInput" placeholder="Masukan username">
				<label for="floatingInput">Username</label>
			</div>

			<div class="form-floating">
				<input type="password" name="password" class="form-control" id="floatingInput" placeholder="Masukan password">
				<label for="floatingInput">Password</label>
			</div>

			<button type="submit" name="submit">Masuk</button>
		</form>
	</div>
</body>
</html>