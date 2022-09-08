<?php
include ('managenav.php');
include '../user/databaseconnect.php';
$sid= $_GET['SoupID'];
echo $sid;

$sql= "delete from soup where SoupID= '$sid'";
$db1->exec($sql);

//echo "Product is deleted successfully";

header('Location: deletesoup.php');

?>
