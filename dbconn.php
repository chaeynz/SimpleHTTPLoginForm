<?php
$db_connect = new mysqli("127.0.0.1:3306", "USERNAME", "PASSWORD", "DBNAME");
if ($db_connect->connect_error) {
    die("Database Connection failed with Error: " . $conn->connect_error);
  }
  echo "Succesfully connected with database!";
?>