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
                                        <?php
                                            $count=0;
                                            if(isset($_SESSION['cart']))
                                            {
                                                $count=count($_SESSION['cart']);
                                            }
                                        ?>
                                        <div class="cart-count">
                                            <p><?php echo $count; ?></p>
                                        </div>
                                    </li>
                                </a>
                                <a href="index-other.php" class="nav-links"><li><img src="images/User-1.svg" alt=""></li></a>
                            </ul>
                        </div>
                    </div>
                <!-- </div> -->
            </div>

            <div class="header">
                <div class="container">
                    <div class="header-content">
                        <div class="header-txt">
                            <h2>Fresh Arrivals Online</h2>
                            <h6>Discover Our Newest Collection Today.</h6>
                            <div class="header-btn">
                                <a href="#">View Collection <img src="images/Arrow Right header.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="header-img">
                            <!-- <img src="images/header model.png" alt=""> -->
                            <img src="images/header model.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="category">
                <div class="container">
                    <div class="category-content">
                        <div class="category-head section-head">
                            <h3>Category</h3>
                        </div>
                        <div class="category-details">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="#">
                                        <div class="category-card">
                                            <h1>BOYS</h1>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="#">
                                        <div class="category-card cateory-women">
                                            <h1>WOMEN</h1>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="#">
                                        <div class="category-card">
                                            <h1>KIDS</h1>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="facility">
                <div class="container">
                    <div class="facility-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="facility-card">
                                    <div class="facility-img">
                                        <img src="images/Delivery.svg" alt="">
                                    </div>
                                    <div class="facility-title">
                                        <h5>Free Shipping</h5>
                                    </div>
                                    <div class="facility-cnt">
                                        <p>Upgrade your style today and get FREE shipping on all orders! Don't miss out.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="facility-card">
                                    <div class="facility-img">
                                        <img src="images/Star Badge.svg" alt="">
                                    </div>
                                    <div class="facility-title">
                                        <h5>Satisfaction Guarantee</h5>
                                    </div>
                                    <div class="facility-cnt">
                                        <p>Shop confidently with our Satisfaction Guarantee: Love it or get a refund.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 border-none">
                                <div class="facility-card">
                                    <div class="facility-img">
                                        <img src="images/Shield Check.svg" alt="">
                                    </div>
                                    <div class="facility-title">
                                        <h5>Secure Payment</h5>
                                    </div>
                                    <div class="facility-cnt">
                                        <p>Your security is our priority. Your payments are secure with us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="best-sell">
                <div class="container">
                    <div class="best-sell-content">
                        <div class="best-head section-head">
                            <h3>Best Selling</h3>
                        </div>
                        <div class="best-sell-details">
                        <div class="row">
                            <?php
                                include('includes/config.php');
                                $sql = "select * from product order by proid desc limit 4";
                                $result = mysqli_query($db, $sql);

                                if(mysqli_num_rows($result)>0)
                                {
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<div class='col-lg-3 col-md-6 col-sm-6'>
                                                <form action='managecart.php' method='post'>
                                                    <div class='best-card'>
                                                        <div class='best-card-img'>
                                                            <img src='admin/product/".$row['proimage']."'>
                                                        </div>
                                                        <div class='best-card-cnt'>
                                                            <div class='best-card-cnt-part'>
                                                                <div class='best-card-name'>
                                                                    <h4>".$row['proname']."</h4>
                                                                </div>
                                                                <div class='best-card-price'>
                                                                    <h6>$".$row['proprice']."</h6>
                                                                </div>
                                                            </div>
                                                            <div class='best-card-price-stock'>
                                                                <div class='best-card-stock'>
                                                                    <p>".$row['prostockstatus']."</p>
                                                                </div>
                                                                <div class='best-card-stock'>
                                                                    <button type='submit' name='Add_To_Cart'>Add to Cart</button>
                                                                    <input type='hidden' name='proname' value='".$row['proname']."'>
                                                                    <input type='hidden' name='proprice' value='".$row['proprice']."'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>";
                                        }
                                    }
                                ?>
                            </div>
                            <div class="best-btn">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <!-- <div class="container"> -->
                    <div class="footer-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="footer-details">
                                    <div class="footer-about">
                                        <div class="footer-logo">
                                            <a href="index.html">Nexus</a>
                                        </div>
                                        <div class="footer-paragraph">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, excepturi impedit iusto officiis, atque distinctio.</p>
                                        </div>
                                        <div class="footer-social-media">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="footer-details">
                                    <div class="footer-menu">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="footer-links right-new-border">
                                                    <div class="footer-sec-head">
                                                        <h5>Shop</h5>
                                                    </div>
                                                    <ul>
                                                        <a href="#"><li>My Account</li></a>
                                                        <a href="#"><li>Checkout</li></a>
                                                        <a href="cart.php"><li>Cart</li></a>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="footer-links">
                                                    <div class="footer-sec-head add-border">
                                                        <h5>Company</h5>
                                                    </div>
                                                    <ul>
                                                        <a href="#"><li>About us</li></a>
                                                        <a href="#"><li>Contact</li></a>
                                                        <!-- temporary -->
                                                        <a href="admin/admin-dashboard.php"><li>Admin</li></a>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="footer-links left-new-border">
                                                    <div class="footer-sec-head">
                                                        <h5>Support</h5>
                                                    </div>
                                                    <ul>
                                                        <a href="#"><li>FAQ</li></a>
                                                        <a href="#"><li>Terms & Conditon</li></a>
                                                        <a href="#"><li>Privacy Policy</li></a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="footer-details">
                                    <div class="footer-payment">
                                        <div class="footer-sec-head">
                                            <h5>Accepted Payments</h5>
                                        </div>
                                        <div class="footer-pay-method">
                                            <ul>
                                                <li><img src="images/Google Pay.svg" alt=""  class="googlepay"></li>
                                                <li><img src="images/Mastercard.svg" alt="" class="mastercard"></li>
                                                <li><img src="images/Visa.svg" alt="" class="visa"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
            

            
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