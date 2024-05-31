<?php
session_start();
    $db_server= "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "expense_tracker";
    $conn = "";
    $sql = "";
    $result = "";
    $email = "";
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo " Couldn't connect you to the server";
    }

    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    if(isset($email)){
        $sql = "SELECT expense_name, expense_amt FROM user_expenses WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        echo $result;
    }


?>