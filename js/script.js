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

// add product active

const tabsbtn = document.querySelectorAll(".add-item");
const allctnbtn = document.querySelectorAll(".add-cnt");

tabsbtn.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        tabsbtn.forEach((tab) => {
            tab.classList.remove("active");
        });
        tab.classList.add("active");
        allctnbtn.forEach((content) => {
            content.classList.remove("active");
        });
        allctnbtn[index].classList.add("active");
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

getPagination('#table-id');
$('#maxRows').trigger('change');
function getPagination(table) {

    $('#maxRows').on('change', function () {
        $('.pagination').html('');						// reset pagination div
        var trnum = 0;									// reset tr counter 
        var maxRows = parseInt($(this).val());			// get Max Rows from select option

        var totalRows = $(table + ' tbody tr').length;		// numbers of rows 
        $(table + ' tr:gt(0)').each(function () {			// each TR in  table and not the header
            trnum++;									// Start Counter 
            if (trnum > maxRows) {						// if tr number gt maxRows

                $(this).hide();							// fade it out 
            } if (trnum <= maxRows) { $(this).show(); }// else fade in Important in case if it ..
        });											//  was fade out to fade it in 
        if (totalRows > maxRows) {						// if tr total rows gt max rows option
            var pagenum = Math.ceil(totalRows / maxRows);	// ceil total(rows/maxrows) to get ..  
            //	numbers of pages 
            for (var i = 1; i <= pagenum;) {			// for each page append pagination li 
                $('.pagination').append('<li data-page="' + i + '">\<span>'+ i++ + '<span class="sr-only">(current)</span></span>\</li>').show();
            }											// end for i 


        } 												// end if row count > max rows
        $('.pagination li:first-child').addClass('active'); // add active class to the first li 


        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
        showig_rows_count(maxRows, 1, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

        $('.pagination li').on('click', function (e) {		// on click each page
            e.preventDefault();
            var pageNum = $(this).attr('data-page');	// get it's number
            var trIndex = 0;							// reset tr counter
            $('.pagination li').removeClass('active');	// remove active class from all li 
            $(this).addClass('active');					// add active class to the clicked 


            //SHOWING ROWS NUMBER OUT OF TOTAL
            showig_rows_count(maxRows, pageNum, totalRows);
            //SHOWING ROWS NUMBER OUT OF TOTAL



            $(table + ' tr:gt(0)').each(function () {		// each tr in table not the header
                trIndex++;								// tr index counter 
                // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
                    $(this).hide();
                } else { $(this).show(); } 				//else fade in 
            }); 										// end of for each tr in table
        });										// end of on click pagination list
    });
    // end of on select change 

    // END OF PAGINATION 

}

// SI SETTING
$(function () {
    // Just to append id number for each row  
    default_index();

});

//ROWS SHOWING FUNCTION
function showig_rows_count(maxRows, pageNum, totalRows) {
    //Default rows showing
    var end_index = maxRows * pageNum;
    var start_index = ((maxRows * pageNum) - maxRows) + parseFloat(1);
    var string = 'Showing ' + start_index + ' to ' + end_index + ' of ' + totalRows + ' entries';
    $('.rows-count').html(string);
}

// CREATING INDEX
function default_index() {
    $('table tr:eq(0)').prepend('<th> ID </th>')

    var id = 0;

    $('table tr:gt(0)').each(function () {
        id++
        $(this).prepend('<td>' + id + '</td>');
    });
}

// All Table search script
function FilterkeyWord_all_table() {

    // Count td if you want to search on all table instead of specific column

    var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("search-input-all");
    var input_value = document.getElementById("search-input-all").value;
    filter = input.value.toLowerCase();
    if (input_value != '') {
        table = document.getElementById("table-id");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {

            var flag = 0;

            for (j = 0; j < count; j++) {
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {

                    var td_text = td.innerHTML;
                    if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                        //var td_text = td.innerHTML;  
                        //td.innerHTML = 'shaban';
                        flag = 1;
                    } else {
                        //DO NOTHING
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
        //RESET TABLE
        $('#maxRows').trigger('change');
    }
}










































































































