<?php
session_start();

$id =$_GET['id'];
$name =$_GET['name'];
$image =$_GET['image'];
$price=$_GET['price'];
$qty=$_GET['qty'];

$order=array();

$order['id']=$id;
$order['name']=$name;
$order['image']=$image;
$order['price']=$price;
$order['qty']=$qty;


if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'][0]= $order;
}

else
{
    $itemcount= count($_SESSION['cart']);
    $_SESSION['cart'][$itemcount]=$order;
}

header("Location:showfastfood.php");
?>