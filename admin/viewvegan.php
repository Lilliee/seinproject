<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body style="background: #C3FDB8">
<br><br><table border=1 align=center style="color:white" >
  <tr style="color: black; font-weight:bold;font-size:20px;">
     <th>Number</th>
     <th>Food Name</th>
      <th>Food Price</th>
       <th>Food Image</th>
       </tr>

<?php 
$vid=$vname=$price=$image="";
$sql = " select * from vegan ";
foreach ($db1->query($sql) as $row)
{
    
    $vid = $row['VeganID'];
    $vname = $row['Name'];
    $price = $row['Price'];
    $image = $row['Image'];
    

echo "<tr bgcolor='#90EE90' height='50px'>";
echo "<td>$vid</td>";
echo "<td>$vname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='200px' height='150px''></td>";

echo "</tr>";

}
echo	"</table></body></html>";

