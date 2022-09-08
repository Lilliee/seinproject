<?php
include ('managenav.php');
include '../user/databaseconnect.php';
$fid= $_GET['FoodID'];
echo $fid;

$sql= "delete from food where FoodID= '$fid'";
$db1->exec($sql);

echo "Product is deleted successfully";

header('Location: deletefastfoods.php');

?>
