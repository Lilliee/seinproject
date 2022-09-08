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
  background-color:#CECECE;
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
  background-color: #DCDCDC;
   font-weight:bold;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color:black;
  padding: 14px 16px;
  background-color: #E5E4E2;
  font-family: inherit;
  margin: 0;
   font-weight:bold;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #BCC6CC;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #B6B6B4;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
   font-weight:bold;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
   font-weight:bold;
}

.dropdown-content a:hover {
  background-color: #D3D3D3;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="dashboard.php"><b>Dash Board</b></a>
 
  <div class="dropdown">
    <button class="dropbtn">Manage FastFoods
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addfood.php">Add FastFoods</a>
      <a href="updatefastfood.php">Update FastFoods</a>
        <a href="viewfood.php">View FastFoods</a>
      <a href="deletefastfoods.php">Delete FastFoods</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Manage Drinks
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="adddrinks.php">Add Drinks</a>
      <a href="updatedrink.php">Update Drinks</a>
        <a href="viewdrinks.php">View Drinks</a>
      <a href="deletedrinks.php">Delete Drinks</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Manage Noodles
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addnoodles.php">Add Noodles</a>
      <a href="updatenoodle.php">Update Noodles</a>
        <a href="viewnoodles.php">View Noodles</a>
      <a href="deletenoodle.php">Delete Noodles</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">Manage Vegan Foods
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addvegan.php">Add Vegan Foods</a>
      <a href="updatevegan.php">Update Vegan Foods</a>
        <a href="viewvegan.php">View Vegan Foods</a>
      <a href="deletevegan.php">Delete Vegan Foods</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">Manage Soups
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addsoup.php">Add Soups</a>
      <a href="updatesoup.php">Update Soups</a>
        <a href="viewsoup.php">View Soups</a>
      <a href="deletesoup.php">Delete Soups</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">Manage Cakes
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addcake.php">Add Cakes</a>
      <a href="updatecake.php">Update Cakes</a>
        <a href="viewcake.php">View Cakes</a>
      <a href="deletecake.php">Delete Cakes</a>
    </div>
  </div>
  
  
</div>


</body>
</html>
