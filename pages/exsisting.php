<?php
session_start();

?>



<html>

<head>
    <title>Util</title>
    <link rel="stylesheet" type="text/css" href="../css/exsisting.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
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

            <div id="loginbox">
                <center>
                <table>
                    <tr>
                        <th>username</th>
                        <th>company</th>
                        <th>department</th>
                        <th>requirement</th>
                        <th>timestamp</th>

                    </tr>
                    <?php



$username =  $_SESSION['username'];

$username = trim($username);

$connection = mysqli_connect("localhost", "root", "", "db");


if (!$connection) {
    die("Hag diya");
}



$searchRequired =  " SELECT * FROM requirement WHERE username_requirement = '$username' ; ";
$searchResult  =  mysqli_query($connection, $searchRequired);

while ($rows =  $searchResult->fetch_array()) {
    echo "<tr>".
    "<td>" . $rows['username_requirement'] . '</td>'.
    "<td>" . $rows['company'] . '</td>'.
    "<td>" . $rows['department'] . '</td>'.
    "<td>" . $rows['requirement'] . '</td>'.
    "<td>" . $rows['timestamp'] . '</td>'.
    "</tr>";

}
?>
                </table>
            </center>

            </div>


        </div>
        <p id="created_by">SHIVANSH VERMA AND SHASHWAT KUMAR</p>
        </div>


    </center>
</body>

</html>