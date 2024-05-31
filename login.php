<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="./login.css"> 
    </head>
    <body>
        <h1>Please login</h1>
        <form action="loginxampp.php" method="post">
            <label>Enter your email:</label>
            <br>
            <input style="background-color: antiquewhite;" type="email" name="email">
            <br>
            <label>Enter your password:</label>
            <br>
            <input style="background-color: antiquewhite;" type="password" name="password">
            <br>
            <br>
            <input type="submit" value="Login" name="login">

        </form>
    </body>
</html>

<?php
    include("loginxampp.php");
?>    