<?php
include '../user/databaseconnect.php';


if(isset($_POST['btnlogin']))
{
    if($_POST['email']=="admin@gmail.com" && $_POST['password']=="123")
    {
        header('Location: dashboard.php');
    }
    else
    {
        echo "<script>alert('wrong admin email and password!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=50%, initial-scale=1">
	<style>

	* {
	box-sizing: border-box;
}

body {
	background: #E8ADAA;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 15px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

form {
	background-color: #FC6C85;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
	text-shadow: 2px 2px #FF2400;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 500px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
}

.log-in-container {
	left: 0;
	width: 100%;
	z-index: 2;
}
.login {
  background-color: #C24641;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.login:hover {
  opacity: 1;
}


	
	
	</style>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="" method="post">
				<h1>Admin Login Form</h1><br><br><br>
				<span>Use your admin account</span>
				<input type="email" placeholder="Email" name="email" />
				<input type="password" placeholder="Password"  name="password"/> <br>
				 <button type="submit" class="login" name= "btnlogin">Login</button>
			</form>

	</div>
	</div>
</body>
</html>