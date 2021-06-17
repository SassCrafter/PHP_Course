<?php
include_once 'db.php';
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if (!$connection) {
  die('Could not connect to the database');
}

 ?>
