<?php
include('../../includes/config.php');
$uid = $_REQUEST['id'];

$qry1 = "delete from users where uid=$uid";
$rs1 = mysqli_query($db, $qry1);

header("location:admin-users.php");

?>