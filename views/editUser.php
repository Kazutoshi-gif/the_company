<?php
session_start();

include_once "../classes/user.php";

$user = new User;

$userID=$_GET['userID'];// get user ID from the at the end of url userID=2
$userDetails = $user->getUser($userID);//get the information of userid2 from the database.
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Edit User</title>
</head>
<body>
<!--nav-->
<nav class="navbar navbar-expand md navbar-dark bg-dark">
    <a href="dashboard.php" class="navbar-brand">
      <h1 class="h3">The Company</h1>
    </a>
    <div class="ml-auto">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a href="#" class="nav-link"><?=$_SESSION['username']?></a><!--add session_start() at the top of the document-->
        </li>
        <li class="nav-item">
          <a href="logout.php" clas="nav-link">Logout</a>
        </li>
      </ul>
    </div>  
  </nav>

    <div class="card w-50 mx-auto">
      <div class="card-body">
        <form action="../actions/edituser.php" method="post">
        <input type="hidden" name="userID" value="<?=$userDetails['id']?>">
          <label for="name">First Name</label>
            <input type="text" class="form-control" name="firstName" autofocus required value="<?=$userDetails['first_name']?>">
          <br>
          <label for="name">Last Name</label>
            <input type="text" class="form-control" name="lastName" required value="<?=$userDetails['last_name']?>">
          <br>
          <label for="name">Username</label>
            <input type="text" class="form-control" name="username" required value="<?=$userDetails['username']?>">
          <br>

          <div class="text-right">
          <button type-="submit" class="btn btn-warning btn-sm px-5">Save</button>

          <a href="dashboard.php" class="btn btn-secondary btn-sm px-5">Cancel</a>
          
        </form>
      </div>
    </div>

<!--main-- Create a form-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>