<?php
include ('adminav.php');
include '../user/databaseconnect.php';
$fid= $_GET['FeedbackID'];
echo $fid;

$sql= "delete from feedback where FeedbackID= '$fid'";
$db1->exec($sql);


header('Location: dashboard.php');

?>
