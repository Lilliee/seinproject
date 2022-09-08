<?php
include ('adminav.php');
include '../user/databaseconnect.php';
$cid= $_GET['CustomerID'];
echo $cid;

$sql= "delete from customers where CustomerID= '$cid'";
$db1->exec($sql);


header('Location: dashboard.php');

?>
