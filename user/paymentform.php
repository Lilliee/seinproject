<?php 
include 'navi.php';
include 'databaseconnect.php';

$cusid=$_SESSION['CustomerID'];
$cusname=$_SESSION['CustomerName'];
$totalcost=$_SESSION['TotalPrice'];
$date=date("m.d.y");

if(isset($_POST['btncheck']))
{
    $cushold = $_POST['cushold'];
    $cardtype = $_POST['cardtype'];
    $cardno= $_POST['cardnumber'];
    $cexp = $_POST['expdate'];
    $cvv = $_POST['cvv'];
    
    
    
    $sql = "insert into paymenttable (CustomerID,CustomerName,CardHolderName,
CardType,CardNumber,CardExpDate,CVV,Amount,PaymentDate)
values('$cusid','$cusname','$cushold', '$cardtype','$cardno','$cexp','$cvv','$totalcost','$date')";
    $db1->exec($sql);
    header('Location:delivery.php');
}



          

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: 'Roboto', sans-serif!important;
	margin:0;
	padding:0;
	box-sizing: border-box;
	background-repeat:no-repeat;
}

.bg
{
	min-height: 100vh;
	width: 100%;
	height: 1080px;
	display: flex;
    flex-direction: column;
    background-repeat: no-repeat;
    color:#963E7B;
    background:url('rebg.jpg');
    background-size:2000px;

}

.card {
	width: 60rem;
    margin: auto;
    background: white;
    position:center;
    align-self: center;
    top: 20rem;
    border-radius: 1.5rem;
    box-shadow: 4px 3px 20px #3535358c;
    display:flex;
    flex-direction: row;
    
}

.leftside {
	background: #030303;
	width: 25rem;
	display: inline-flex;
    align-items: center;
    justify-content: center;
	border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.product {
    object-fit: cover;
	width: 18em;
    height: 50em;
    border-radius: 1%;
}

.rightside {
    background-color:#EE9A4D;
	width: 35rem;
	color: white;
	font-weight:bold;
	border-bottom-right-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
    padding: 1rem 2rem 3rem 3rem;
}

p{
    display:block;
    font-size: 1.1rem;
    font-weight: 400;
    margin: .8rem 0;
}

.inputbox
{
    color:#030303;
	width: 100%;
    padding: 0.5rem;
    border: none;
    border-bottom: 1.5px solid #ccc;
    margin-bottom: 1rem;
    border-radius: 0.3rem;
    font-family: 'Roboto', sans-serif;
    color: #615a5a;
    font-size: 1.1rem;
    font-weight: 500;
  outline:none;
}

.expcvv {
    display:flex;
    justify-content: space-between;
    padding-top: 0.6rem;
}

.expcvv_text{
    padding-right: 1rem;
}
.expcvv_text2{
    padding:0 1rem;
}

.expcvv_text3{
    padding:0 1rem;
}

.button{
    background: #FFE4B5;
    padding: 15px;
    border: none;
    border-radius: 50px;
    color: black;
    font-weight: bold;
    font-size: 1.2rem;
    margin-top: 10px;
    width:100%;
    letter-spacing: .11rem;
    outline:none;
}

.button:hover
{
	transform: scale(1.05) translateY(-3px);
    box-shadow: 3px 3px 6px #38373785;
}

@media only screen and (max-width: 1000px) {
    .card{
        flex-direction: column;
        width: auto;
      
    }

}

.photo
{
top:175%;
left:20%;
position: absolute;
transform: translate(-50%, -50%);
font-family:Snell Roundhand, cursive;
font-weight:bold;
font-size:15px;
text-align:center;
}

label
{
top:35%;
left:50%;
position: absolute;
transform: translate(-50%, -50%);
font-style:Century Gothic;
font-weight:bold;
font-size:35px;
color:#FF4500;
letter-spacing: .3em;
text-shadow: white;
text-align:center;
}

</style>

</head>
<body>
<label>It's Pay Time for Your Orders!</label>
    <div class="bg">
      <div class="card">
        <div class="leftside">
          <img
            src="card2.jpg"
            class="product"
            alt="Shoes"
          />
        </div>
        <div class="rightside">
          <form action="" method="post">
            <h2>Payment Information</h2>
            <p> Total Amount</p>
            <input type="text" class="inputbox" name="totalprice" id="card_number" 
            value=" <?php 
            $sql = " select * from foodorder where CustomerName= '$cusname' and OrderDate='$date' and TotalPrice= '$totalcost' ";
            
foreach ($db1->query($sql) as $row)
{

        
    echo $_SESSION['TotalPrice'];
        
        
} ?>"   />
            <p>Your ID</p>
            <input type="text" class="inputbox" name="name" value="<?php echo$cusid;?>"  readonly />
            <p>Your Name</p>
            <input type="text" class="inputbox" name="name" value="<?php echo$cusname;?>"  readonly />
            <p>Cardholder Name</p>
            <input type="text" class="inputbox" name="cushold" required />
            <p>Card Number</p>
            <input type="text" class="inputbox" name="cardnumber" id="card_number" required />

            <p>Card Type</p>
            <select class="inputbox" name="cardtype" id="card_type" required>
              <option value="">--Select a Card Type--</option>
              <option value="Visa">Visa</option>
              <option value="Credit Card">Credit Card</option>
              <option value="Debit Card">Debit Card</option>
            </select>
<div class="expcvv">

            <p class="expcvv_text">Expiry</p>
            <input type="text" class="inputbox" name="expdate" id="exp_date" required />

            <p class="expcvv_text2">CVV</p>
            <input type="password" class="inputbox" name="cvv" id="cvv" required />
            
            <p class="expcvv_text3">Date</p>
            <input type="text" class="inputbox" name="cvv" id="cvv" value= "<?php echo $date;?>" />
        </div> <br><BR>
           
            <button type="submit" class="button" name="btncheck">CheckOut</button>
          </form>
        </div>
      </div>
    </div>
  


</body>

<footer style= "color:white;
 position: absolute;
  top: 200%;
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

 