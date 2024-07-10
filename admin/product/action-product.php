<?php
include('../../includes/config.php');
if(isset($_POST["insert"]))
{
    // $proid = $_POST['proid'];
    $proname = $_POST['proname'];
    $prostock = $_POST['prostock'];
    $proprice = $_POST['proprice'];
    $proquantity = $_POST['proquantity'];
    $prodescription = $_POST['prodescription'];
    $proimage = $_POST['proimage'];
    // $procolor = $_POST['procolor'];
    // $prosize = $_POST['prosize'];

    // $db = mysqli_connect("localhost","root","","nexus");
    // $query = "insert into product(proid, proname, prostock, proprice, prowrongprice, proquantity, proimage, prodescription, procolor, prosize) values('$proid','$proname','$prostock',' $proprice','$prowrongprice','$proquantity','$proimage','$prodescription','$procolor','$prosize')";
    $query = "insert into product(proimage, proname, prostock, proprice, prowrongprice, proquantity, prodescription) values('$proimage','$proname','$prostock',' $proprice','$prowrongprice','$proquantity','$prodescription')";

    $run = mysqli_query($db, $query) or die ("can not insert data into database. ".mysqli_error($db));

    if($run)
    {
        // echo "data submited to database <a href='form.php'>Click here to submit data</a>";
        // echo "<br>Your aplication number is- ".mysqli_insert_id($db);
        header("location:admin-product.php");
    }
}      
?>










































