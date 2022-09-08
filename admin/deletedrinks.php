<?php
include ('managenav.php');
include '../user/databaseconnect.php';
?>

<html>
<body>
<form method="get" action='deletedrinks2.php'>
<body style="background-color: black">
<br><br><table border=2 align=center style="box-shadow: 5px 10px 18px #888888">
  <tr style="color: #DC381F">
     <th>No.</th>
     <th>Drink Name</th>
      <th>Drink Price</th>
       <th>Drink Image</th>
       <th> Action</th>
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
echo "<td><a href='deletedrinks2.php?DrinkID=$did'>Delete</a></td>";
echo "</tr>";

}
echo	"</table></body></form></html>";

