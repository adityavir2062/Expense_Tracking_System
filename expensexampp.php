<?php
    session_start();
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "expense_tracker";
    $conn = "";
    $sql = "";
    $id="";
    $extract_sql = "";
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect to the server";

    }
    


    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    
    $expense_amt= "";
    $expense_name = "";


    if(isset($_POST["expense_names"]) && isset($_POST["expense_amts"]) &&isset($email)){
        $expense_name = $_POST["expense_names"];
        $expense_amt = $_POST["expense_amts"];
        $sql = "INSERT INTO user_expenses( email, expense_name, expense_amt)
                VALUES ( '$email', '$expense_name', '$expense_amt')";
        try{
            mysqli_query($conn, $sql);
            echo "Added Successfully!";
            
            header('Location: expense_list.php');
        }
        catch(mysqli_sql_exception){
            echo "Cannot add expense";
        }   
        $extract_sql = "SELECT expense_name, expense_amt FROM user_expenses WHERE email = '$email";
        try{
            mysqli_query($conn, $extract_sql);
        }
        catch(mysqli_sql_exception){
            echo "Enter an expense to see the list of your expenses";
        }

        
    }


    
    
    
    

?>