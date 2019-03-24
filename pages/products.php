<?php session_start();  



if ( isset ( $_POST['submit'] ) )
{
    $connect = mysqli_connect("localhost","root","","db");
    $username = $_SESSION['username'];
    $company =  $_POST['company'];
    $department = $_POST['department'];
    $requirement = $_POST['requirement'];


    if ( $connect )
    {
        $queryInsert = "INSERT INTO requirement( username_requirement , company , department , requirement , timestamp ) VALUES ('$username' , '$company' , '$department' , '$requirement' , CURRENT_TIMESTAMP) ;" ;

        if ( mysqli_query( $connect , $queryInsert ) ) 
        {
            echo '<script> alert("ADDED"); </script>';
        }

        else
        {
            echo '<script> alert("ERROR IN ADDING"); </script>';
        }


    }

    else{
        die("COULD NOT CONNECT");
    }
}



?>


<html>

<head>
    <title>Util•products</title>
    <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body scroll="no">


    <center>
        <img src="../images/Logo.png" alt="logo">

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



            <div id="product_box">
                <center>
                    <div id="product_box_data">
                        <p>Products Requirement</p>
                        <p> Hello <?php echo $_SESSION['username']; ?> </p>

                        <div class="page">

                            <form action="" method="POST" >
                                <div class="page__demo">
                                    <br>
                                    
                                    <label class="field a-field a-field_a1 page__field">
                                        <input class="field__input a-field__input" name="company"
                                            placeholder="e.g. Stanislav" required>
                                        <span class="a-field__label-wrap">
                                            <span class="a-field__label">Company</span>
                                        </span>
                                    </label>

                                    <br>
                                    <br>

                                    <label class="field a-field a-field_a2 page__field">
                                        <input class="field__input a-field__input" name="department"
                                            placeholder="e.g. Melnikov" required>
                                        <span class="a-field__label-wrap">
                                            <span class="a-field__label">Department</span>
                                        </span>
                                    </label>

                                    <br>
                                    <br>

                                    <label class="field a-field a-field_a2 page__field">
                                        <input class="field__input a-field__input" name="requirement" placeholder="e.g. melnik909@ya.ru"
                                            required>
                                        <span class="a-field__label-wrap">
                                            <span class="a-field__label">Requirement</span>
                                        </span>
                                    </label>

                                    <div class="svg">
                                        <a class="button" href="#">
                                            <svg>
                                                <rect height="40" width="130" fill="transparent" />
                                            </svg>
                                            <span>Submit</span>
                                        </a>
                                    </div>

                                    <input type="submit" name="submit" value="SUBMIT">

                            </form>
                        </div>
                    </div>
                </center>
            </div>




        </div>
        <p id="created_by">SHIVANSH VERMA AND SHASHWAT KUMAR</p>
        </div>

    </center>

</body>
<html>

</html>