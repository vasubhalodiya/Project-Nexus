<?php
include('../../includes/config.php');
if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $filename = $_FILES['proimage']['name'];
    $tempname = $_FILES['proimage']['tmp_name'];
    $folder = "upload/".$filename;
    move_uploaded_file($tempname, $filename);

    $proname = $_POST['proname'];
    $proprice = $_POST['proprice'];
    $procategory = $_POST['procategory'];
    $procolor = $_POST['procolor'];
    $prosize = $_POST['prosize'];
    $proqty = $_POST['proqty'];
    $prostockstatus = $_POST['prostockstatus'];
    $prodesc = $_POST['prodesc'];
    
    $qry1 = "update product set proimage='$folder', proname='$proname', proprice='$proprice', procategory='$procategory', procolor='$procolor', prosize='$prosize', proqty='$proqty', prostockstatus='$prostockstatus', prodesc='$prodesc' where proid=$id";

    $rs1 = mysqli_query($db, $qry1);
    // echo $qry1; //or
    // echo "Field Update Successfully";
    header("location:admin-product.php");
    
}

?>