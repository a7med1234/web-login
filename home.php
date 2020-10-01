<?php
            session_start();
            include 'database connection.php';
            $isUserLoggedIn = isset($_SESSION['username']  ) ? true : false;
            $Username =  $_SESSION['username'];

if (!$isUserLoggedIn) {    
                 // Is Not  Login Done 
         header("Location: login.php");
    exit;
}   

?>
 

<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>

    <a href="logout process.php"><div style="float:right"><button>logout</button></div></a>

    <h1>Welcome to home page...!</h1>
    <p>  Hi <?=$Username?> </p>
</body>
</html>                               
                           