<?php 

session_start();
include('includes/config.php');

if(mysqli_connect_error()){
  echo"<script>
    alert('cannot connect to database');
    window.location.href='cart.php';
  </script>";
  exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['purchase']))
  {
    $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
    if(mysqli_query($db,$query1))
    {
      $proid=mysqli_insert_id($db);
      $query2="INSERT INTO `user_orders`(`proid`, `proname`, `proprice`, `proqty`) VALUES (?,?,?,?)";
      $stmt=mysqli_prepare($db,$query2);
      if($stmt)
      {
        mysqli_stmt_bind_param($stmt,"isii",$proid,$proname,$proprice,$proqty);
        foreach($_SESSION['cart'] as $key => $values)
        {
          $proname=$values['proname'];
          $proprice=$values['proprice'];
          $proqty=$values['proqty'];
          mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['cart']);
        echo"<script>
          alert('Order Placed');
          window.location.href='index.php';
        </script>";
      }
      else
      {
        echo"<script>
          alert('SQL Query Prepare Error');
          window.location.href='cart.php';
        </script>";
      }
    }
    else
    {
      echo"<script>
        alert('SQL Error');
        window.location.href='cart.php';
      </script>";
    }
  }
}

?>