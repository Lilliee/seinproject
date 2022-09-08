<?php
include 'navi.php';
include 'databaseconnect.php';

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.mapouter
{
position:relative;
text-align:right;
height:1000px;
width:1400px;
}
</style>

<a href="https://www.embedgooglemap.net"></a>
<style>
.gmap_canvas 
{
overflow:hidden;
background:none!important;
height:1000px;
width:1400px;
}

.receipt
{
position: absolute;
  top: 140%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-shadow: 2px 2px 4px white;
  box-shadow: 5px 10px grey;
  border-radius:20%;
  color:black;
  width:500px;
  height:500px;
  font-weight:bold;
  font-size: 20px;
  background:#348781;
  text-align: center;
}
h1
{
position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-shadow: 2px 2px 4px white;;
  font-weight:bold;
  font-size: 20px;
  background:#348781;
  text-align: center;
  color: black;
text-shadow: 1px 0px 1px #CCCCCC, 0px 1px 1px #EEEEEE,
 2px 1px 1px #CCCCCC, 1px 2px 1px #EEEEEE, 3px 2px 1px #CCCCCC,
  2px 3px 1px #EEEEEE, 4px 3px 1px #CCCCCC, 3px 4px 1px #EEEEEE, 
  5px 4px 1px #CCCCCC, 4px 5px 1px #EEEEEE, 6px 5px 1px #CCCCCC, 
  5px 6px 1px #EEEEEE, 7px 6px 1px #CCCCCC;
}
h2
{
position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-shadow: 2px 2px 4px white;
  color:black;
  font-weight:bold;
  font-size: 17px;
  background:#348781;
  text-align: center;
}
p
{
position: absolute;
  top: 110%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-shadow: 2px 2px 4px white;
  color:black;
  font-weight:bold;
  font-size: 15px;
}
label
{
position: absolute;
  top: 135%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-shadow: 2px 2px 4px white;
  color:black;
  font-weight:bold;
  font-size: 10px;
}
</style>

</head>
<body>
<div class="mapouter">
<div class="gmap_canvas">
<iframe width="1400" height="1000" id="gmap_canvas" 
src="https://maps.google.com/maps?q=Yangon&t=&z=13&ie=UTF8&iwloc=&output=embed" 
frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
</iframe><a href="https://123movies-org.net"></a><br></div></div>

<div class="receipt">
<h1>Your Order is Confirmed !</h1>
<h2>
<br><br><table style="color:white; text-shadow:2px 2px 4px white; background-color:#348781;">

<?php 
$address=$comment="";
$date=date("m.d.y");
$cusname=$_SESSION['CustomerName'];
$sql = " select * from delivery where CustomerName='$cusname' and Date='$date' ";

foreach ($db1->query($sql) as $row)
{
    
    $township =$row['Township'];
    $address = $row['Address'];
    $comment = $row['Comments'];
    
    echo"<tr width='100px' height='80px'>";
    echo"<th>Township= </th>";
    echo "<td>$township</td>";
    echo"</tr>";
    
    echo"<tr width='100px' height='80px'>";
    echo"<th>Address= </th>";
    echo "<td>$address</td>";
    echo"</tr>";
    
    echo"<tr width='100px' height='80px'>";
    echo"<th>Comment= </th>";
    echo "<td>$comment</td>";
    echo"</tr>";
  
    
}
echo	"</table>";


echo"<p>";

if ($township=='Sann Chaung') 
{
    echo "Delivery fees = 2500 Kyats";
}
else if ($township=='Mayangone')
{
    echo "Delivery fees = 2500 Kyats";
}
else if ($township=="North Dagon")
{
    echo "Delivery fees = 3000 Kyats";
}
else if ($township=="South Dagon")
{
    echo "Delivery fees = 3500 Kyats";
}
else if ($township=="South Oakkalar")
{
    echo "Delivery fees = 2500 Kyats";
}
else if ($township=="North Oakkalar")
{
    echo "Delivery fees = 2500 Kyats";
}
else if ($township=="Insein")
{
    echo "Delivery fees = 2500 Kyats";
}
else if ($township=="Hlaing")
{
    echo "Delivery fees = 3000 Kyats";
}
else if ($township=="Shwe Pyi Thar")
{
    echo "Delivery fees = 3500 Kyats";
}
else if ($township=='Dagon Myo Thit Seikkan')
{
    echo "Delivery fees = 3500 Kyats";
}

else 
{
    
}

echo "</p>";
?>


<label>
<a href=""><img src="deliveryboy.jpg" alt="HTML tutorial" style= "width: 100px; height: 100px; border-radius: 30%;"></a></label>
</h2>

</div>
</body>

<footer style= "color:white;
 position: absolute;
  top: 190%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 10px;
  text-shadow: 2px 2px 4px black;
  font-weight: bold;
   background:black;
  width:1700px;
  text-align:center;">
Monday to Thursday: 8 am to 9pm<br>
Saturday and Sunday: 24 hours<br>
Friday: Closed <br>

Follow Us:
<a href="#" class="fa fa-facebook" style="background: #3B5998;
  color: white;"></a>
<a href="#" class="fa fa-twitter" style=" background: #55ACEE;
  color: white;" ></a> <br><br>

Watch Our Receipes: 
<a href="#" class="fa fa-youtube" style="background:  #bb0000;
  color: white;"></a>
   <marquee>San Chaung,    Mayangone ,  North Dagon, South Dagon, Shwe Pyi Thar <br><Br>
  South Oakkalar, North Oakkalar, Insein, Hlaing, Dagon Myo Thit Seikkan<Br></marquee></footer>
</html>
