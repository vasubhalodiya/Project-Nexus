<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Users - Nexus</title>
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
                                <a href="admin-dashboard.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../../images/Dashboard.svg">Dashboard
                                    </li>
                                </a>
                                <a href="admin-users.php">
                                    <li class="sidebar-link-menu active">
                                        <img src="../../images/Users.svg">Users
                                    </li>
                                </a>
                                <a href="admin-category.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../../images/Copy.svg">Category
                                    </li>
                                </a>
                                <a href="admin-product.php">
                                    <li class="sidebar-link-menu">
                                        <img src="../../images/Product.svg">Products
                                    </li>
                                </a>
                                <a href="admin-sales.php">
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
                                <a href="admin-setting.php">
                                    <li class="up-border sidebar-link-menu">
                                        <img src="../../images/Settings.svg">Setting
                                    </li>
                                </a>
                                <a href="admin-logout.php">
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
                            <h6><a href="admin-dashboard.php">Admin</a><img src="../../images/Chevron Right admin.svg" alt=""><a class="path-active">Users</a></h6>
                        </div>
                        <div class="cnt-profile">
                            <a href="admin-profile.php"><img src="../../images/my-icon.jpg" alt=""></a>
                        </div>
                    </div>
<!-- ========================================================================= -->
                    <div class="cnt-main-content">
                        <div class="cnt-child-content">
                            <div class="cnt-main-add" id="creat-cnt">
                                <h1>add item</h1>
                                <button id="save-cnt" onclick="mynew()">save</button>
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
                                            <table class="table table-class" id="table-id">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Rajah Armstrong</td>
                                                        <td>erat.neque@noncursusnon.ca</td>
                                                        <td>1-636-140-1210</td>
                                                        <td>Oct 26, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kuame Parsons</td>
                                                        <td>non.sapien@in.com</td>
                                                        <td>1-962-122-8834</td>
                                                        <td>Aug 2, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ira Parker</td>
                                                        <td>Vivamus.molestie.dapibus@quisturpisvitae.edu</td>
                                                        <td>1-584-906-8572</td>
                                                        <td>Sep 15, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dante Carlson</td>
                                                        <td>dis.parturient@mi.co.uk</td>
                                                        <td>1-364-156-9666</td>
                                                        <td>Nov 28, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nathan Bernard</td>
                                                        <td>Etiam.vestibulum.massa@nonummy.net</td>
                                                        <td>1-646-420-3211</td>
                                                        <td>Aug 4, 2016</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nathan Bernard</td>
                                                        <td>Etiam.vestibulum.massa@nonummy.net</td>
                                                        <td>1-646-420-3211</td>
                                                        <td>Aug 4, 2016</td>
                                                    </tr>
                                                </tbody>
                                                <!-- <div class="stock-main-content">
                                                    <div class="stock-not-found-content">
                                                        <div class="stock-img">
                                                            <img src="../../images/empty cart.png" alt="">
                                                        </div>
                                                        <div class="stock-txt">
                                                            <h3>No item found</h3>
                                                            <h5>Please refresh the page and try again</h5>
                                                        </div>
                                                    </div>
                                                </div> -->
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
                    $(".pagination").php("");
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
                $(".rows-count").php(string);
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

    </body>
</html>