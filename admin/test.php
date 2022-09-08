<?php
include 'managenav.php';
include '../user/databaseconnect.php';

$conn = new mysqli($servername,
    $username, $password, $db);



?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body
{
background-color:#E5E4E2;
}
.admin
{
background-color:white;
width:450px;
height:350px;
top:55%;
left:20%;
position: absolute;
transform: translate(-50%, -50%);
box-shadow: 5px 10px grey;
border-radius:20%;
}
p
{
 font-size: 30px;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
  top:5%;
 text-align:center;
left:45%;
float:left;
position: absolute;
transform: translate(-50%, -50%); 
}
h2
{
 font-size: 30px;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
  top:5%;
 text-align:center;
left:50%;
float:left;
position: absolute;
transform: translate(-50%, -50%); 
}
.avatar
{
 top:35%;
left:20%;
width:100px;
border-radius:50%;
height:100px;
float:left;
position: absolute;
transform: translate(-50%, -50%);
}
.chef
{
 top:25%;
left:20%;
width:50px;
border-radius:50%;
height:50px;
position: absolute;
transform: translate(-50%, -50%);
}
.assi
{
 top:40%;
left:20%;
width:50px;
border-radius:50%;
height:50px;
position: absolute;
transform: translate(-50%, -50%);
}
.account
{
  top:55%;
left:20%;
width:50px;
border-radius:50%;
height:50px;
position: absolute;
transform: translate(-50%, -50%);
}
.deli1
{
top:70%;
left:20%;
width:50px;
border-radius:50%;
height:50px;
position: absolute;
transform: translate(-50%, -50%);
}
.deli2
{
 top:85%;
left:20%;
width:50px;
border-radius:50%;
height:50px;
position: absolute;
transform: translate(-50%, -50%);
}
label
{
 top:58%;
left:50%;
border-radius:50%;
position: absolute;
font-family: "Lucida Console", "Courier New", monospace;
transform: translate(-50%, -50%);
font-size: 13px;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
 text-align:center;
}
text
{
top:50%;
left:60%;
font-family: "Lucida Console", "Courier New", monospace;
  text-shadow: 2px 2px 4px #95B9C7;
  font-size:13px;
  font-weight:bold;
float:left;
position: absolute;
transform: translate(-50%, -50%);
}
.staff
{
background-color:white;
width:450px;
height:350px;
top:55%;
left:75%;
position: absolute;
transform: translate(-50%, -50%);
box-shadow: 5px 10px grey;
border-radius:20%;
}
.customers
{
background-color:white;
width:600px;
height:650px;
top:150%;
left:23%;
position: absolute;
transform: translate(-50%, -50%);
box-shadow: 5px 10px grey;
border-radius:20%;
}
h3
{
font-size: 30px;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
  top:5%;
 text-align:center;
 left:50%;
position: absolute;
transform: translate(-50%, -50%); 
}
.table
{

top:40%;
left:50%;
position: absolute;
transform: translate(-50%, -50%);
 font-size: 13px;
 text-align:Center;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
}
.feedback
{
background-color:white;
width:600px;
height:650px;
top:150%;
left:75%;
position: absolute;
transform: translate(-50%, -50%);
box-shadow: 5px 10px grey;
border-radius:20%;
}
h4
{
font-size: 30px;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
  top:5%;
 text-align:center;
 left:48%;
position: absolute;
transform: translate(-50%, -50%); 
}
.table2
{

top:40%;
left:50%;
position: absolute;
transform: translate(-50%, -50%);
 font-size: 13px;
 text-align:Center;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
}
.order
{
background-color:white;
width:600px;
height:750px;
top:270%;
left:23%;
position: absolute;
transform: translate(-50%, -50%);
box-shadow: 5px 10px grey;
border-radius:20%;
}
h5
{
font-size: 30px;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
  top:5%;
 text-align:center;
 left:48%;
position: absolute;
transform: translate(-50%, -50%); 
}
.table3
{
top:55%;
left:50%;
position: absolute;
transform: translate(-50%, -50%);
 font-size: 13px;
 text-align:Center;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
}
.something
{
background-color:white;
width:600px;
height:750px;
top:270%;
left:75%;
position: absolute;
transform: translate(-50%, -50%);
box-shadow: 5px 10px grey;
border-radius:20%;
}
.customerimage
{
background-color:white;
width:70px;
height:70px;
top:20%;
left:50%;
position: absolute;
transform: translate(-50%, -50%);
border-radius:50%;
}
h6
{
font-size: 20px;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
  top:5%;
 text-align:center;
 left:50%;
position: absolute;
transform: translate(-50%, -50%);  
}
.text
{
font-size: 20px;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
  top:40%;
 text-align:center;
 left:50%;
position: absolute;
transform: translate(-50%, -50%);  
}
.orderimage
{
background-color:white;
width:70px;
height:70px;
top:50%;
left:50%;
position: absolute;
transform: translate(-50%, -50%);
border-radius:50%;
}
.text2
{
font-size: 20px;
  text-shadow: 2px 2px 4px #95B9C7;
  font-weight: bold;
  color:black;
  top:70%;
 text-align:center;
 left:50%;
position: absolute;
transform: translate(-50%, -50%);  
}
.paymentimage
{
background-color:white;
width:70px;
height:70px;
top:80%;
left:50%;
position: absolute;
transform: translate(-50%, -50%);
border-radius:50%;
}


