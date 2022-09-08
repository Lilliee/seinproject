<?php
include ('managenav.php');
include '../user/databaseconnect.php';


?>

<html>
<body style="background: black">
<br><br><table border=2 align=center style="box-shadow: 5px 10px 18px #888888">
  <tr style="color: #6F4E37">
     <th>No.</th>
     <th>Cake Name</th>
      <th>Cake Price</th>
       <th>Cake Image</th>
       </tr>

<?php 
$cid=$cname=$price=$image="";
$sql = " select * from cake ";
foreach ($db1->query($sql) as $row)
{
    
    $cid = $row['CakeID'];
    $cname = $row['Name'];
    $price = $row['Price'];
    $image = $row['Image'];
    

echo "<tr bgcolor='#C47451' width='100px' height='50px'>";
echo "<td>$cid</td>";
echo "<td>$cname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='100px' height='80px''></td>";

echo "<td><a href='updatecake2.php?CakeID=$cid'>Update</a></td>";
echo "</tr>";

}
echo	"</table></form></body></html>";

