<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body style="background: #F9966B">
<br><br><table border=1 align=center style="color:white" >
  <tr style="color: black; font-weight:bold;font-size:20px;">
     <th>Number</th>
     <th>Drinks Name</th>
      <th>Drinks Price</th>
       <th>Drinks Image</th>
       </tr>

<?php 
$did=$dname=$price=$image="";
$sql = " select * from drinks ";
foreach ($db1->query($sql) as $row)
{
    
    $did = $row['DrinkID'];
    $dname = $row['Name'];
    $price = $row['Price'];
    $image = $row['Image'];
    

echo "<tr bgcolor='#F87431'  height='50px'>";
echo "<td>$did</td>";
echo "<td>$dname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='200px' height='150px''></td>";

echo "</tr>";

}
echo	"</table></body></html>";

