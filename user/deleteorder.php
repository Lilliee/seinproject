<?php

session_start();
$num=$_GET['num'];
unset($_SESSION['cart'][$num]);
header("location:checkout.php");

?>