<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body style="background: black">
<form method="get" action='deletesoup2.php'>

<br><br><table border=2 align=center style="box-shadow: 5px 10px 18px #888888">
  <tr style="color: #FF8C00">
     <th>No.</th>
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
    

echo "<tr bgcolor='#C48189' width='100px' height='50px'>";
echo "<td>$vid</td>";
echo "<td>$vname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='100px' height='80px''></td>";
echo "<td><a href='deletevegan2.php?VeganID=$vid'>Delete</a></td>";
echo "</tr>";

}
echo	"</table></body></form></html>";

