<?php
include('../../includes/config.php');
if(isset($_POST["insert"]))
{
    // $proid = $_POST['proid'];
    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "upload/".$filename;
    move_uploaded_file($tempname, $filename);

    // $proimage = $_POST['proimage'];
    $proname = $_POST['proname'];
    $proprice = $_POST['proprice'];
    $procategory = $_POST['procategory'];
    $procolor = $_POST['procolor'];
    $prosize = $_POST['prosize'];
    $proquantity = $_POST['proquantity'];
    $prostockstatus = $_POST['prostockstatus'];
    $prodesc = $_POST['prodesc'];

    $query = "insert into product(proimage, proname, proprice, procategory, procolor, prosize, proquantity, prostockstatus, prodesc) values('$folder','$proname',' $proprice',' $procategory',' $procolor',' $prosize','$proquantity','$prostockstatus',' $prodesc')";
    echo $query;
    $run = mysqli_query($db, $query) or die ("can not insert data into database. ".mysqli_error($db));

    if($run)
    {
        header("location:admin-product.php");
    }
}      
?>





































