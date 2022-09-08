<?php
include ('managenav.php');
include '../user/databaseconnect.php';


?>

<html>
<form method="get" action="">
<body style="background-color: black">
<br><br><table border=2 align=center style="box-shadow: 5px 10px 18px #888888">
  <tr style="color: #DC381F">
     <th>No.</th>
     <th>Food Name</th>
      <th>Food Price</th>
       <th>Food Image</th>
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


echo "<td><a href='updatefastfood2.php?FoodID=$fid'>Update</a></td>";
echo "</tr>";

}
echo	"</table></form></body></html>";

