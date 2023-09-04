<?php
include_once 'dbconn.php';
if(str_contains($_POST['loginname'], '@')) {
$db_query02 = "SELECT username, email, password
FROM user
WHERE email = '$_POST[loginname]';";

} else {
$db_query02 = "SELECT username, email, password
FROM user
WHERE username = '$_POST[loginname]';";

}

$result = $db_connect->query($db_query02);
$row = $result->fetch_assoc();

if(($_POST["loginname"] = $row["email"] || $_POST["loginname"] = $row["username"]) && hash('sha512', $_POST["password"]) == $row["password"]) {
echo "<br> Login succesful!";
} else {
echo "<br> Login failed!";
}
?>