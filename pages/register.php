
<html>

<head>
    <title>Util</title>
    <link rel="stylesheet" type="text/css" href="../css/register.css">
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

        <div id="product_box">
            <center>
                <form action="php/registration.php" method="POST">
                <div id="product_box_data">
                    <p id="center_text_boxin" >Registration</p>

                    <div class="page">
                        <div class="page__demo">
                            <label class="field a-field a-field_a1 page__field">
                                <input name = "firstname" class="field__input a-field__input" placeholder="e.g. Stanislav" required>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">First Name</span>
                                </span>
                            </label>

                            

                            <label class="field a-field a-field_a2 page__field">
                                <input name = "lastname" class="field__input a-field__input" placeholder="e.g. Melnikov" required>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Last Name</span>
                                </span>
                            </label>
                            <br>
                            <br>

                            <label class="field a-field a-field_a2 page__field">
                                <input name = "username"  class="field__input a-field__input" placeholder="e.g. melnik909@ya.ru"
                                    required>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Username</span>
                                </span>
                            </label>
                            <br>
                            <br>
                            
                           
                            <label class="field a-field a-field_a2 page__field">
                                <input name = "company" class="field__input a-field__input" placeholder="e.g. melnik909@ya.ru"
                                    required>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Company</span>
                                </span>
                            </label>
                            <br>
                            <br>

                            <label class="field a-field a-field_a2 page__field">
                                <input name = "department" class="field__input a-field__input" placeholder="e.g. melnik909@ya.ru"
                                    required>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Department</span>
                                </span>
                            </label>
                            <br>
                            <br>

                            <label class="field a-field a-field_a2 page__field">
                                <input name = "password" class="field__input a-field__input" placeholder="e.g. melnik909@ya.ru"
                                    required>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Password</span>
                                </span>
                            </label>

                            

                            <label class="field a-field a-field_a2 page__field">
                                <input name = "confirm" class="field__input a-field__input" placeholder="e.g. melnik909@ya.ru"
                                    required>
                                <span class="a-field__label-wrap">
                                    <span class="a-field__label">Confirm Password</span>
                                </span>
                            </label>
                            <br>
                            <br>

                            <div class="svg">                                
                                <a class="button" href="#">
                                    <svg>
                                        <rect height="40" width="130" fill="transparent" />
                                    </svg>
                                    <span>Submit</span>
                                </a>
                            </div>

                            <br>
                            <br>
                            <input type="submit" name="register" value="register">
                        </div>
                    </div>
        </form>
            </center>
        </div>
        

            <p id="created_by">SHIVANSH VERMA AND SHASHWAT KUMAR</p>
        </div>    
    </center>
</body>

</html>