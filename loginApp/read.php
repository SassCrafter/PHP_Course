<?php

  include_once 'db.php';

  $query = 'SELECT * FROM users';

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query error: ' . mysqli_error());
  }

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Read</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <tr>
            <?php foreach($row as $val): ?>
              <td><?php echo $val ?></td>
            <?php endforeach ?>
          </tr>
          <?php endwhile ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
