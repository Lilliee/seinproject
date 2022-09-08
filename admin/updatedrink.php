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
    

echo "<tr bgcolor='#F9966B' width='100px' height='50px'>";
echo "<td>$did</td>";
echo "<td>$dname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='100px' height='80px''></td>";

echo "<td><a href='updatedrink2.php?DrinkID=$did'>Update</a></td>";
echo "</tr>";

}
echo	"</table></form></body></html>";

