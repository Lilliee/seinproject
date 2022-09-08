<?php
include ('managenav.php');
include '../user/databaseconnect.php';


?>

<html>
<form method="get" action="">
<body style="background: black">
<br><br><table border=2 align=center style="box-shadow: 5px 10px 18px #888888">
  <tr style="color: #DC381F">
     <th>No.</th>
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
    

echo "<tr bgcolor='#F9966B' width='100px' height='50px'>";
echo "<td>$nid</td>";
echo "<td>$nooname</td>";
echo "<td>$price</td>";
echo "<td><img src='../images/$image' width='100px' height='80px''></td>";


echo "<td><a href='updatenoodle2.php?NoodleID=$nid'>Update</a></td>";
echo "</tr>";

}
echo	"</table></form></body></html>";

