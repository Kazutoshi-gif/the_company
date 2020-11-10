<?php
include "../classes/user.php";

//collect all data from the form 
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
$origin=$_POST['btnRegister'];
//"$origin= "dashboard",$origin = "register" origin has two values inside. Get data from dashboard.php and register.php
//Create object
//Access the method
$user=new User;
$user->createUser($origin,$firstName, $lastName, $username, $password);

?>