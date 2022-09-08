<?php
include '../user/databaseconnect.php';
session_start();

$cusid="";
$email=$password="";

//use md5 hash value of 123

if(isset($_POST['btnlogin']))

{
    $email=$_POST['email'];
    $password=$_POST['password'];//123
    $hpassword=md5($password);
    $sql="select * from customers where Email='$email' and Password='$hpassword'";
    
    foreach ($db1->query($sql) as $row)
    {
        $email=$row['Email'];
        $cusid=$row['CustomerID'];
        $cusname=$row['CustomerName'];
    }
    if($cusid!=0)
    {
        $_SESSION['CustomerID']=$cusid;
        $_SESSION['CustomerName']=$cusname;
        header('Location: userhome.php');  
    }
    else
    {
        echo "<script>alert('wrong usermail and password')</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
*{
  margin: 0;
  padding: 0;
  top:10px;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #F2BB66;

}
::selection{
  background: #4158d0;
  color: #fff;
}
.wrapper{
  width: 380px;
  background: #FAF884;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: black;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: linear-gradient(-135deg, #ffff66, #ff9900);
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #B86500;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #E66C2C;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #CD7F32;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  background: linear-gradient(-135deg, #ffff00, #ffcc99);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #B8860B;
  margin-top: 20px;
  text-align: center;
}
form .signup-link a{
  color: #B8860B;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
    
    </style>
    
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form method="post" action="#">
        <div class="field">
          <input type="text" name="email" required>
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="field">
          <input type="submit" name="btnlogin" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="registerform.php">Signup now!</a></div>
      </form>
    </div>
  </body>
</html>

