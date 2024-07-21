<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_POST['cart']))
        {   
            $myitems=array_column($_SESSION['cart'],'proname');
            if(in_array($_POST['proname'],$myitems))
            {
                echo"<script>
                alert('Item Already Added');
                window.location.href='shop.php';
                </script>";
            }
            else
            {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('proname'=>$_POST['proname'],'proprice'=>$_POST['proprice'],'proqty'=>1);
                echo"<script>
                alert('Item Added');
                window.location.href='shop.php';
                </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('proname'=>$_POST['proname'],'proprice'=>$_POST['proprice'],'proqty'=>1);
            echo"<script>
                alert('Item Added');
                window.location.href='shop.php';
            </script>";
        }
    }
}


?>









