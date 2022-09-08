<?php
include ('managenav.php');
include '../user/databaseconnect.php';

$fid=$_GET['FoodID'];

//echo $pid;

$sql="select * from food where FoodID='$fid'";

foreach($db1->query($sql) as $row)
{
    $name=$row['FoodName'];
    $price=$row['Price'];
    $image=$row['Image'];
}
?>

<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #00FF7F;  
}  
.form-style-9{
	max-width: 450px;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
.updatebtn {  
  background-color: #E9E4D4;  
  color: black;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.updatebtn:hover {  
  opacity: 1;
  background-color: #FFF9E3;  
}
</style>  
</head>  
<body>  
<form method = "post" action = "" enctype= "multipart/form-data" class="form-style-9">  
<h2>Fill in this from to Update the Fast Foods</h2>
<ul>
<li>
    <input type="text" name="fname" class="field-style field-split align-left" value="<?php echo $name;?>"/>
    <input type="price" name="price" class="field-style field-split align-right" value="<?php echo $price;?>" /><br>
    <label for="image"><b>Food Image</b></label>
    <img src="<?php echo '../images/'.$image;?>" width="200px" height="100px"><br>
    <input type="file" placeholder="Enter Image file" name="file" id="img" ><br>    
       <button type="submit" class="updatebtn" name="btnupdate">Update</button>

</li>
</ul>
</form>  
</body>  
</html> 
<?php
 
if(isset($_POST['btnupdate']))
{
    $name1=$_POST['fname'];
    $price1=$_POST['price'];
   
if($_FILES['file']['name']=="")
    {
  $sql="update food SET FoodName='$name1', Price='$price1' where FoodID='$fid'";
  $db1->exec($sql);
  //echo "updated successfully";
}


else
{
    $uploaddir ='../images/';
    $image=$uploaddir.basename($_FILES['file']['name']);
        
    if(move_uploaded_file($_FILES['file']['tmp_name'],$image))
    {
    //echo "File is valid, and was successfully uploaded.\n";
    //echo $image;
    }
    else
    {
    echo "Possible file upload attack!\n";
    }
        
    $sql="update food SET FoodName='$name1', Price='$price1', Image='$image' where FoodID='$fid'";
    $db1->exec($sql);
   // echo "updated successfully";
   
    
}
}

?>



    