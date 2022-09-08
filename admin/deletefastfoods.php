<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body>
<form method="get" action='deletefastfood2.php'>
<body style="background-color: black">
<br><br><table border=2 align=center style="box-shadow: 5px 10px 18px #888888">
  <tr>
     <th>No.</th>
     <th>Food Name</th>
      <th>Food Price</th>
       <th>Food Image</th>
       <th> Action</th>
       </tr>

<?php 
$fid=$fname=$price=$image="";
$sql = " select * from food ";
foreach ($db1->query($sql) as $row)
{
    
    $fid = $row['FoodID'];
    $fname = $row['FoodName'];
    $price = $row['Price'];
    $image = $row['Image'];
    

 echo "<tr bgcolor='#F9966B' width='100px' height='50px'>";
echo "<td>$fid</td>";
echo "<td>$fname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='100px' height='80px''></td>";
echo "<td><a href='deletefastfood2.php?FoodID=$fid'>Delete</a></td>";
echo "</tr>";

}
echo	"</table></body></form></html>";

