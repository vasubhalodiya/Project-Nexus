<?php 
// include("header.php"); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart - Nexus</title>
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
                                <a href="index.php" class="nav-links"><li>Home</li></a>
                                <a href="shop.php" class="nav-links"><li>Shop</li></a>
                                <!-- <a href="brands.php" class="nav-links"><li>Brands</li></a> -->
                                <a href="#" class="nav-links"><li class="end-line">Support</li></a>
                            </ul>
                        </div>
                        <div class="nav-profile">
                            <ul>
                                <a href="cart.php" class="nav-links active">
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
                                <a href="#" class="nav-links"><li><img src="images/User-1.svg" alt=""></li></a>
                            </ul>
                        </div>
                    </div>
                <!-- </div> -->
            </div>

            <div class="cart">
                <div class="container">
                    <div class="cart-content">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class='card-cnt'>
                                    <div class='cart-product'>
                                        <div class='cart-product-head'>
                                            <h3>Your Cart</h3>
                                        </div>
                                            <?php
                                                if(isset($_SESSION['cart']))
                                                {
                                                    foreach($_SESSION['cart'] as $key => $value)
                                                    {
                                                    $sr=$key+1;
                                                    echo "<div class='cart-card'>
                                                    <div class='cart-card-part'>
                                                        <div class='cart-card-img'>
                                                        </div>
                                                        <div class='cart-card-title'>
                                                            <h4>$value[proname]</h4>
                                                        </div>
                                                    </div>
                                                    <div class='cart-card-part'>
                                                        <div class='cart-card-price'>
                                                            <h6>$$value[proprice].00</h6>
                                                        </div>
                                                        <div class='cart-card-child-part'>
                                                            <div class='cart-card-increment-decrement'>
                                                                <div class='cart-plus-minus'>
                                                                    <table>
                                                                        <tr class='cart'>
                                                                            <td class='text-center'>
                                                                                <span class='price'><strong>$value[proprice]</strong></span>
                                                                            </td>
                                                                            <td class='text-center'>
                                                                                <input class='qty form-control' type='number' value='1' min='1'>
                                                                            </td>
                                                                            <td class='text-center'>
                                                                                <span class='subtotal'>$value[proprice]</span>
                                                                            </td>
                                                                            <td>
                                                                                <a href='javascript:void(0)' class='remove'><i class='icofont-trash'></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class='cart-card-close'>
                                                                <form action='managecart.php' method='POST'>
                                                                    <button name='Remove_Item' class='cart-close-btn'><img src='images/close.svg' alt=''></button>
                                                                    <input type='hidden' name='proname' value='$value[proname]'>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>";
                                                }
                                            }
                                        ?>
                                    </div>        
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="cart-cnt">
                                    <div class="cart-summary">
                                        <div class="summary-card">
                                            <div class="summary-head">
                                                <h4>Order Summary</h4>
                                            </div>
                                            <div class="summary-field">
                                                <h5>Subtotal:</h5>
                                                <!-- <h6>$ 90.00</h6> -->
                                            <h6>$<span id="total">0</span></h6>
                                            </div>
                                            <div class="summary-field">
                                                <h5>Shipping:</h5>
                                                <h6>Free</h6>
                                            </div>
                                            <div class="summary-field new-border">
                                                <h5>Tax:</h5>
                                                <h6>$ 3.00</h6>
                                            </div>
                                            <div class="summary-field">
                                                <h5>Total:</h5>
                                                <h6>$ 100.00</h6>
                                            </div>
                                            <div class="summary-btn">
                                                <input type="submit" name="checkout" value="Checkout">
                                            </div>
                                            <div class="summary-continue-shopping">
                                                <a href="#">Continue Shopping</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    <script>
        $('.qty').change(function () {
            updateQuantity(this);
        });


        function updateQuantity(qtyInput) {
            var cartRow = $(qtyInput).closest('tr');
            var price = parseFloat($('.price', cartRow).text());
            var quantity = $('.qty', cartRow).val();
            var subtotal = $('.subtotal', cartRow);
            var linePrice = price * quantity;
            $(subtotal).text(linePrice.toFixed(2));
            total_calculate()
        }

        function total_calculate() {
            var total = 0;
            $(".cart .subtotal").each(function () {
                var value = $(this).text() != "" ? parseFloat($(this).text()) : 0;
                total += value;
            })
            $("#total").text(total.toFixed(2))
        }
        total_calculate()
    </script>

    </body>
</html>




<!-- <div class='cart-plus-minus'>
    <button class='cart-qty-minus' type='button' value='-'>-</button>
    <input type='text' name='qty' min='1' class='qty form-control' value='$value[proqty]'/>
    <button class='cart-qty-plus' type='button' value='+'>+</button>
</div> -->