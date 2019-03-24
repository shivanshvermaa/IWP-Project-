<?php

session_start();

$connect = mysqli_connect("localhost","root","","db");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$company = $_POST["company"];
$department = $_POST["department"];
$pass = $_POST["password"];
$confirm_password = $_POST["confirm"];
$register = $_POST["register"];


if ( $connect )
{
    echo "connected";
}


else
{
    echo "connection error";
}

if ( isset ($register) )
{
    $queryCheck = "SELECT * FROM `users` WHERE username = '$username' and password = '$pass'";
   
    $result = mysqli_query($connect,$queryCheck);
    $num = mysqli_num_rows($result);

    
    if ( $num == 1 )
    {
        echo "duplicated data";
    }

    else
    {
        if ( $pass ==  $confirm_password )
        {
            $queryInsert = "INSERT INTO users (`firstname` , `lastname` , `username` , `company` , department , `password` ) VALUES ( '$firstname' ,'$lastname' , '$username' , '$company' , '$department', '$pass') ";
            
            if(mysqli_query($connect , $queryInsert) )
            {
                echo '<script> alert("NEW ACCOUNT CREATED") </script>';
            }

            if(mysqli_query($connect , $queryInsert) )
            {
                header('location: ../login.php');
            }
            
            else{
                echo "ERROR IN CREATION";
            }
        }

        else
        {
            echo "Password Does not match";
        }
    }

}



?>
