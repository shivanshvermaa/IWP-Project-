<?php

session_start();

$connect = mysqli_connect("localhost","root","","db");


$username = $_POST["username"];
$pass = $_POST["password"];



if ( $connect )
{
    echo "connected";
}

else
{
    echo "connection error";
}

if ( isset ($_POST["login"]) )
{
    $queryCheck = "SELECT * FROM `users` WHERE username = '$username' and password = '$pass'";
   
    $result = mysqli_query($connect,$queryCheck);
    $num = mysqli_num_rows($result);

    
    if ( $num == 1 )
    {
        echo '<script>alert("LOGGED IN");</script>';        
    }
    if ( $num == 1 )
    {  
        $_SESSION['username'] = $username;
        header("location:../homepage.php");   
    }

    

    else
    {
       echo '<script>alert("Invalid ID PASS");</script>';
    }

}



?>
