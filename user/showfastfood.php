<?php
include 'databaseconnect.php';
include 'navi.php';
?>
<style>
body
{
background: url('nb.jpg');
background-repeat: no-repeat;
background-size: 1400px;
color: black;
font-weight: bold;
}
h1
{
color: #202c2d;
text-align:center;
text-shadow: 0 1px #808d93, -1px 0 #cdd2d5, -1px 2px #808d93, -2px 1px #cdd2d5, -2px 3px #808d93, 
-3px 2px #cdd2d5, -3px 4px #808d93, -4px 3px #cdd2d5, -4px 5px #808d93, 
-5px 4px #cdd2d5, -5px 6px #808d93, -6px 5px #cdd2d5, -6px 7px #808d93, -7px 6px #cdd2d5, -7px 8px #808d93, -8px 7px #cdd2d5;
font-size: 50px;
margin-top: 5%;
}
</style>
<h1>Fast Foods</h1>
<br><br><br><br><br><br><br><br><br>
<div class="container">
<div class="row" >

<?php 

$sql = "Select * from food";
foreach ($db1->query($sql) as $row)
{
    $id= $row['FoodID'];
    $name= $row['FoodName'];
    $image = "../images/".$row['Image'];
    $price = $row['Price'];

?>


<div class= "col-md-4">
<div class="card" style="float: left;margin:10px;">
<img width ="180cm" height="150cm" class= "card-img-top" style="border-radius:20%;border:10px outset silver;" src ="<?php echo $image;?>" alt=""></div>
<div class= card-body" style="float: right; color:#FDD017;">
<h4 class= "card-title"><?php echo $name;?></h4>
<p class= "card-text" >Price: MMK-<?php echo $price;?></p>
<a href="foodorder.php?id=<?php echo $id;?>&name=<?php echo $name;?>&image=<?php echo $image;?>
&price=<?php echo $price;?>&qty=<?php echo 1;?>" class="btn btn-primary" style="color: black; background-color:#FFE87C;
font-weight:bold;">Add to Cart</a>
</div>
</div>

<footer style= "color:white;
 position: absolute;
  top: 250%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 10px;
  text-shadow: 2px 2px 4px black;
  font-weight: bold;
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
<?php
}
?>
</div>
</div>

