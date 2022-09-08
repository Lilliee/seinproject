<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body style="background: #C24641">
<br><br><table border=1 align=center style="color:white" >
  <tr style="color: black; font-weight:bold;font-size:20px;">
     <th>Number</th>
     <th>Noodle Name</th>
      <th>Noodle Price</th>
       <th>Noodle Image</th>
       </tr>

<?php 
$nid=$nooname=$price=$image="";
$sql = " select * from noodles ";
foreach ($db1->query($sql) as $row)
{
    
    $nid = $row['NoodleID'];
    $nooname = $row['Name'];
    $price = $row['Price'];
    $image = $row['Image'];
    

echo "<tr bgcolor='#E55451' height='50px'>";
echo "<td>$nid</td>";
echo "<td>$nooname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='200px' height='150px''></td>";

echo "</tr>";

}
echo	"</table></body></html>";

