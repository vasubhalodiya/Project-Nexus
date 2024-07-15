<?php
include('../../includes/config.php');
if(isset($_POST["insert"]))
{
    // $proid = $_POST['proid'];
    $filename = $_FILES["uploadimage"]["name"];
    $tempfile = $_FILES["uploadimage"]["tmp_name"];
    $folder = "upload/".$filename;
    move_uploaded_file($tempfile, $folder);

    // $proimage = $_POST['proimage'];
    $proname = $_POST['proname'];
    $proprice = $_POST['proprice'];
    $procategory = $_POST['procategory'];
    $procolor = $_POST['procolor'];
    $prosize = $_POST['prosize'];
    $proqty = $_POST['proqty'];
    $prostockstatus = $_POST['prostockstatus'];
    $prodesc = $_POST['prodesc'];

    $query = "insert into product(proimage, proname, proprice, procategory, procolor, prosize, proqty, prostockstatus, prodesc) values('$folder','$proname',' $proprice',' $procategory',' $procolor',' $prosize','$proqty','$prostockstatus',' $prodesc')";
    echo $query;
    $run = mysqli_query($db, $query) or die ("can not insert data into database. ".mysqli_error($db));

    if($run)
    {
        header("location:admin-product.php");
    }
}      
?>





































