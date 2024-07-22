<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['Add_To_Cart']))
  {
    if(isset($_SESSION['cart']))
    {
      $myitems=array_column($_SESSION['cart'],'proname');
      if(in_array($_POST['proname'],$myitems))
      {
        echo"<script>
          alert('Item Already Added');
          window.location.href='index.php';
        </script>";
      }
      else
      {
        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('proname'=>$_POST['proname'],'proprice'=>$_POST['proprice'],'proqty'=>1);
        echo"<script>
          alert('Item Added');
          window.location.href='index.php';
        </script>";
      }
    }
    else
    {
      $_SESSION['cart'][0]=array('proname'=>$_POST['proname'],'proprice'=>$_POST['proprice'],'proqty'=>1);
      echo"<script>
        alert('Item Added');
        window.location.href='index.php';
      </script>";
    }
  }
  if(isset($_POST['Remove_Item']))
  {
    foreach($_SESSION['cart'] as $key => $value)
    {
      if($value['proname']==$_POST['proname'])
      {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        echo"<script>
          alert('Item Removed');
          window.location.href='mycart.php';
        </script>";
      }
    }
  }
  if(isset($_POST['Mod_proqty']))
  {
    foreach($_SESSION['cart'] as $key => $value)
    {
      if($value['proname']==$_POST['proname'])
      {
        $_SESSION['cart'][$key]['proqty']=$_POST['Mod_proqty'];
        echo"<script>
          window.location.href='mycart.php';
        </script>";
      }
    }
  }
}

?>