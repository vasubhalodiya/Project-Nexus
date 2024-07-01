<?php

    session_start();
    // $db = mysqli_connect("localhost","root","","nexus");
    // include("includes/config.php");
    include("includes/config.php");
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "select * from login where email='$email' and password='$password'";
        $result = mysqli_query($db,$sql)or die(mysqli_error($db));
        $total = mysqli_num_rows($result);

        //echo $total;

        // if($total == 1)
        // {
        //     $_SESSION['email']=$email;
        //     header('location:welcome.php');
        // }

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);
      
            if($row['user_type'] == 'admin'){
      
            //    $_SESSION['admin_name'] = $row['name'];
               header('location:admin.html');
      
            }elseif($row['user_type'] == 'user'){
      
            //    $_SESSION['user_name'] = $row['name'];
               header('location:user.html');
      
            }
           
        }
        else
        {
            $error[] = 'incorrect email or password!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Panel - Nexus</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/searchboxstyle.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/sharp-regular.css">
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
</head>

<body>
    <div class="main" id="main-site">
        <div class="bg-color">
            <div class="login-form user-panel-form">
                <div class="login-form-content user-panel-form-content">
                    <div class="login-bg">
                        <div class="login-dtl">
                            <div class="login-form-dtl">
                                <div class="login-form-head">
                                    <h2>User Login</h2>
                                    <a href="index.php"><img src="images/back-to-home.svg" alt="">Home</a>
                                </div>
                                <div class="login-form-acc">
                                    <!-- <h6>Already have an account? <a href="login.html">Login</a></h6> -->
                                    <h6>Don't have an account? <a href="signup.php">Register here</a></h6>
                                </div>
                                <form method="post" action="">
                                    <div class="login-field">
                                        <div class="login-field-cnt">
                                            <p>Email</p>
                                            <input type="text" name="email" id="textInput" placeholder="Enter email id">
                                        </div>
                                        <div class="login-field-cnt">
                                            <p>Password</p>
                                            <input type="text" name="password" id="textInput" placeholder="Enter password">
                                        </div>
                                        <div class="login-btn">
                                            <input type="submit" name="login" value="Login">
                                        </div>
                                    </div>
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



























