// sidebar active

const tabs = document.querySelectorAll(".sidebar-link-menu");
const allctn = document.querySelectorAll(".content-main-section");

tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        tabs.forEach((tab) => {
            tab.classList.remove("active");
        });
        tab.classList.add("active");
        allctn.forEach((content) => {
            content.classList.remove("active");
        });
        allctn[index].classList.add("active");
    });
});

// **********************************************************************************************************

const navlinks = document.querySelectorAll('.nav-links');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                tabs.forEach(tab => { tab.classList.remove('active') })
                tab.classList.add('active')
                allctn.forEach(content => { content.classList.remove('active') })
                allctn[index].classList.add('active');
            });
        });


// **********************************************************************************************************

// -----------------for-Shopping-cart-------------
$(document).ready(function () {
    update_amounts();
    $(".qty, .price").on("keyup keypress blur change", function (e) {
        update_amounts();
    });
});
function update_amounts() {
    var sum = 0.0;
    $("#myTable > tbody  > tr").each(function () {
        var qty = $(this).find(".qty").val();
        var price = $(this).find(".price").val();
        var amount = qty * price;
        sum += amount;
        $(this)
            .find(".amount")
            .text("" + amount);
    });
    $(".total").text(sum);
}
//----------------for quantity-increment-or-decrement-------
var incrementQty;
var decrementQty;
var plusBtn = $(".cart-qty-plus");
var minusBtn = $(".cart-qty-minus");
var incrementQty = plusBtn.click(function () {
    var $n = $(this).parent(".cart-plus-minus").find(".qty");
    $n.val(Number($n.val()) + 1);
    update_amounts();
});

var decrementQty = minusBtn.click(function () {
    var $n = $(this).parent(".cart-plus-minus").find(".qty");
    var QtyVal = Number($n.val());
    if (QtyVal > 0) {
        $n.val(QtyVal - 1);
    }
    update_amounts();
});

// ********************************************************************************************************

//================== add button================

$(".click-here-product").on("click", function () {
    $(".custom-model-main-product").addClass("model-open");
});
$(".click-here-purchase").on("click", function () {
    $(".custom-model-main-purchase").addClass("model-open");
});
$(".close-btn, .bg-overlay, .add-btn").click(function () {
    $(".custom-model-main-product, .custom-model-main-purchase").removeClass(
        "model-open"
    );
});
// ============
var allFaces = $("svg.face > *");
allFaces.on("click", function () {
    allFaces.removeClass("on");
    $(this).addClass("on");
});

if (allFaces.hasId("smiley")) {
}

// *************************************************************************************************************

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