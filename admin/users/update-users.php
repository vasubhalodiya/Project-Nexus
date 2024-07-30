<?php
include('../../includes/config.php');
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $user_type = $_POST['user_type'];
    
    $qry1 = "update users set uname='$uname', email='$email', password='$password', user_type='$user_type' where id=$id";

    $rs1 = mysqli_query($db, $qry1);
    // echo $qry1; //or
    // echo "Field Update Successfully";
    header("location:admin-users.php");
    
}

?>