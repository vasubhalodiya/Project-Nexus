<?php
include('../../includes/config.php');
$salesid = $_REQUEST['id'];

$qry1 = "delete from sales where salesid=$salesid";
$rs1 = mysqli_query($db, $qry1);

header("location:admin-sales.php");

?>