<?php
	include_once "db.php";

	function showAllData() {
		global $connection;
		$query = "SELECT * FROM users";
		$result = mysqli_query($connection, $query);

		if (!$result) {
			die('Query failed');
		}


		while($row = mysqli_fetch_assoc($result)) {
			$id = $row["id"];
			echo "<option value='$id'>$id</option>";
		}
	}


	function updateUser() {
		global $connection;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		$query = 'UPDATE users SET ';
		$query .= "username = '$username', ";
		$query .= "password = '$password' ";
		$query .= "WHERE id = $id";

		$result = mysqli_query($connection, $query);
		if (!$result) {
			die("Failed to update ".mysqli_error($connection));
		} else {
			echo "Success";
		}
	}

	function deleteUser() {
		global $connection;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		$query = "SELECT username, password FROM users WHERE id = $id";

		$result = mysqli_query($connection, $query);
		if (!$result) {
			die("Failed to Select ".mysqli_error($connection));
		} else {
			$row = mysqli_fetch_assoc($result);
			if ($row["username"] == $username && $row["password"] == $password) {
				$deleteQuery = "DELETE FROM users WHERE id = $id";
				$deleteResult = mysqli_query($connection, $deleteQuery);
				if (!$deleteResult) {
					die("Failed to delete ".mysqli_error($connection));
				}
			} else {
				echo "<h2 class='text-danger'>You provided wrong information. Please try again!</h2>";
			}
		}
	}