<?php
	if (isset($_POST['submit'])) {


		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username && $password) {
			$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

		if ($connection) {
			echo 'We are connected';
		} else {
			die('Database conection failed');
		}

	
		$query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
		$result = mysqli_query($connection, $query);

		if (!$result) {
			die('Query failed');
		}
		}

		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	

	<div class="container">
    <div class="col-sm-6">
      <form action="login.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
  </div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>