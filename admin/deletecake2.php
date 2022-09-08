<?php
include ('managenav.php');
include '../user/databaseconnect.php';
$cid= $_GET['CakeID'];
echo $cid;

$sql= "delete from cake where CakeID= '$cid'";
$db1->exec($sql);

//echo "Product is deleted successfully";

header('Location: deletecake.php');

?>
