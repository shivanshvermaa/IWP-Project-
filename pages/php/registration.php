<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "db");

$firstname = trim($_POST["firstname"]);
$lastname = trim($_POST["lastname"]);
$username = trim($_POST["username"]);
$company = trim($_POST["company"]);
$department = trim($_POST["department"]);
$pass = trim($_POST["password"]);
$confirm_password = trim($_POST["confirm"]);
$register = trim($_POST["register"]);

function validator()
{

    $result = true;
    $errors = "";

    $fn = "/[a-zA-Z]/";
    $ln = "/[a-zA-Z]/";


    if (!preg_match($fn,  $GLOBALS['firstname'])) {
            echo "<script> alert('Firstname not valid');window.location.replace('../register.php'); </script> ";
            $result = false;
        }

    if (!preg_match($ln,  $GLOBALS['lastname'])) {
            echo "<script> alert('Lastname not valid');window.location.replace('../register.php'); </script> ";
            $result = false;
        }


    if ( strlen($GLOBALS['pass']) < 8 )
    {
        echo "<script> alert('Password Less than 8 ') ;window.location.replace('../register.php');</script> ";
        $result = false;
    }

    return $result;
}


if ( validator() )
{

    if ($connect) {
            echo "connected";
        } else {
            echo "connection error";
        }

    if (isset($register)) {
            $queryCheck = "SELECT * FROM `users` WHERE username = '$username' and password = '$pass'";

            $result = mysqli_query($connect, $queryCheck);
            $num = mysqli_num_rows($result);


            if ($num == 1) {
                    echo "<script> alert('Username already exsists'); window.location.replace('../register.php'); </script> ";
                }

            if ($num == 0) {
                    if ($pass ==  $confirm_password) {
                            $queryInsert = "INSERT INTO users (`firstname` , `lastname` , `username` , `company` , department , `password` ) VALUES ( '$firstname' ,'$lastname' , '$username' , '$company' , '$department', '$pass') ";

                            if (mysqli_query($connect, $queryInsert)) {
                                    echo "<script> alert('User Registered'); window.location.replace('../login.php'); </script> ";
                                } else {
                                    echo "<script> alert('Error in Creation'); window.location.replace('../register.php'); </script> ";
                            }
                        } else {
                            echo "<script> alert('Passwords do not match'); window.location.replace('../register.php'); </script> ";
                        }
                }
        }

}

 ?>