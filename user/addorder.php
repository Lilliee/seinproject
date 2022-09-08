<?php
include 'databaseconnect.php';

$cusid=$_SESSION['CustomerID'];
if(isset($_POST['btnpay']))
{
    $paymail = $_POST['email'];
    $card = $_POST['cardno'];
    $pphone= $_POST['phone'];
    $padd = $_POST['ad'];
    
    
    $sql = "insert into payment (CustomerID,Email,Cardno,Phone,Address)values('$cusid','$paymail','$card','$pphone','$padd')";
    $db1->exec($sql);
    echo "You will receive purchased email soon!";
}

?>
