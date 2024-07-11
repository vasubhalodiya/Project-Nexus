<?php
include('../../includes/config.php');
if(isset($_POST["insert"]))
{
    // $proid = $_POST['proid'];
    $catname = $_POST['catname'];

    $query = "insert into category(catname) values('$catname')";
    echo $query;
    $run = mysqli_query($db, $query) or die ("can not insert data into database. ".mysqli_error($db));

    if($run)
    {
        header("location:admin-category.php");
    }
}      
?>





































