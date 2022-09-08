<?php
include ('managenav.php');
include '../user/databaseconnect.php';
$did= $_GET['DrinkID'];
echo $did;

$sql= "delete from drinks where DrinkID= '$did'";
$db1->exec($sql);

//echo "Product is deleted successfully";

header('Location: deletedrinks.php');

?>
