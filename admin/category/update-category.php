<?php
include('../../includes/config.php');
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $catname = $_POST['catname'];
    
    $qry1 = "update category set catname='$catname' where catid=$id";

    $rs1 = mysqli_query($db, $qry1);
    // echo $qry1; //or
    // echo "Field Update Successfully";
    header("location:admin-category.php");
    
}

?>