<?php

  //initialize session
  session_start();

  if( !isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Dashboard</title>
  <style>

    body {
      background-color: lightgray;
    }

  </style>
</head>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card card-body mt-5">
          <h2>Dashboard <small class="text-muted">test@test.com</small></h2>
          <p>Welcome to the dashboard John Doe</p>
          <p><a href="logout.php" class="btn btn-danger">Logout</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>