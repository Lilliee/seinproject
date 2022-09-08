<?php 

session_start();
include 'databaseconnect.php';
if(!isset($_SESSION['cart']))
{
    
    $count=0;
}
else
{
    $count=count ($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #52595D;
}

li {
  float: left;
}

li a{
  display: inline-block;
  color: white;
 font-size:20px;
  text-align: center;
  padding: 10px 20px;
  text-decoration: none;
  font-weight: bold;
}
li a:hover {
  background-color: #52595D;
  color: #C58917;
}
header 
{
  font-size: 22px;
  color: #FFA500;
  font-weight: bold;
  text-shadow: 2px 2px 8px black;
  line-height: 70px;
  text-align: center;
  background: #3D3C3A;
  user-select: none;
}
</style>
</head>
<body>
<header>Food Universe</header>
<ul>
  <li><a href="userhome.php"><i class="fa fa-home"></i>Home</a></li>
     
     <li><a href="foodmenus.php"><i class="fa fa-bars"></i>Food Menus</a></li>
  
     <li><a href="aboutus.php"><i class="fa fa-envelope"></i>About Us</a></li>
     <li><a href="contactus.php"><i class="fa fa-phone"></i>Contact Us</a></li>
     <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
 <li><a href="checkout.php">
     <i class="fa fa-shopping-cart" style="color:blue;font-size:20px;"></i>
     <sup><?php echo $count;?></sup>
     </a></li>
</ul>

</body>
</html>

 
