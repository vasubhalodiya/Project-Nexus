<?php
include('../../includes/config.php');
$id = $_REQUEST['id'];

$qry1 = "delete from users where id=$id";
$rs1 = mysqli_query($db, $qry1);

header("location:admin-users.php");

?>