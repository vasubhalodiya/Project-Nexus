<?php
include('../../includes/config.php');
if(isset($_POST["insert"]))
{
    // $proid = $_POST['proid'];
    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "upload/".$filename;
    move_uploaded_file($tempname, $filename);

    $proname = $_POST['proname'];
    $prostock = $_POST['prostock'];
    $proprice = $_POST['proprice'];
    $proquantity = $_POST['proquantity'];
    // $proimage = $_POST['proimage'];
    // $procolor = $_POST['procolor'];
    // $prosize = $_POST['prosize'];

    $query = "insert into product(proimage, proname, prostock, proprice, proquantity) values('$folder','$proname','$prostock',' $proprice','$proquantity')";

    $run = mysqli_query($db, $query) or die ("can not insert data into database. ".mysqli_error($db));

    if($run)
    {
        header("location:admin-product.php");
    }
}      
?>





































