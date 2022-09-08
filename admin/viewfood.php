<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body style="background: #E77471">
<br><br><table border=1 align=center style="color:white" >
    <tr style="color: black; font-weight:bold;font-size:20px;">
     <th>Number</th>
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
    

echo "<tr bgcolor='#E55451' height='50px'>";
echo "<td>$fid</td>";
echo "<td>$fname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='200px' height='150px''></td>";

echo "</tr>";

}
echo	"</table></body></html>";

