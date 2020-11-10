<?php
//include - if file not found, warning/ignore it will continue to run
//require-if file not found, error/stop it will stop running
//include_once-not include it again if it is include already
//require_once-not require it again if it is required already
require_once "database.php";

class User extends Database{
  public function createUser($origin,$firstName, $lastName, $username, $password){
    $sql="INSERT INTO users(first_name, last_name, username, `password`) VALuES ('$firstName','$lastName','$username','$password')";

    //$this->conn is the "protected $conn" from parent class 
    if($this->conn->query($sql)){
      if($origin=="dashboard"){
        header("location:../views/dashboard.php");//go to index/log in page. Once created a acount on dashboard page, It will come back to same dashboard page.
        exit;

      }elseif($origin=="register"){
        header("location:../views");//login. Create account on register page and it will go to login page.
        exit;
      }
      
      //alternate-do not change other parts of the website anymore
      // if(basename($_SERVER['HTTP_REFERER']) =="dashboard.php");

    }else{
      die("Error creating user:".$this->conn->error);
    }
  }

  public function login($username, $password){
    $error="The username or password you entered is incorrect";
    $sql = "SELECT*FROM users WHERE username = '$username'";

    $result=$this->conn->query($sql);
    if($result->num_rows==1){
      $userDetails = $result->fetch_assoc();
      if(password_verify($password,$userDetails['password'])){
        session_start();
        // we create a session id here, only when login successful
        $_SESSION['id'] = $userDetails['id'];
        $_SESSION['username'] = $userDetails['username'];
    
        header("location:../views/dashboard.php");
        exit;

      }else{
        echo $error;
      }

    }else{
      echo $error;
    }
  }
  public function getUsers(){
    $loginID = $_SESSION['id'];
    $sql="SELECT * FROM users WHERE id != $loginID";

    if($result=$this->conn->query($sql)){
      return $result;
    }else{
      die("Error retrieving users:". $this->conn->error);
    }
  }

  public function getUser($userID){
    $sql="SELECT * FROM users WHERE id = $userID";

    if($userDetails=$this->conn->query($sql)){
      return $userDetails->fetch_assoc();// fetchassoc is needed for using php to out put the data from the database.On editUser.php bottom parts
    }else{
      die("Errorbretrieving this user:".$this->conn->error);
    }
  }

  public function updateUser($userID,$firstName,$lastName,$username){// updating users information from edituser.php
    $sql="UPDATE users SET first_name='$firstName', last_name='$lastName',username='$username' WHERE id='$userID'";
    if($this->conn->query($sql)){
      header("location:../views/dashboard.php");
      exit;
    }else{
      die("Error updating user:".$this->conn->error);
    }
  }


  public function deleteUser($userID){
    $sql= "DELETE FROM users WHERE id=$userID";

    if($this->conn->query($sql)){
      header("location:dashboard.php");
      exit;
    }else{
      die("error deleting user:".$this->conn->error);
    }
  }
}