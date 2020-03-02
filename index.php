<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <input placeholder="Customer Number" type="text" name="usernum"><br>
        <input placeholder="Password" type="password" name="passw"><br>
        <input type="submit" value="Login" name="" >
        <input type="reset" value="Reset" name="" >

    </form>

</body>
</html>

<?php
session_start();

    $con = mysqli_connect('localhost','root', '','beratbank'); 
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
       }
    // if there is a connection error with the database it helps identify the problem?

    if(empty($_POST["usernum"]))
        {
            echo "pls enter Customer Number <br>";
        }
    if(empty($_POST["passw"]))
        {
            echo "pls enter Password";  
        }

    if(isset($_SESSION['submit'])) 
        {
            
        } 
    else 
        {
            
        }


?>