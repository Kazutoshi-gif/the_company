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
<title>Register</title>
</head>
<body>
<div class="card w-25 my-5 mx-auto border-0">
  <div class="card-header bg-white border-0">
    <h1 class="text-center">Register</h1>
  </div>
  <div class="card-body">
    <form action="../actions/register.php" method="post">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" id="firstName" class="form-control mb-2"required autofocus>

    <label for="lastName">Last Name</label>
    <input type="text"name="lastName" id="lastName" class="form-control mb-2" required>

    <label for="username">Username</label>
    <input type="password" name="username" id="username" class="form-control mb-2" maxlength="15" required>

    <label for="username">Password</label>
    <input type="password" name="password" id="password" class="form-control mb-2" required>

    <button type="submit" class="btn-success btn-block" name="btnRegister" value="register">Register</button>

<div class="text-center mt-3 small">
<p>Registered already<a href="../views">Login</a></p>
</div>

    </form>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>