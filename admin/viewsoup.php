<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body style="background: #5E5A80">
<br><br><table border=1 align=center style="color:white" >
  <tr style="color: black; font-weight:bold;font-size:20px;">
     <th>Number</th>
     <th>Soup Name</th>
      <th>Soup Price</th>
       <th>Soup Image</th>
       </tr>

<?php 
$sid=$sname=$price=$image="";
$sql = " select * from soup ";
foreach ($db1->query($sql) as $row)
{
    
    $sid = $row['SoupID'];
    $sname = $row['Name'];
    $price = $row['Price'];
    $image = $row['Image'];
    

echo "<tr bgcolor='#4E5180' ' height='50px'>";
echo "<td>$sid</td>";
echo "<td>$sname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='200px' height='150px''></td>";

echo "</tr>";

}
echo	"</table></body></html>";

