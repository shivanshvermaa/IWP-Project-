<?php

session_start();
?>



<html>

<head>
    <title>Util</title>
    <link rel="stylesheet" type="text/css" href="../css/hompage.css">
</head>

<body scroll="no">

    <center>
        <img src="../images/Logo.png" alt="logo">
    </center>

    <center>
        <div id="main">
            <ul>
                <li><a href="../pages/homepage.php">Home</a></li>
                <li><a href="#About Us">About Us</a></li>
                <li><a href="#Services">Services</a></li>
                <?php if(isset($_SESSION['username'])) {     echo '<li><a href="../pages/products.php">Add Requirement</a></li>'; }?>
                <?php if(isset($_SESSION['username'])) {     echo '<li><a href="../pages/exsisting.php">Exsisting</a></li>'; }?>
                <?php if(!isset($_SESSION['username'])) {     echo '<li><a href="../pages/login.php">Login</a></li>'; }?>
                <?php if(!isset($_SESSION['username'])) {     echo '<li><a href="../pages/register.php">Register</a></li>'; }?>
                <?php if(isset($_SESSION['username'])) {     echo '<li><a href="../pages/php/logout.php">Logout</a></li>'; }?>
            </ul>   
            <p id="created_by">SHIVANSH VERMA AND SHASHWAT KUMAR</p>
        </div>    
    </center>
</body>

</html>