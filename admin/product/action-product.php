<?php
include('../../includes/config.php');
if(isset($_POST["insert"]))
{
    // $proid = $_POST['proid'];
    $proname = $_POST['proname'];
    $prostock = $_POST['prostock'];
    $proprice = $_POST['proprice'];
    $proquantity = $_POST['proquantity'];
    // $proimage = $_POST['proimage'];
    // $procolor = $_POST['procolor'];
    // $prosize = $_POST['prosize'];
    $file_name = $_FILES['proimage']['name'];
    $file_tmp = $_FILES['proimage']['tmp_name'];
    $folder = "upload/".$file_name;
    move_uploaded_file($file_tmp."upload/".$file_name);


    $query = "insert into product(proimage, proname, prostock, proprice, proquantity) values('$folder','$proname','$prostock',' $proprice','$proquantity')";

    $run = mysqli_query($db, $query) or die ("can not insert data into database. ".mysqli_error($db));

    if($run)
    {
        header("location:admin-product.php");
    }
}      
?>





































