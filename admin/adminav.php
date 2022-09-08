<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
}

.navbar a {
  float: left;
  font-size: 16px;
  color:black;
  background-color:#F8B88B;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
}

.dropdown {
  float: right;
  overflow: hidden;
  background-color: #C24641;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color:black;
  padding: 14px 16px;
  background-color: #E77471;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #C5908E;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #E8ADAA;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #FFCCCB;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="dashboard.php" "><b>Dash Board</b></a> 
  <a href="managenav.php" style="margin-left: 6%">Manage Foods</a>
</div>


</body>
</html>
