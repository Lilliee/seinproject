<?php
include 'databaseconnect.php';
include 'usernav.php';

$cusname=$mail=$text="";
$cusname=$_SESSION['CustomerName'];

if(isset($_POST['btnsend']))
{
    $mail=$_POST['smail'];
    $text = $_POST['ftext'];
    $sql = "insert into feedback(SenderName,Email,Feedback)values('$cusname','$mail','$text')";
    $db1->exec($sql);
    
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
background-image: url('contact.jpg');
  background-size: 1700px;
  background-repeat: no-repeat;
  background-color: black;
}
h1
{
color: white;
font-size: 20px;
top: 15%;
left: 33%;
text-align: left;
position: absolute;
 transform: translate(-50%, -50%);
}
form
{
top: 50%;
left: 33%;
color: black;
 position: absolute;
 transform: translate(-50%, -50%);
}
input
{
background: #C0C0C0;
left: 30%;
font-size: 15px;
background-size: 50px;
 box-shadow: 5px 10px ;
}
textarea
{
background: #C0C0C0;
width:300px;
height:100px;
 box-shadow: 5px 10px;
}
.insertbtn
{
background: transparent;
color: white;
width: 30%;
left: 35%;
 position: absolute;
 transform: translate(-50%, -50%);
}
button:hover
{
background-color: #797979;
}
p
{
position: absolute;
 top: 120%;
 left: 80%;
 color: white;
 font-size: 20px;
  transform: translate(-50%, -50%);
 }
 .fa {
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: black;
  color: white;
}

.fa-twitter {
  background: black;
  color: white;
}

.fa-google {
  background: black;
  color: white;
}
.fa-youtube
{
background: black;
  color: white;
}
</style>
</head>
<body>
<h1>Use this form to give us your opinions</h1><br>

      <form method= "post" action="#" enctype= "multipart/form-data">
          <input class="fname" type="text" name="sname" value="<?php echo $cusname;?>" required><br><br><br>
          <input type="text" name="smail" placeholder="Email" required> <BR><br><br>
           <textarea name="ftext" placeholder=" What can we do for you?" required></textarea> <BR><br><Br>
       <button type="submit" class="insertbtn" name="btnsend">Send It</button>

      </form>

</body>
<p>15 West 3rd St / Media, SLHN: 1485 <br><br>

796-413-885 / fooduniverse@gmail.com <br><br><br>
Get Directions: <br>
<a href="www.facebook.com" class="fa fa-facebook"></a> &nbsp; &nbsp;
<a href="www.twitter.com" class="fa fa-twitter"></a>&nbsp; &nbsp;
<a href="www.gmail.com" class="fa fa-google"></a><br><Br>

<footer style= "color:white;
 position: absolute;
  top: 180%;
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

Watch Our Receipes: 
<a href="#" class="fa fa-youtube" style="background:  #bb0000;
  color: white;"></a>
   <marquee>San Chaung,    Mayangone ,  North Dagon, South Dagon, Shwe Pyi Thar <br><Br>
  South Oakkalar, North Oakkalar, Insein, Hlaing, Dagon Myo Thit Seikkan<Br></marquee></footer>

</p>




</html>

