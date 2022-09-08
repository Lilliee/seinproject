<?php
include 'databaseconnect.php';
include 'navi.php';

$cusname=$_SESSION['CustomerName'];
$date=date("m.d.y");
if(isset($_POST["btnsubmit"]))
{
    
    $township=$_POST["township"];
    $address=$_POST["address"];
    $comment=$_POST["comment"];
    
    $sql =" insert into delivery (CustomerName,Township,Address,Comments,Date) VALUES ('$cusname','$township','$address','$comment', '$date')";
    $db1->exec($sql);
    header('Location:afterdelivery.php');
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

body
{
background:url('deliback2.png');
background-repeat:no-repeat;
background-size:1400px;
background-color:#4C787E;
}
h1
{
 position: absolute;
  top: 75%;
  left: 15%;
  transform: translate(-50%, -50%);
  text-shadow: 2px 2px 4px white;
  color:black;
  font-weight:bold;
  font-size: 20px;
  background-repeat: no-repeat;
  text-align: center;
}
h2
{
 position: absolute;
  top: 110%;
  left: 15%;
  transform: translate(-50%, -50%);
  text-shadow: 2px 2px 4px white;
  color:black;
  font-weight:bold;
  font-size: 20px;
  background-repeat: no-repeat;
  text-align: center;
}
h3
{
 position: absolute;
  top: 40%;
  left: 15%;
  transform: translate(-50%, -50%);
  text-shadow: 2px 2px 4px white;
  color:black;
  font-weight:bold;
  font-size: 20px;
  background-repeat: no-repeat;
  text-align: center;
}

.login-box {
  position: absolute;
  top: 75%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: #008080;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 15px 0;
  font-size: 12px;
  color: black;
  font-weight:bold;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
  
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 15px;
  
}

.login-box form button {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  left:30%;
  color: black;
  font-weight:bold;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box button:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}
option
{
background-color: #5CB3FF;
font-weight: boldl
}



</style>
</head>
<body>
 
<h3>This is the final step for your <br>
      ordered foods<br><br>
<a href=""><img src="boy3.jpg" alt="HTML tutorial" style= "width: 100px; height: 100px; border-radius: 50%;"></a></h3>

      <h1>Your order will be immediately collected <br>
      and sent by our courier<br><br>
<a href=""><img src="boy.png" alt="HTML tutorial" style= "width: 100px; height: 100px; border-radius: 50%;"></a></h1>
<h2>Pick up delivery at your door  <br>
      and enjoy your food<br><br>
<a href=""><img src="boy1.png" alt="HTML tutorial" style= "width: 100px; height: 100px; border-radius: 50%;"></a></h2>

<div class="login-box">
  <form method="post">
    <div class="user-box">
      <label for="tsp">Township</label><br><br>
      <select id="tsp" name="township">
  <option value="Sann Chaung">Sann Chaung</option>
  <option value="Mayangone">Mayangone</option>
  <option value="North Dagon">North Dagon</option>
  <option value="South Dagon">South Dagon</option>
  <option value="South Oakkalar">South Oakkalar</option>
  <option value="North Oakkalar">North Oakkalar </option>
  <option value="Insein">Insein</option>
  <option value="Hlaing">Hlaing</option>
  <option value="Shwe Pyi Thar">Shwe Pyi Thar</option>
  <option value="Dagon Myo Thit Seikkan">Dagon Myo Thit Seikkan</option>
</select><br><br>
    </div>
    <div class="user-box">
      <br><input type="text" name="address" required value="<?php echo $cusname;?>">
      <label>Your Name</label><br>
    </div>
    <div class="user-box">
      <br><input type="text" name="address" required>
      <label>Detail Address</label><br>
    </div>
    <div class="user-box">
      <br><input type="text" name="comment" >
      <label>Comments</label><br>
    </div>
    <div class="user-box">
      <br><input type="text" name="date" value="<?php echo $date;?>" required>
      <label>Date</label><br>
    </div>
   <button name="btnsubmit"> 
      Submit</button>
  </form>
</div>
	
</body>

<footer style= "color:white;
 position: absolute;
  top: 140%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 10px;
  text-shadow: 2px 2px 4px black;
  font-weight: bold;
   background:#4C787E;
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



