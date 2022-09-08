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
color: #e0dfdc;
text-align: center;
font-size: 50px;
letter-spacing: .1em;
text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 
0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 
0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0,0,0,0.9);
margin-top: 5%;
}

</style>
<h1>Drinks</h1>
<br><br><br><br><br><br><br><br>
<div class="container">
<div class="row" >

<?php 

$sql = "Select * from drinks";
foreach ($db1->query($sql) as $row)
{
    $id= $row['DrinkID'];
    $name= $row['Name'];
    $image = "../images/".$row['Image'];
    $price = $row['Price'];

?>


<div class= "col-md-4">
<div class="card" style="float: left; margin:10px;">
<img width ="180cm" height="150cm" style="border-radius:20%;border:10px outset silver;" class= "card-img-top" src ="<?php echo $image;?>" alt=""></div>
<div class= card-body" style="float: right; color:#FDD017;">
<h4 class= "card-title"><?php echo $name;?></h4>
<p class= "card-text" >Price: MMK-<?php echo $price;?></p>
<a href="foodorder2.php?id=<?php echo $id;?>&name=<?php echo $name;?>&image=<?php echo $image;?>
&price=<?php echo $price;?>&qty=<?php echo 1;?>" class="btn btn-primary" style="color: black; background-color:#FFE87C;
font-weight:bold;">Add to Cart</a>
</div>
</div>

<footer style= "color:white;
 position: absolute;
  top: 270%;
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

