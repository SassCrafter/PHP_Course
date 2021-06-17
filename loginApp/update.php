<?php

  include_once 'db.php';
  include_once 'functions.php';

  if (isset($_POST['submit'])){
    updateDB();
  }

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
      <form action="update.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <select class="form-select" name="id" id="id">
              <?php showAllData(); ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
  </div>
</body>
</html>
