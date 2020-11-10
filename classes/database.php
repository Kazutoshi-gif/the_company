<?php

class Database{
private $serverName ="localhost";
private $username ="root";
private $password = "";
private $dbName = "company_xyz";
protected $conn;


  public function __construct(){
    $this->conn = new mysqli($this->serverName, $this->username, $this->password,$this->dbName);

    if($this->conn->connect_error){
      die("unable to connect database". $this->dbName.":".$this->conn->connect_error);
    }

  }
} 
?>