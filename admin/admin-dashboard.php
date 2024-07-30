<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Dashboard - Nexus</title>
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
                                    <li class="sidebar-link-menu">
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
                            <h6><a href="admin-dashboard.php">Admin</a><img src="../images/Chevron Right admin.svg" alt=""><a class="path-active">Dashboard</a></h6>
                        </div>
                        <div class="cnt-profile">
                            <a href="admin-profile.php"><img src="../images/my-icon.jpg" alt=""></a>
                        </div>
                    </div>
<!-- ========================================================================= -->

                    <div class="cnt-main-content">
                        <div class="cnt-child-content">
                            <div class="cnt-head">
                                <h4>Dashboard</h4>
                            </div>
                            <div class="dashboard">
                                <div class="dashboard-content">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="dashboard-card">
                                                <div class="dashboard-count">
                                                    <h5>Users</h5>
                                                    <?php
                                                        include('../includes/config.php');
                                                        $users_query = "SELECT * from users";
                                                        $users_query_run = mysqli_query($db, $users_query);

                                                        if($users_total = mysqli_num_rows($users_query_run))
                                                        {
                                                            echo "<h3>".$users_total."</h3>";
                                                        }
                                                        else
                                                        {
                                                            echo "<h3>No Data</h3>";
                                                        }
                                                    ?>
                                                    <!-- <h3>3</h3> -->
                                                </div>
                                                <div class="dashboard-view">
                                                    <a href="#">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="dashboard-card">
                                                <div class="dashboard-count">
                                                    <h5>Category</h5>
                                                    <?php
                                                        include('../includes/config.php');
                                                        $category_query = "SELECT * from category";
                                                        $category_query_run = mysqli_query($db, $category_query);

                                                        if($category_total = mysqli_num_rows($category_query_run))
                                                        {
                                                            echo "<h3>".$category_total."</h3>";
                                                        }
                                                        else
                                                        {
                                                            echo "<h3>No Data</h3>";
                                                        }
                                                    ?>
                                                    <!-- <h3>3</h3> -->
                                                </div>
                                                <div class="dashboard-view">
                                                    <a href="#">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="dashboard-card">
                                                <div class="dashboard-count">
                                                    <h5>Product</h5>
                                                    <?php
                                                        include('../includes/config.php');
                                                        $product_query = "SELECT * from product";
                                                        $product_query_run = mysqli_query($db, $product_query);

                                                        if($product_total = mysqli_num_rows($product_query_run))
                                                        {
                                                            echo "<h3>".$product_total."</h3>";
                                                        }
                                                        else
                                                        {
                                                            echo "<h3>No Data</h3>";
                                                        }
                                                    ?>
                                                    <!-- <h3>3</h3> -->
                                                </div>
                                                <div class="dashboard-view">
                                                    <a href="#">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="dashboard-card">
                                                <div class="dashboard-count">
                                                    <h5>Sales</h5>
                                                    <?php
                                                        include('../includes/config.php');
                                                        $sales_query = "SELECT * from sales";
                                                        $sales_query_run = mysqli_query($db, $sales_query);

                                                        if($sales_total = mysqli_num_rows($sales_query_run))
                                                        {
                                                            echo "<h3>".$sales_total."</h3>";
                                                        }
                                                        else
                                                        {
                                                            echo "<h3>No Data</h3>";
                                                        }
                                                    ?>
                                                    <!-- <h3>3</h3> -->
                                                </div>
                                                <div class="dashboard-view">
                                                    <a href="#">View Details</a>
                                                </div>
                                            </div>
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