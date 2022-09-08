<?php
include 'databaseconnect.php';
include 'navi.php';
$cusid=$_SESSION['CustomerID'];
$cusname=$_SESSION['CustomerName'];
$date=date("m.d.y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>  
 body{
    margin-top:10px;
     background:url('reorder.jpg');
    background-size:2000px;
      
   
}
  </style>
</head>
<body>


<br><Br><div class="container bootdey" style="width: 1200px; height: 150px;">
                        <div class="invoice-details mt25">
                            <div class="well">
                                <ul class="list-unstyled mb0"  style="background-color: #F5F5F5; font-weight: bold;">
                                    
                                    <li><strong>Date:</strong><?php echo $date;?> </li><br><br>
                                    <li><strong>ID: </strong><?php echo $cusid;?></li><Br>
                                <li><strong>Name:</strong><?php echo $cusname;?></li><br>
                                    <li><strong>Status:</strong> <span class="label label-danger">UNPAID</span></li>
                                </ul>
                            </div>
                        </div>
                   
                </div>
                
<div class="container" style="background-color: #C36241;  border: 1px solid #E9E4D4; border-radius:10%;">
<div class="row">
<div class="col-md-12">
<table class="table" style="font-style: italic; font-weight: bold;">
<tr>
<td></td>
<td>Food ID</td>
<td>Name</td>
<td>Price</td>
<td>Quantity</td>
<td>Total Price</td>
<td></td>

</tr>
<?php 
$totalcost=0;
$id=0;
$name="";
$price=0;
$qty=0;

foreach ($_SESSION['cart'] as $i => $row) 
{

$id=$_SESSION['cart'][$i]['id'];
$name=$_SESSION['cart'][$i]['name'];
$price=$_SESSION['cart'][$i]['price'];
$qty=$_SESSION['cart'][$i]['qty'];

if(isset($_POST['update'.$i]))
{
    $_SESSION['cart'][$i]['qty']=$_POST['qty'.$i];
}
$totalprice=$price*$qty;
$totalcost+=$totalprice;
$_SESSION['TotalPrice']=$totalcost;
if(isset($_POST['order']))
{
    $sql = "insert into foodorder(CustomerName,FoodName,Quantity,Price,TotalPrice,OrderDate) 
    values ('$cusname','$name','$qty','$totalprice','$totalcost','$date')";
    $db1->exec($sql);
    header('Location: paymentform.php');
}



?>
<tr>
<td></td>
<td> <?php echo $id;?></td>
<td><?php echo $name; ?></td>
<td>MMK-<?php echo $price; ?></td>
<td>
<form action="" method="post">
<input type="number" min="1" name="qty<?php echo $i;?>" value="<?php echo $qty;?>">
<input type="submit" name="update<?php echo $i;?>" value="Update">
</form>
</td>
<td>MMK-<?php echo $totalprice;?></td>
<td><a href="deleteorder.php?num=<?php echo $i;?>">Delete</a></td>

</tr>

<?php
}

?>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td style="text-align: right;">Total Cost:MMK-</td>
	<td><?php echo $totalcost; ?> </td>
	<td><form action="" method="post"><input type="submit" name= "order" 
	style="background-color: #FDEEF4;" value="Pay Now"></form></td> 
	
	
</tr>

                                                            
</body>
<footer style= "color:white;
 position: absolute;
  top: 450%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 10px;
  text-shadow: 2px 2px 4px black;
  font-weight: bold;
   background:black;
  width:1500px;
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
