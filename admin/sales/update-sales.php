<?php
include('../../includes/config.php');
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $salesname = $_POST['salesname'];
    $salesqty = $_POST['salesqty'];
    $salestotal = $_POST['salestotal'];
    $salesdate = $_POST['salesdate'];
    
    $qry1 = "update sales set salesname='$salesname', salesname='$salesname', salestotal='$salestotal', salesdate='$salesdate' where salesid=$id";

    $rs1 = mysqli_query($db, $qry1);
    // echo $qry1; //or
    // echo "Field Update Successfully";
    header("location:admin-sales.php");
    
}

?>