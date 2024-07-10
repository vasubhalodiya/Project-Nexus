<?php
include('../../includes/config.php');
$proid = $_REQUEST['id'];
$qry2 = "select * from product where proid='$proid'";
$rs1 = mysqli_query($db, $qry2);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Product- Nexus</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/fontawesome-all.css" >
        <link rel="stylesheet" href="../../css/searchboxstyle.css">
        <link rel="stylesheet" href="../../css/slick.css">
        <link rel="stylesheet" href="../../css/slick-theme.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/style.css" >
        <link rel="stylesheet" href="../../css/responsive.css" >
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
            <div class="cnt-main-add">
                <div class="cnt-adding">
                    <div class="cnt-adding-head">
                        <h4>Add Product</h4>
                    </div>
                    <div class="cnt-adding-form all-center">
                        <form action="update-product.php" method="post">
                        <?php
                        while($row = mysqli_fetch_array($rs1))
                        {
                            echo "<div class='cnt-adding-main-part'>
                                    <div class='cnt-adding-part'>
                                        <div class='cnt-adding-field'>
                                            <h5>Product Name</h5>
                                            <input type='text' placeholder='Enter name' name='proname' value='$row[2]'>
                                        </div>
                                        <div class='cnt-adding-field'>
                                            <h5>Product Stock</h5>
                                            <input type='text' placeholder='Enter stock' name='prostock' value='$row[5]'>
                                        </div>
                                        <div class='cnt-adding-field'>
                                            <h5>Product Quantity</h5>
                                            <input type='text' placeholder='Enter quantity' name='proquantity' value='$row[4]'>
                                        </div>
                                    </div>
                                    <div class='cnt-adding-part'>
                                        <div class='cnt-adding-field'>
                                            <h5>Product Price</h5>
                                            <input type='text' placeholder='Enter price' name='proprice' value='$row[3]'>
                                        </div>
                                        <div class='cnt-adding-field'>
                                            <h5>Product Image</h5>
                                            <label class='picture' for='proimage' tabIndex='0'>
                                                <img src='../../images/Upload.svg' alt=''><h6>Choose product images</h6>
                                            </label>
                                            <span class='picture-image'></span>
                                            <input type='file' name='proimage' id='proimage' value='$row[1]'>
                                        </div>
                                    </div>
                                </div>
                                <input type='hidden' name='id' value='$row[0]'>
                                <div class='update-form-btn'>
                                    <div class='update-form-btn-off'>
                                        <a href='admin-product.php'>Cancle</a>
                                    </div>
                                    <div class='update-form-btn-on'>
                                        <input type='submit' name='update' value='Update'>
                                    </div>
                                </div>";
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>



        </div>
<!-- ******************************************************************************************** -->
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/slick.min.js"></script>
        <script src="../../js/wow.min.js"></script>
        <script src="../../js/script.js"></script>

        </body>
</html>













