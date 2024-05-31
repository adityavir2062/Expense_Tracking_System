<?php 
    $db_server = "localhost";
    $db_user= "root";
    $db_password = "";
    $db_name = "Expense_Tracker";

    $conn = "";
    $sql = "";
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Not able to connect";
    }

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $pass_unhashed = $_POST["password"];
    $password = password_hash($pass_unhashed, PASSWORD_BCRYPT);

    if(isset($firstname) && isset($lastname) && isset($email) && isset($password)){
        $sql = "INSERT INTO user_registration(firstname,lastname, email, password)
                VALUES ('$firstname', '$lastname', '$email', '$pass_unhashed')";
    }
    try{
        mysqli_query($conn, $sql);
        header('Location: login.php');
    }
    catch(mysqli_sql_exception){
        echo "User not registered";
    }
    mysqli_close($conn);
?>    