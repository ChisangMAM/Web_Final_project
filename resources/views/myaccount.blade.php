<!DOCTYPE html>
<html>
<head>
	<title>NIPTICT</title>
	
		include_once('link_src.php');
		session_start();
	?>
</head>

<body>
	
	<div class="form">
		<h1 align="center">NIPTICT</h1>
		<h4 align="center">Sign in to start your seesion</h4>

		<img align="center" style="width: 20%; height: 30%" src="<?php echo $_SESSION["image"] ?>">
		<div>Id : <?php echo $_SESSION["id"] ?></div>
		<div>Firstname : <?php echo $_SESSION["firstname"] ?></div>
		<div>Lastname : <?php echo $_SESSION["lastname"] ?></div>
		<div>Email : <?php echo $_SESSION["email"] ?></div>
		<div>Username : <?php echo $_SESSION["username"] ?></div>
		<div>Gender : <?php echo $_SESSION["gender"] ?></div>
		<form action="logout_func.php" method="post">
			<input type="submit" name="logout" value="logout">
		</form>
	</div>

</body>
</html>