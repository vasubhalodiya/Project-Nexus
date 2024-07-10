<?php
include('../../includes/config.php');
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $proname = $_POST['proname'];
    $proprice = $_POST['proprice'];
    $proquantity = $_POST['proquantity'];
    $prostock = $_POST['prostock'];
    $proimage = $_POST['proimage'];
    // $procolor = $_POST['procolor'];
    // $prosize = $_POST['prosize'];
    
    $qry1 = "update product set proimage='$proimage', proname='$proname', proprice='$proprice', proquantity='$proquantity', prostock='$prostock' where proid=$id";

    $rs1 = mysqli_query($db, $qry1);
    // echo $qry1; //or
    // echo "Field Update Successfully";
    header("location:admin-product.php");
    
}

?>