<html>

<head>
    <title>util•login</title>
    <link type="text/css" href="../css/login.css" rel="stylesheet">
</head>


<body scroll="no">

    <center>
        <img src="../images/Logo.png" alt="logo">

        <div id="main">


            <ul>
                <li><a href="../pages/homepage.php">Home</a></li>
                <li><a href="#About Us">About Us</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="../pages/login.php">Login</a></li>
                <li><a href="../pages/products.php">Products</a></li>
            </ul>

            <div id="loginbox">
                <div align=left id="loginboxright">
                    <img src="../images/suitandtieleft.jpg" height="500" width="500">
                </div>

                <div id="loginboxleft">

                    <center>
                        <p id="loginboxheader">Login Details</p>
                    </center>

                    <form id="loginform" action="../php/login.php" method="POST">
                        <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" placeholder="Rajiv Vincernt" required>
                            <span class="a-field__label-wrap">
                                <span class="a-field__label">Username</span>
                            </span>
                        </label>

                        <br>
                        <br>

                        <label class="field a-field a-field_a1 page__field">
                            <input class="field__input a-field__input" placeholder="Password" type="password"   required>
                            <span class="a-field__label-wrap">
                                <span class="a-field__label">Password</span>
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





                    </form>

                </div>
            </div>




            <p id="created_by">SHIVANSH VERMA AND SHASHWAT KUMAR</p>
        </div>

    </center>

</body>

</html>