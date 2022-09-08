<?php
include ('managenav.php');
include '../user/databaseconnect.php';
$vid= $_GET['VeganID'];
echo $vid;

$sql= "delete from vegan where VeganID= '$vid'";
$db1->exec($sql);

//echo "Product is deleted successfully";

header('Location: deletevegan.php');

?>
