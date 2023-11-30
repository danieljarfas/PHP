<?php

class DataBase {

  private $servername = "localhost";
  private $username = "username2";
  private $password = "T8zeHNRcEJ0o7Ua7";
  private $db = "ulesrend";
  public static $conn;

  function __construct()
  {
      // Create connection
      self::$conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
  
      // Check connection
      if (self::$conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
      }
      
      self::$conn->set_charset("utf8");
  }

}



?> 