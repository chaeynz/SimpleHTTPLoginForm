<?php
include_once 'dbconn.php';
$password_hashed = hash('sha512', $_POST['password']);


$db_query01 = "INSERT INTO user (username, password, email, firstname, surname)
VALUES ('$_POST[username]', '$password_hashed', '$_POST[email]', '$_POST[firstname]', '$_POST[surname]')";

$db_connect->query($db_query01);
?>