<?php
include('../../includes/config.php');
if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "upload/".$filename;
    move_uploaded_file($tempname, $filename);

    $proname = $_POST['proname'];
    $proprice = $_POST['proprice'];
    $procolor = $_POST['procolor'];
    $prosize = $_POST['prosize'];
    $proquantity = $_POST['proquantity'];
    $prostockstatus = $_POST['prostockstatus'];
    $prodesc = $_POST['prodesc'];
    
    $qry1 = "update product set proimage='$folder', proname='$proname', proprice='$proprice', procolor='$procolor', prosize='$prosize', proquantity='$proquantity', prostockstatus='$prostockstatus', prodesc='$prodesc' where proid=$id";

    $rs1 = mysqli_query($db, $qry1);
    // echo $qry1; //or
    // echo "Field Update Successfully";
    header("location:admin-product.php");
    
}

?>