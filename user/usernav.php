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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
*{
  padding: 0;
  margin: 0;
  list-style: none;
  text-decoration: none;
}
body {
  font-family: 'Roboto', sans-serif;
}
.sidebar {
  position: fixed;
  top: 30px;
  left: -250px;
  width: 250px;
  height: 100%;
  color: #F6BE00;
  text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
  background: #52595D;
  transition: all .5s ease;
}
.sidebar header {
  font-size: 22px;
  color: #FFA500;
  font-weight: bold;
  text-shadow: 2px 2px 8px black;
  line-height: 70px;
  text-align: center;
  background: #3D3C3A;
  user-select: none;
}
.sidebar ul a{
  display: block;
  height: 100%;
  width: 100%;
  line-height: 65px;
  font-size: 20px;
  color: white;
  padding-left: 40px;
  box-sizing: border-box;
  border-bottom: 1px solid black;
  border-top: 1px solid rgba(255,255,255,.1);
  transition: .4s;
}
ul li:hover a{
  padding-left: 50px;
}
.sidebar ul a i{
  margin-right: 16px;
}
#check{
  display: none;
}
label #btn,label #cancel{
  position: absolute;
  background: #042331;
  border-radius: 3px;
  cursor: pointer;
}
label #btn{
  left: 40px;
  top: 25px;
  font-size: 35px;
  color: white;
  padding: 6px 12px;
  transition: all .5s;
}
label #div{
  z-index: 1111;
  left: -195px;
  top: 17px;
  font-size: 30px;
  color: #0a5275;
  padding: 4px 9px;
  transition: all .5s ease;
}
#check:checked ~ .sidebar{
  left: 0;
}
#check:checked ~ label #btn{
  left: 250px;
  opacity: 0;
  pointer-events: none;
}
#check:checked ~ label #cancel{
  left: 195px;
}
#check:checked ~ section{
  margin-left: 250px;
}
section
{
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: all .5s;
}
div 
{
  width: 35px;
  height: 5px;
  background-color: #C0C0C0;
  margin: 6px 0;
}

</style>
</head>
<body>


<input type="checkbox" id="check">
    <label for="check">
<div></div>
<div></div>
<div></div>
      <i class="menus" id="div"></i>
    </label>
    <div class="sidebar">
    <header>Food Universe</header>
    <ul>
     <li><a href="userhome.php"><i class="fa fa-home"></i>Home</a></li>
     
     <li><a href="foodmenus.php"><i class="fa fa-bars"></i>Food Menus</a></li>
  
     <li><a href="aboutus.php"><i class="fa fa-envelope"></i>About Us</a></li>
     <li><a href="contactus.php"><i class="fa fa-phone"></i>Contact Us</a></li>
     <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
     <li><a href="checkout.php">
     <i class="fa fa-shopping-cart" style="color:#CD7F32;font-size:20px;"></i>
     <sup><?php echo $count;?></sup>
     </a></li>
    </ul>
   </div>
   

</body>
</html>
