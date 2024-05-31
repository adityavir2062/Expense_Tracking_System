<!DOCTYPE html>
<html>
    <head>
        <title>Expense Page</title>
        <link rel="stylesheet" type="text/css" href="./expense_list.css">
    </head>
    <body>
        <h1>Track your expenses:</h1>
        <form action="expensexampp.php" method="post">
            <div class="tracking">
                <input style="width: 250px; padding: 50px;  background-color:darkseagreen; border: 3px black; border-radius:3%; font-size: larger;" type="text" name="expense_names" placeholder="Expense name">
                <br>
                <input style="width: 250px; padding: 50px;  background-color:darkseagreen; border: 3px black; border-radius:3%; font-size:larger" type="number" name="expense_amts" placeholder="Expense amt">
                <br>
                <br>
                <br>
                <input style="width:100px; height: 100px; border-radius:3%; margin-top:25px" type="submit" value="+" name="submit">
                </div>
        </form>

        <!--<a href="./show.php"><button>Check all your expenses</button></a> -->
    </body>
</html>
<?php 
    include("expensexampp.php");
?>    