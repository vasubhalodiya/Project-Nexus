<?php

    session_start();
    // $db = mysqli_connect("localhost","root","","nexus");
    // include("includes/config.php");
    include("includes/config.php");
    if(isset($_POST['uname']))
    {
        $uname = $_POST['uname'];
        $email =$_POST['email'];
        $password = md5($_POST['password']);
        $password2 = md5($_POST['confirmpassword']);
        $user_type =$_POST['user_type'];

        $sql = "select * from login where email='$email'";
        echo $sql;
        $run = mysqli_query($db, $sql);
        $get_rows = mysqli_affected_rows($db);

        if($password != $password2)
        {
            echo "password not match";
        }
        if($get_rows >= 1)
        {
            ?>
            <script>
                alert("user exist");
            </script>
            <?php
        }
        else
        {
            $sql1 = "insert into login (uname, email, password, user_type) values('$uname', '$email', '$password', 'user')";
            // if($sql1)
            // {
            //     echo "<script>alert('Registered successfully');</script>";
            //     echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
            // }
            mysqli_query($db, $sql1);
            $_SESSION['email']=$email;
            header("location:login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up Panel - Nexus</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/searchboxstyle.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6880c7d510.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-fba26eda6a3fd6b4d0ce0def1e2ba1d7.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script type="text/javascript">
        function checkpass() {
                if (document.signup.password.value != document.signup.confirmpassword.value) {
                    alert(' Password and Confirm Password field does not match');
                    document.signup.confirmpassword.focus();
                    return false;
                }
                return true;
            } 
    </script>
</head>

<body>
    <div class="main" id="main-site">
        <div class="bg-color">
            <div class="login-form">
                <div class="login-form-content">
                    <div class="login-bg">
                        <div class="login-dtl">
                            <div class="login-form-dtl">
                                <div class="login-form-head">
                                    <h2>Signup Account</h2>
                                    <a href="index.php"><img src="images/back-to-home.svg" alt="">Home</a>
                                </div>
                                <div class="login-form-acc">
                                    <h6>Already have an account? <a href="login.php">Login</a></h6>
                                    <!-- <h6>Don't have an account? <a href="signup.html">Register here</a></h6> -->
                                </div>
                                <form method="post" name="signup" onsubmit="return checkpass();">
                                    <div class="login-field">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="login-field-cnt">
                                                    <p>Username</p>
                                                    <input type="text" name="uname" class="textInput" placeholder="Enter username" id="name" required>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="login-field-cnt">
                                                    <p>Last Name</p>
                                                    <input type="text" name="lname" class="textInput" placeholder="Enter last name ( optional )" id="name">
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="login-field-cnt">
                                            <p>Email</p>
                                            <input type="text" name="email" class="textInput" placeholder="Enter email address" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Example: helloworld@gmail.com or helloworld123@gmail.com" required>
                                        </div>
                                        <!-- <div class="login-field-cnt">
                                            <p>Contact</p>
                                            <input type="text" name="contact" class="textInput" placeholder="Enter contact number" pattern="[0-9]{10}" title="only 10 numeric characters" required>
                                        </div> -->
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="login-field-cnt">
                                                    <p>Password</p>
                                                    <input type="text" name="password" class="textInput" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z]).{4,}" title="at least one number and lowercase letter, and at least 4 or more characters" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="login-field-cnt">
                                                    <p>Confirm Password</p>
                                                    <input type="text" name="confirmpassword" class="textInput" placeholder="Enter confirm password" pattern="(?=.*\d)(?=.*[a-z]).{4,}" title="at least one number and lowercase letter, and at least 4 or more characters" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="login-btn">
                                            <input type="submit" name="submit" value="Create Account">
                                        </div>
                                    </div>
                                    <!-- <h6>Don't have an account? <a href="#">Register</a></h6> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

<!-- *********************************************************************************************** -->

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/script.js"></script>


</body>
</html>