</style>
</head>
<body>
<!--  <h1 style="font-family: Lucida Console, Courier New, monospace; 
text-align:center;font-size:60px; color: #52595D;
text-shadow: 3px 5px 2px #474747;">Admin Dashboard</h1>-->
<div class="admin">
<p>Admin Profile</p>
<img src="girl.png" alt="Avatar" class="avatar">
<text>Email: Admin@gmail.com<br><br>
Full Name: Seim Lei Htar Ni<br><Br>
Father Name: U Win Min Than<br><br>
Age:20<br><br>
Position: Admin<br><br>
NRC: 12/DGM(N)037681<br><br>
Phone: 09-796-413-885<br></text>
</div>

<div class="staff">
<h2>Staff Lists</h2>
<img src="chef.png" alt="Avatar" class="chef">
<img src="assi.png" alt="Avatar" class="assi">
<img src="account.jpg" alt="Avatar" class="account">
<img src="deli.jpg" alt="Avatar" class="deli1">
<img src="deli.jpg" alt="Avatar" class="deli2">

<label>
Chef: U Ko Ko / koko@gmail.com<br><br><br>
Assistant: Daw Hnin Si Phyu /hninsi@gmail.com<br><Br><br>

Accountant: Ma Moe Pyae Pyae / moepyaepyae@gmail.com<br><Br><Br>

Delivery: Mg La Won / lawon@gmail.com<br><br><br>
Deiivery: Mg Min Min / minmin@gmail.com

</label>
</div>

<div class="customers">
<h3>Registered Users</h3>
<div class="table">
<table border=2 align=center style="box-shadow: 5px 10px 18px">
  <tr style="background-color: #033E3E; color:#F0FFFF;">
  <th>No.</th>
     <th>Customer Name</th>
      <th>Customer Email</th>
       <th> Phone</th>
       <th>Address</th>
       <th>Action</th>
       </tr>

<?php 
$cid=$cname=$cemail=$cpsw=$cphone=$cadd="";
$sql = " select * from customers ";
foreach ($db1->query($sql) as $row)
{
    //echo $row['ProductID'].$row['ProductName'].$row['Price'].$row['Image'];
    $cid = $row['CustomerID'];
    $cname = $row['CustomerName'];
    $cemail= $row['Email'];
    $cphone = $row['Phone'];
    $cadd = $row['CAddress'];
    

echo "<tr bgcolor='transparent' height='50px'>";
echo "<td>$cid</td>";
echo "<td>$cname</td>";
echo "<td>$cemail</td>";
echo "<td>$cphone</td>";
echo "<td>$cadd</td>";
echo "<td  bgcolor= '#7BCCB5'><button><a href='deletecus.php?CustomerID=$cid'>Delete</a></td></button>";


echo "</tr>";

}
echo	"</table>";
?>
</div>
</div>

