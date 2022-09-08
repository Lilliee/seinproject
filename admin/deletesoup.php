<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body style="background: black">
<form method="get" action='deletesoup2.php'>

<br><br><table border=2 align=center style="box-shadow: 5px 10px 18px #888888">
  <tr style="color: #CD7F32">
     <th>No.</th>
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
    

echo "<tr bgcolor='#F7E7CE' width='100px' height='50px'>";
echo "<td>$sid</td>";
echo "<td>$sname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='100px' height='80px''></td>";
echo "<td><a href='deletesoup2.php?SoupID=$sid'>Delete</a></td>";
echo "</tr>";

}
echo	"</table></body></form></html>";

