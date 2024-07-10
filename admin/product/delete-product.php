<?php
include('../../includes/config.php');
$proid = $_REQUEST['id'];

$qry1 = "delete from product where proid=$proid";
$rs1 = mysqli_query($db, $qry1);

header("location:admin-product.php");

?>