
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
            <div class="sidebar">
                <div class="sidebar-content">
                    <div class="sidebar-part">
                        <div class="sidebar-logo">
                            <h3>Nexus</h3>
                        </div>
                        <div class="sidebar-links">
                        <ul>
                                <a href="../admin-dashboard.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../../images/Dashboard.svg">Dashboard
                                    </li>
                                </a>
                                <a href="../users/admin-users.php">
                                    <li class="sidebar-link-menu active">
                                        <img src="../../images/Users.svg">Users
                                    </li>
                                </a>
                                <a href="../category/admin-category.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../../images/Copy.svg">Category
                                    </li>
                                </a>
                                <a href="../product/admin-product.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../../images/Product.svg">Products
                                    </li>
                                </a>
                                <a href="../sales/admin-sales.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../../images/Cart.svg">Sales
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-part">
                        <div class="sidebar-links">
                            <ul>
                                <a href="../admin-setting.php">
                                    <li class="up-border sidebar-link-menu">
                                        <img src="../../images/Settings.svg">Setting
                                    </li>
                                </a>
                                <a href="../admin-logout.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../../images/Logout.svg">Logout
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
                            <h6><a href="admin-dashboard.php">Admin</a><img src="../../images/Chevron Right admin.svg" alt=""><a class="path-active">Product</a></h6>
                        </div>
                        <div class="cnt-profile">
                            <a href="admin-profile.php"><img src="../../images/my-icon.jpg" alt=""></a>
                        </div>
                    </div>
<!-- ========================================================================= -->
                    <div class="cnt-main-content">
                        <div class="cnt-child-content">
                            <div class="cnt-main-add" id="creat-cnt">
                                <div class="cnt-adding">
                                    <div class="cnt-adding-head">
                                        <h4>Add Product</h4>
                                    </div>
                                    <div class="cnt-adding-form">
                                        <form action="admin-product.php" method="post">
                                            <div class="cnt-adding-main-part">
                                                <div class="cnt-adding-part">
                                                    <div class="cnt-adding-field">
                                                        <h5>Product Id</h5>
                                                        <input type="text" placeholder="Enter id" name="proid">
                                                    </div>
                                                    <div class="cnt-adding-field">
                                                        <h5>Product Name</h5>
                                                        <input type="text" placeholder="Enter name" name="proname">
                                                    </div>
                                                    <div class="cnt-adding-field">
                                                        <h5>Product Price</h5>
                                                        <input type="text" placeholder="Enter price" name="proprice">
                                                    </div>
                                                    <div class="cnt-adding-field">
                                                        <h5>Product Quantity</h5>
                                                        <input type="text" placeholder="Enter quantity" name="proquantity">
                                                    </div>
                                                    <div class="cnt-adding-field">
                                                        <h5>Product Description</h5>
                                                        <textarea cols="30" rows="5" placeholder="Product description" name="prodescription"></textarea>
                                                    </div>
                                                </div>
                                                <div class="cnt-adding-part">
                                                    <div class="cnt-adding-field">
                                                        <h5>Product Stock</h5>
                                                        <input type="text" placeholder="Enter stock" name="prostock">
                                                    </div>
                                                    <div class="cnt-adding-field">
                                                        <h5>Product Wrong Price</h5>
                                                        <input type="text" placeholder="Enter wrong price" name="prowrongprice">
                                                    </div>
                                                    <div class="cnt-adding-field">
                                                        <h5>Product Image</h5>
                                                        <label class="picture" for="proimage" tabIndex="0">
                                                            <img src="../../images/Upload.svg" alt=""><h6>Choose product images</h6>
                                                        </label>
                                                        <span class="picture-image"></span>
                                                        <input type="file" name="proimage" id="proimage">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cnt-adding-btn">
                                                <!-- <button id="save-cnt" onclick="mynew()">Save Product</button> -->
                                                 <input type="submit" name="insert" value="Add Product">
                                            </div>
                                        </form>
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
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/slick.min.js"></script>
        <script src="../../js/wow.min.js"></script>
        <script src="../../js/script.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
                if(disclaimer) {
                    disclaimer.remove();
                }
            });
        </script>

        <script>
            const inputFile = document.querySelector("#proimage");
            const pictureImage = document.querySelector(".picture-image");
            const pictureImageTxt = "";
            pictureImage.innerHTML = pictureImageTxt;

            inputFile.addEventListener("change", function (e) {
                const inputTarget = e.target;
                const file = inputTarget.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.addEventListener("load", function (e) {
                        const readerTarget = e.target;

                        const img = document.createElement("img");
                        img.src = readerTarget.result;
                        img.classList.add("picture-img");

                        pictureImage.innerHTML = "";
                        pictureImage.appendChild(img);
                    });

                    reader.readAsDataURL(file);
                } else {
                    pictureImage.innerHTML = pictureImageTxt;
                }
            });
        </script>

    </body>
</html>




