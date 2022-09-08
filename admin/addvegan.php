<?php
include 'managenav.php';
include '../user/databaseconnect.php';

$vname=$price="";


if(isset($_POST['btninsert']))
{
    $vname = $_POST['vname'];
    $price = $_POST['price'];
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../images/";
    
    /* new file size in KB */
    $new_size = $file_size/1024;
    /* new file size in KB */
    
    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */
    
    $final_file=str_replace(' ','-',$new_file_name);
    
    move_uploaded_file($file_loc,$folder.$final_file);
    $sql = "insert into vegan(Name,Price,Image)values('$vname','$price','$final_file')";
    $db1->exec($sql);
    //echo "Data is inserted successfully!";
    
}

?>


<!DOCTYPE html>
<html>
  <head>
    <style>
      html, body 
      {
      min-height: 100%;
      }
      body, div, form, input, p 
      { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body 
      {
      background: url("veganbg.jpg") no-repeat center;
      background-size: cover;
      }
      h1, h2 
      {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block 
      {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form 
      {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      color: #FF4500;
      font-weight: bold;
      text-align: center;
	  text-shadow: 2px 2px black;
      }
      .info {
      display: flex;
      flex-direction: column;
      width: 60%;
      }
      input {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 50%;
      background:#C11B17;
      }
      button:hover, .btn-item:hover {
      background: #F67280;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <form method= "post" action="#" enctype= "multipart/form-data">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Fill in this from to insert the Vegan Foods</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="vname" placeholder="Food Name" required>
          <input type="text" name="price" placeholder=" Price" required>
          <label for="image"><b>Food Image</b></label>
	<input type="file" placeholder="Enter Image file" name="file" id="img" required><br>    
       <button type="submit" class="insertbtn" name="btninsert">Insert</button>
       </div>
      </form>
    </div>
  </body>
</html>