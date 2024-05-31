<?php
    session_start();
    
    $email = "";
    $password = "";
    $pass_unhashed = "";
    if(isset($_POST["email"])&& isset($_POST["password"])){
        $email = $_POST["email"];
        $pass_unhashed  = $_POST["password"];
        $password = password_hash($pass_unhashed, PASSWORD_BCRYPT);


    }
    else{
        echo"Please enter submit the fields";
    }
    $_SESSION["email"] = $email;
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "expense_tracker";
    $conn="";
    $sql ="";
    $result = "";
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Not able to connect to the server";
    }
    
    $sql = "SELECT * FROM user_registration WHERE email = '$email' AND password = '$pass_unhashed'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){
        
        header('Location: expense_list.php');
    }
    else{
        echo "Credentials do not match";
    }


    mysqli_close($conn);
    
?>