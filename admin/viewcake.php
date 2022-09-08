<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body style="background: #C47451">
<br><br><table border=1 align=center style="color:white" >
  <tr style="color: black; font-weight:bold;font-size:20px;">
     <th>Number</th>
     <th>Cake Name  </th>
      <th>Cake Price  </th>
       <th>Cake Image  </th>
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
    

echo "<tr bgcolor='#7E3817' height='50px'>";
echo "<td>$cid</td>";
echo "<td>$cname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='200px' height='150px''></td>";

echo "</tr>";

}
echo	"</table></body></html>";

