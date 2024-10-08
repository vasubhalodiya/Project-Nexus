<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Logout - Nexus</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/fontawesome-all.css" >
        <link rel="stylesheet" href="../css/searchboxstyle.css">
        <link rel="stylesheet" href="../css/slick.css">
        <link rel="stylesheet" href="../css/slick-theme.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/style.css" >
        <link rel="stylesheet" href="../css/responsive.css" >
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
            <div class="sidebar">
                <div class="sidebar-content">
                    <div class="sidebar-part">
                        <div class="sidebar-logo">
                            <a href="../index.php">Nexus</a>
                        </div>
                        <div class="sidebar-links">
                        <ul>
                                <a href="admin-dashboard.php">
                                    <li class="sidebar-link-menu active">
                                        <img src="../images/Dashboard.svg">Dashboard
                                    </li>
                                </a>
                                <a href="users/admin-users.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../images/Users.svg">Users
                                    </li>
                                </a>
                                <a href="category/admin-category.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../images/Copy.svg">Category
                                    </li>
                                </a>
                                <a href="product/admin-product.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../images/Product.svg">Products
                                    </li>
                                </a>
                                <a href="sales/admin-sales.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../images/Cart.svg">Sales
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-part">
                        <div class="sidebar-links">
                            <ul>
                                <a href="admin-setting.php">
                                    <li class="up-border sidebar-link-menu">
                                        <img src="../images/Settings.svg">Setting
                                    </li>
                                </a>
                                <a href="admin-logout.php">
                                    <li class="sidebar-link-menu active">
                                        <img src="../images/Logout.svg">Logout
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-main-section active">
                <div class="content-child-section">
                    <div class="cnt-navbar">
                        <div class="cnt-path">
                            <h6><a href="admin-dashboard.php">Admin</a><img src="../images/Chevron Right admin.svg" alt=""><a class="path-active">Logout</a></h6>
                        </div>
                        <div class="cnt-profile">
                            <a href="admin-profile.php"><img src="../images/my-icon.jpg" alt=""></a>
                        </div>
                    </div>
<!-- ========================================================================= -->
                    <div class="cnt-main-content">
                        <div class="cnt-child-content">
                            <div class="cnt-head">
                                <h4>Logout</h4>
                            </div>
                            <div class="logout-main-content">
                                <div class="logout-content">
                                    <div class="logout-name">
                                        <h5>Hey! <span>User</span></h5>
                                        <h4>Are you sure you want to log out form this website?</h4>
                                    </div>
                                    <div class="logout-btn">
                                        <div class="logout-no-btn">
                                            <a href="admin-dashboard.php">No</a>
                                        </div>
                                        <div class="logout-yes-btn">
                                            <a href="../logout.php">Yes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- ========================================================================= -->
                </div>
            </div>


        </div>
<!-- ******************************************************************************************** -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/slick.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/script.js"></script>

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