<div class="feedback">
<h4>Customers Feedback</h4>
<div class="table2"><table border=2 align=center style="box-shadow: 5px 10px 18px">
  <tr style="background-color: #033E3E; color:#F0FFFF;">
     <th>No.</th>
     <th>Sender Name</th>
      <th>Email</th>
       <th>Given Feedback</th>
       <th>Actions </th>
       <th></th>
       </tr>

<?php 
$fid=$cusname=$email=$fb="";
$sql = " select * from feedback ";
foreach ($db1->query($sql) as $row)
{
    
    $fid = $row['FeedbackID'];
    $cusname = $row['SenderName'];
    $email=$row['Email'];
    $fb=$row['Feedback'];
    

echo "<tr bgcolor='transparent' height='50px'>";
echo "<td>$fid</td>";
echo "<td>$cusname</td>";
echo "<td>$email</td>";
echo "<td>$fb</td>";
echo "<td  bgcolor= '#7BCCB5'><button><a href='https://accounts.google.com/servicelogin'>Send</a></button></td>";
echo "<td  bgcolor= '#7BCCB5'><button><a href='deletefb.php?FeedbackID=$fid'>Delete</a></button></td>";


echo "</tr>";
}
echo	"</table>";
?>
</div></div>
<div class="order"> <h5>Recent Orders </h5>
<div class="table3">
<table border=2 align=center style="box-shadow: 5px 10px 18px">
  <tr style="background-color: #033E3E; color:#F0FFFF;">
     <th>ID</th>
     <th> Name</th>
      <th>Food Name</th>
       <th>Quantity</th>
       <th>Total Price</th>
       <th>Order Date</th>
       <th>Actions</th>
       </tr>

<?php 
$oid=$cusname=$fname=$qty=$totalprice=$date="";
$sql = " select * from foodorder ";
foreach ($db1->query($sql) as $row)
{
    $oid = $row['OrderID'];
    $cusname = $row['CustomerName'];
    $fname=$row['FoodName'];
    $qty=$row['Quantity'];
    $totalprice = $row['TotalPrice'];
    $date=$row['OrderDate'];
    

echo "<tr bgcolor='transparent' height='50px'>";
echo "<td>$oid</td>";
echo "<td>$cusname</td>";
echo "<td>$fname</td>";
echo "<td>$qty</td>";
echo "<td>$totalprice</td>";
echo "<td>$date</td>";
echo "<td bgcolor= '#7BCCB5'><button bgcolor='red'><a href='viewpayment.php?OrderID=$oid'>Check Payments</a></button></td>";


echo "</tr>";

}
echo	"</table>"; 
?>
</div></div>

<div class="something">
<h6><?php $sql = "SELECT count(*) FROM customers ";
$result = $conn->query($sql);


while($row = mysqli_fetch_array($result)) 
{
    echo "Registered Customers = ". $row['count(*)'];

}?></h6>
<div class="customerimage"><img src="customers.png" style="width: 100px; height:100px; border-radius:20%;"> 
</div>

<div class="text"><?php $sql = "SELECT count(*) FROM foodorder ";
$result = $conn->query($sql);


while($row = mysqli_fetch_array($result)) 
{
    echo "Recent Orders = ". $row['count(*)'];

}?>
</div>
<div class="orderimage"><img src="order.png" style="width: 100px; height:100px; border-radius:20%;"> 
</div>



<div class="text2"><?php $sql = "SELECT count(*) FROM payment ";
$result = $conn->query($sql);


while($row = mysqli_fetch_array($result)) 
{
    echo "Total Payments = ". $row['count(*)'];

}?></div>
<div class="paymentimage"><img src="pay.jpg" style="width: 100px; height:100px; border-radius:20%;"> 
</div>

</body>
</html>
