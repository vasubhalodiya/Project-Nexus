<?php 

session_start();
$con=mysqli_connect("localhost","root","","testing");

if(mysqli_connect_error()){
  echo"<script>
    alert('cannot connect to database');
    window.location.href='mycart.php';
  </script>";
  exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['purchase']))
  {
    $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
    if(mysqli_query($con,$query1))
    {
      $proid=mysqli_insert_id($con);
      $query2="INSERT INTO `user_orders`(`proid`, `proname`, `proprice`, `prosize`, `proqty`) VALUES (?,?,?,?)";
      $stmt=mysqli_prepare($con,$query2);
      if($stmt)
      {
        mysqli_stmt_bind_param($stmt,"isii",$proid,$proname,$proprice,$proqty);
        foreach($_SESSION['cart'] as $key => $values)
        {
          $proname=$values['proname'];
          $proprice=$values['proprice'];
          $prosize=$values['prosize'];
          $proqty=$values['proqty'];
          mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['cart']);
        echo"<script>
          alert('Order Placed');
          window.location.href='shop.php';
        </script>";
      }
      else
      {
        echo"<script>
          alert('SQL Query Prepare Error');
          window.location.href='mycart.php';
        </script>";
      }
    }
    else
    {
      echo"<script>
        alert('SQL Error');
        window.location.href='mycart.php';
      </script>";
    }
  }
}

?>