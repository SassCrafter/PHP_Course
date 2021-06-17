<?php
	print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		input {
			display: block;
			margin: 1rem 0;
			border: 1px solid rgba(0,0,0, 0.5);
			padding: .5rem;
		}
	</style>
</head>
<body>
	<form action="login.php" method="POST">
		<input type="text" placeholder="name" name="userName">
		<input type="password" placeholder="password" name="userPassword">
		<input type="submit" value="Submit" >
	</form>
</body>
</html>