<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nexus</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome-all.css" >
        <link rel="stylesheet" href="css/searchboxstyle.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/responsive.css" >
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
<!-- ******************************************************************************************** -->
    <body>
        <div class="main" id="main-site">
            <div class="navbar">
                <!-- <div class="container"> -->
                    <div class="navbar-content">
                        <div class="nav-logo">
                            <a href="index.php"><h4>Nexus</h4></a>
                        </div>
                        <div class="nav-menu">
                            <ul>
                                <a href="index.php" class="nav-links active"><li>Home</li></a>
                                <a href="shop.php" class="nav-links"><li>Shop</li></a>
                                <!-- <a href="brands.php" class="nav-links"><li>Brands</li></a> -->
                                <a href="#" class="nav-links"><li class="end-line">Support</li></a>
                            </ul>
                        </div>
                        <div class="nav-profile">
                            <ul>
                                <a href="cart.php" class="nav-links">
                                    <li class="cart-count-relative">
                                        <img src="images/Cart.svg" alt="">
                                        <!-- <div class="cart-count">
                                            <p>0</p>
                                        </div> -->
                                    </li>
                                </a>
                                <a href="signup.php" class="nav-links"><li><img src="images/User-1.svg" alt=""></li></a>
                            </ul>
                        </div>
                    </div>
                <!-- </div> -->
            </div>


            <div class="header">
        <h1>Register, login and logout user php mysql</h1>
    </div>
    <hr>
    <table width="98%">
        <tr><td><marquee><h1>Wel-come to shop.co</h1></marquee></td></tr>
        <tr><td><img src="<?php echo "$result ['image'];"?>" height="100px" width="100px"></td></tr>
        <tr><td><h4>Welcome <br><?php echo $_SESSION['email'];?><br><a href="logout.php">Logout</a></h4></td></tr>
    </table>

            
        </div>
<!-- ******************************************************************************************** -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/script.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
                if(disclaimer) {
                    disclaimer.remove();
                }
            });
        </script>

    </body>
</html>