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






























































































































































































































































































