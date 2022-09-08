<?php
$servername= "localhost";
$username= "root";
$password="";
$db="b47appdev";

try
{
    $db1= new PDO("mysql:host=$servername; dbname=$db", $username,$password);
    //echo "connection success"."<br>";
    
    $db1-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
}

catch (PDOException $e)
{
    echo "Connection Unsucessful!".$e->getMessage();
}


?>