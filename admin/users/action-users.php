<?php
include('../../includes/config.php');
if(isset($_POST["insert"]))
{
    // $proid = $_POST['proid'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $user_type = $_POST['user_type'];
    
    $query = "insert into users(uname, email, password, user_type) values('$uname','$email','$password','$user_type')";
    echo $query;
    $run = mysqli_query($db, $query) or die ("can not insert data into database. ".mysqli_error($db));

    if($run)
    {
        header("location:admin-users.php");
    }
}      
?>

