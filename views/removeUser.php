<?php
session_start();

if(!$_SESSION['id']){
  header("location: loginRedirect.php");
  exit;
}

include_once "../classes/user.php";

//Are you sure you want to delete User ID x?
  //if(Yes){
  $user=new user;
  $userID=$_GET['userID'];
  $user->deleteUser($userID);
//}else{
//header("location: dashboard.php");
// 
// }
?>