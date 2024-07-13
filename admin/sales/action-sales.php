<?php
include('../../includes/config.php');
if(isset($_POST["insert"]))
{
    // $proid = $_POST['proid'];
    $salesname = $_POST['salesname'];
    $salesqty = $_POST['salesqty'];
    $salestotal = $_POST['salestotal'];
    $salesdate = $_POST['salesdate'];

    $query = "insert into sales(salesname, salesqty, salestotal, salesdate) values('$salesname','$salesqty',' $salestotal',' $salesdate')";
    echo $query;
    $run = mysqli_query($db, $query) or die ("can not insert data into database. ".mysqli_error($db));

    if($run)
    {
        header("location:admin-sales.php");
    }
}      
?>





































