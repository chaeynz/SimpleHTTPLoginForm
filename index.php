<html>
<link rel="stylesheet" href="style.css">
<body>
    <p>Register:</p>
    <form action="signup.php" method="POST">
    <ul id="formlist">
        <li><input type="text" name="username" placeholder="Username"></li>
        <li><input type="password" name="password" placeholder="Password"></li>
        <li><input type="text" name="email" placeholder="Email"></li>
        <li><input type="text" name="firstname" placeholder="First Name"></li>
        <li><input type="text" name="surname" placeholder="Last Name"></li>
        <li><input type="submit" value="Register"></li>
    </ul>
    </form>

    <p>Login:</p>
    <form action="login.php" method="POST">
    <ul id="formlist">
        <li><input type="text" name="loginname" placeholder="Username/Email"></li>
        <li><input type="password" name="password" placeholder="Password"></li>
        <li><input type="submit" value="Login"></li>
    </ul>
    </form>
</body>
<?php
?>