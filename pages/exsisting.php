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
                <?php if (isset($_SESSION['username'])) {
                    echo '<li><a href="../pages/products.php">Add Requirement</a></li>';
                } ?>
                <?php if (isset($_SESSION['username'])) {
                    echo '<li><a href="../pages/exsisting.php">Exsisting</a></li>';
                } ?>
                <?php if (!isset($_SESSION['username'])) {
                    echo '<li><a href="../pages/login.php">Login</a></li>';
                } ?>
                <?php if (!isset($_SESSION['username'])) {
                    echo '<li><a href="../pages/register.php">Register</a></li>';
                } ?>
                <?php if (isset($_SESSION['username'])) {
                    echo '<li><a href="../pages/php/logout.php">Logout</a></li>';
                } ?>
            </ul>

            <div id="loginbox">
                <center>
                    <div id="delreq">

                        <p id="text" style="color: white; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Finish a requirement Requirements</p>
                        <form action="" method="POST">

                            <label class="field a-field a-field_a1 page__field">
                                <input class="field__input a-field__input" placeholder="Rajiv Vincernt" name="username_del" value="<?php $_SESSION['username'] ?>" required>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Username</span>
                                </span>
                            </label>

                            <label class="field a-field a-field_a1 page__field">
                                <input class="field__input a-field__input" placeholder="Rajiv Vincernt" name="requirement_del" required>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Requirement</span>
                                </span>
                            </label>

                            <input type="submit" name="submit" value="Submit">

                        </form>


                    </div>

                    <div id="databox">
                    	
                        <p id="text" style="color: white; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Current Requirements</p>
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
                                die("Hsadas");
                            }



                            $searchRequired =  " SELECT * FROM requirement WHERE username_requirement = '$username' ; ";
                            $searchResult  =  mysqli_query($connection, $searchRequired);

                            while ($rows =  $searchResult->fetch_array()) {
                                echo "<tr>" .
                                    "<td>" . $rows['username_requirement'] . '</td>' .
                                    "<td>" . $rows['company'] . '</td>' .
                                    "<td>" . $rows['department'] . '</td>' .
                                    "<td>" . $rows['requirement'] . '</td>' .
                                    "<td>" . $rows['timestamp'] . '</td>' .
                                    "</tr>";
                            }
                            ?>
                        </table>    
                        </div>

                    <?php
                    $connect = mysqli_connect("localhost", "root", "", "db");

                    if (isset($_POST['submit'])) {

                        if ($connect) {
                            $username = $_POST['username_del'];
                            $requirement = $_POST['requirement_del'];



                            $search_query = "SELECT * FROM requirement WHERE username_requirement= '$username' and requirement='$requirement' ";
                            $result = mysqli_query($connect, $search_query);

                            if ($result->num_rows == 0) {
                                echo "<script> alert('Record Does not exsists'); window.location.replace('exsisting.php'); </script> ";
                            } else {
                                $data = $result->fetch_assoc();



                                $q1 = "INSERT INTO done (username,company,department,requirement,addedtimestamp,deliveredtimestamp) VALUES ( ' " . $data['username_requirement'] . "', '" . $data['company'] . "', '" . $data['department'] . "','" . $data['requirement'] . "','" . $data['timestamp'] . "',CURRENT_TIMESTAMP);";
                                echo "<script> alert('" . $q1 . "'); </script> ";
                                $del = "DELETE FROM requirement  where username_requirement= '$username' and requirement='$requirement'";
                               
                                $result_insert = mysqli_query($connect, $q1);

                                if ($result_insert) {
                                    $result_delete = mysqli_query($connect, $del);
                                        echo "<script> alert('DONE'); window.location.replace('exsisting.php'); </script> ";
                                        
                                    } else {
                                        echo "<script> alert('ERROR'); window.location.replace('exsisting.php'); </script> ";
                                    }
                            }
                        }
                    }

                    ?>

                    <br><br>
                    <p id="text" style="color: white; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Finished Requirements</p>
                    <table>
                        <tr>
                            <th>username</th>
                            <th>company</th>
                            <th>department</th>
                            <th>requirement</th>
                            <th>timestamp(Added)</th>
                            <th>timestamp(Completed)</th>

                        </tr>
                        <?php



                        $username =  $_SESSION['username'];

                       

                        $connection = mysqli_connect("localhost", "root", "", "db");


                        if (!$connection) {
                            echo "<script> alert('CONNECTION ERROR'); window.location.replace('exsisting.php'); </script> ";;
                        }

                        else{
                            
                        $searchRequired =  " SELECT * FROM done WHERE username = ". $username." ";
                        $searchResult  =  mysqli_query($connection, $searchRequired);
                    
                        while ($rows =  mysqli_fetch_array($searchResult)) {

                            echo "<tr>" .
                                "<td>" . $rows['username'] . '</td>' .
                                "<td>" . $rows['company'] . '</td>' .
                                "<td>" . $rows['department'] . '</td>' .
                                "<td>" . $rows['requirement'] . '</td>' .
                                "<td>" . $rows['addedtimestamp'] . '</td>' .
                                "<td>" . $rows['deliveredtimestamp'] . '</td>' .
                                "</tr>";
                        }
                    }
                        ?>
                    </table>


                 
                    <br><br>


            </div>





    </center>
</body>

</html> 