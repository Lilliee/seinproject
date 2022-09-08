<?php
include ('managenav.php');
include '../user/databaseconnect.php';
$nid= $_GET['NoodleID'];
echo $nid;

$sql= "delete from noodles where NoodleID= '$nid'";
$db1->exec($sql);

//echo "Product is deleted successfully";

header('Location: deletenoodle.php');

?>
