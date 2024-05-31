<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" type="text/css" href="signup.css">
    </head>
    <body>
        <h1>Hello New user</h1>
        <form action="signupxampp.php" method="post">
            <label>Please enter your first name: </label>
            <br>
            <input style="background-color: antiquewhite;" type="text" name="firstname">
            <br>
            <label>Please enter your last name:</label>
            <br>
            <input  style="background-color: antiquewhite;" type="text" name="lastname">
            <br>
            <label>Please enter your email:</label>
            <br>
            <input  style="background-color: antiquewhite;" type="email" name="email">
            <br>
            <label>Please enter your password:</label>
            <br>
            <input  style="background-color: antiquewhite;" type="password" name="password">
            <br>
            <br>
            <input type="submit" value="Sign-Up" name="signup">
        </form>
    </body>
</html>

<?php
    include("signupxampp.php");
?>    