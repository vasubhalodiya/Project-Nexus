<?php
include('../includes/config.php');
if(isset($_POST["insert"]))
{
    $proid = $_POST['proid'];
    $proname = $_POST['proname'];
    $prostock = $_POST['prostock'];
    $proprice = $_POST['proprice'];
    $prowrongprice = $_POST['prowrongprice'];
    $proquantity = $_POST['proquantity'];
    $prodescription = $_POST['prodescription'];
    $proimage = $_POST['proimage'];
    // $procolor = $_POST['procolor'];
    // $prosize = $_POST['prosize'];

    // $db = mysqli_connect("localhost","root","","nexus");
    // $query = "insert into product(proid, proname, prostock, proprice, prowrongprice, proquantity, proimage, prodescription, procolor, prosize) values('$proid','$proname','$prostock',' $proprice','$prowrongprice','$proquantity','$proimage','$prodescription','$procolor','$prosize')";
    $query = "insert into product(proid, proname, prostock, proprice, prowrongprice, proquantity, prodescription, proimage) values('$proid','$proname','$prostock',' $proprice','$prowrongprice','$proquantity','$prodescription', '$proimage')";

    $run = mysqli_query($db, $query) or die ("can not insert data into database. ".mysqli_error($db));

    if($run)
    {
        // echo "data submited to database <a href='form.php'>Click here to submit data</a>";
        // echo "<br>Your aplication number is- ".mysqli_insert_id($db);
    }
}      
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Product- Nexus</title>
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
            <div class="content-main-section active cnt-full-width">
                <div class="content-child-section">
                    <div class="cnt-navbar">
                        <div class="cnt-path">
                            <h6><a href="admin-dashboard.html">Admin</a><img src="../images/Chevron Right admin.svg" alt=""><a class="path-active">Product</a></h6>
                        </div>
                        <div class="cnt-profile">
                            <a href="admin-profile.html"><img src="../images/my-icon.jpg" alt=""></a>
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
                                        <form action="insert.php" method="post">
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
                                                            <img src="../images/Upload.svg" alt=""><h6>Choose product images</h6>
                                                        </label>
                                                        <span class="picture-image"></span>
                                                        <input type="file" name="proimage" id="proimage">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cnt-adding-btn">
                                                <input type="submit" name="insert" value="Add Product">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="cnt-main-cnt" id="add-cnt">
                                <div class="cnt-head">
                                    <h4>Dashboard</h4>
                                    <button onclick="myFunction()">Add Product</button>
                                </div>
                                <div class="cnt-main-table">
                                    <div class="cnt-table">
                                        <form action="">
                                            <div class="header-wrap">
                                                <div class="tb-search">
                                                    <input type="text" id="search-input-all" onkeyup="FilterkeyWord_all_table()" placeholder="Search..">
                                                </div>
                                                <div class="num-rows">
                                                    <select name="state" id="maxRows">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                        <option value="70">70</option>
                                                        <option value="100">100</option>
                                                        <option value="5000">Show all Rows</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php
                                                include('../includes/config.php');
                                                $sql = "select * from product";
                                                $result = mysqli_query($db, $sql);

                                                if(mysqli_num_rows($result)>0)
                                                {
                                            ?>
                                            <table class="table table-class" id="table-id">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Wrong Price</th>
                                                        <!-- <th>color</th>
                                                        <th>size</th> -->
                                                        <th>Quantity</th>
                                                        <th>Stock</th>
                                                        <th>Description</th>
                                                        <th class="edit">Edit</th>
                                                        <th class="edit">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while($row = mysqli_fetch_array($result))
                                                    {
                                                        echo "<tbody>";
                                                        echo "<tr>";
                                                        echo "<td>".$row[1]."</td>";
                                                        echo "<td>".$row[2]."</td>";
                                                        echo "<td>".$row[3]."</td>";
                                                        echo "<td>".$row[4]."</td>";
                                                        echo "<td>".$row[5]."</td>";
                                                        echo "<td>".$row[6]."</td>";
                                                        echo "<td>".$row[7]."</td>";
                                                        echo "<td><a href='product-edit.php?id=$row[0]'><i class='fa-solid fa-pen'></i></a></td>";
                                                        echo "<td><a href='product-delete.php?id=$row[0]'<i class='fa-regular fa-trash-can'></i></a></td>";
                                                        echo "</tr>";
                                                    }
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                </tbody>
                                                <!-- <div class="stock-main-content">
                                                    <div class="stock-not-found-content">
                                                        <div class="stock-img">
                                                            <img src="../images/empty cart.png" alt="">
                                                        </div>
                                                        <div class="stock-txt">
                                                            <h3>No item found</h3>
                                                            <h5>Please refresh the page and try again</h5>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <?php
                                                    }
                                                ?>
                                            </table>
                                            <div class='pagination-container'>
                                                <nav>
                                                    <ul class="pagination"></ul>
                                                </nav>
                                                <div class="rows-count">Showing 11 to 20 of 91 entries</div>
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

        <script>
            function myFunction() {
                document.getElementById("creat-cnt").style.display = "block";
                document.getElementById("add-cnt").style.display = "none";
                document.getElementById("save-cnt").style.display = "block";
            }
            function mynew() {
                document.getElementById("creat-cnt").style.display = "none";
                document.getElementById("add-cnt").style.display = "block";
                document.getElementById("save-cnt").style.display = "none";
            }
        </script>

        <script>
            getPagination("#table-id");
            $("#maxRows").trigger("change");
            function getPagination(table) {
                $("#maxRows").on("change", function () {
                    $(".pagination").html("");
                    var trnum = 0;
                    var maxRows = parseInt($(this).val());

                    var totalRows = $(table + " tbody tr").length;
                    $(table + " tr:gt(0)").each(function () {
                        trnum++;
                        if (trnum > maxRows) {
                            $(this).hide();
                        }
                        if (trnum <= maxRows) {
                            $(this).show();
                        }
                    });
                    if (totalRows > maxRows) {
                        var pagenum = Math.ceil(totalRows / maxRows);
                        for (var i = 1; i <= pagenum;) {
                            $(".pagination")
                                .append(
                                    '<li data-page="' +
                                    i +
                                    '"><span>' +
                                    i++ +
                                    '<span class="sr-only">(current)</span></span></li>'
                                )
                                .show();
                        }
                    }
                    $(".pagination li:first-child").addClass("active");
                    showig_rows_count(maxRows, 1, totalRows);
                    $(".pagination li").on("click", function (e) {
                        e.preventDefault();
                        var pageNum = $(this).attr("data-page");
                        var trIndex = 0;
                        $(".pagination li").removeClass("active");
                        $(this).addClass("active");
                        showig_rows_count(maxRows, pageNum, totalRows);
                        $(table + " tr:gt(0)").each(function () {
                            trIndex++;
                            if (
                                trIndex > maxRows * pageNum ||
                                trIndex <= maxRows * pageNum - maxRows
                            ) {
                                $(this).hide();
                            } else {
                                $(this).show();
                            }
                        });
                    });
                });
            }

            $(function () {
                default_index();
            });

            function showig_rows_count(maxRows, pageNum, totalRows) {
                var end_index = maxRows * pageNum;
                var start_index = maxRows * pageNum - maxRows + parseFloat(1);
                var string =
                    "Showing " +
                    start_index +
                    " to " +
                    end_index +
                    " of " +
                    totalRows +
                    " entries";
                $(".rows-count").html(string);
            }

            function default_index() {
                $("table tr:eq(0)").prepend("<th> ID </th>");
                var id = 0;

                $("table tr:gt(0)").each(function () {
                    id++;
                    $(this).prepend("<td>" + id + "</td>");
                });
            }

            function FilterkeyWord_all_table() {
                var count = $(".table")
                    .children("tbody")
                    .children("tr:first-child")
                    .children("td").length;

                var input, filter, table, tr, td, i;
                input = document.getElementById("search-input-all");
                var input_value = document.getElementById("search-input-all").value;
                filter = input.value.toLowerCase();
                if (input_value != "") {
                    table = document.getElementById("table-id");
                    tr = table.getElementsByTagName("tr");

                    for (i = 1; i < tr.length; i++) {
                        var flag = 0;

                        for (j = 0; j < count; j++) {
                            td = tr[i].getElementsByTagName("td")[j];
                            if (td) {
                                var td_text = td.innerHTML;
                                if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                                    flag = 1;
                                } else {
                                }
                            }
                        }
                        if (flag == 1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                } else {
                    $("#maxRows").trigger("change");
                }
            }
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