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
color: #005900;
text-shadow: #FFFCA8 2px 2px 0px, #9C9C9C 4px 4px 0px;
text-align: center;
font-size: 50px;
font-weight: bold;
letter-spacing: .1em;
text-shadow: #FFFCA8 2px 2px 0px, #9C9C9C 4px 4px 0px;
margin-top: 5%;
}

</style>
<h1>Vegetarian Foods</h1>
<br><br><br><br><br><br><br><br>
<div class="container">
<div class="row" >

<?php 

$sql = "Select * from vegan";
foreach ($db1->query($sql) as $row)
{
    $id= $row['VeganID'];
    $name= $row['Name'];
    $image = "../images/".$row['Image'];
    $price = $row['Price'];

?>


<div class= "col-md-4">
<div class="card" style="float: left; margin:10px;">
<img width ="180cm" height="150cm" class= "card-img-top" style="border-radius:20%;;border:10px outset silver;"" src ="<?php echo $image;?>" alt=""></div>
<div class= card-body" style="float: right; color:#FDD017;">
<h4 class= "card-title"><?php echo $name;?></h4>
<p class= "card-text" >Price: MMK-<?php echo $price;?></p>
<a href="foodorder5.php?id=<?php echo $id;?>&name=<?php echo $name;?>&image=<?php echo $image;?>
&price=<?php echo $price;?>&qty=<?php echo 1;?>" class="btn btn-primary" style="color: black; background-color:#FFE87C;
font-weight:bold;">Add to Cart</a>
</div>
</div>

<footer style= "color:white;
 position: absolute;
  top: 200%;
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

