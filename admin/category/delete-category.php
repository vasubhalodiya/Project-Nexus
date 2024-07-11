<?php
include('../../includes/config.php');
$catid = $_REQUEST['id'];

$qry1 = "delete from category where catid=$catid";
$rs1 = mysqli_query($db, $qry1);

header("location:admin-category.php");

?>