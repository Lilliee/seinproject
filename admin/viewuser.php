<?php
include ('adminav.php');
include '../user/databaseconnect.php';

?>

<html>
<body style="background-color: black" >
<br><br><table border=2 align=center style="box-shadow: 5px 10px 18px #888888">
  <tr style="color: #FFD801">
     <th>No.</th>
     <th>Customer Name</th>
      <th>Customer Email</th>
       <th> Password</th>
       <th> Phone</th>
       <th>Address</th>
       </tr>

<?php 
$cid=$cname=$cemail=$cpsw=$cphone=$cadd="";
$sql = " select * from customers ";
foreach ($db1->query($sql) as $row)
{
    //echo $row['ProductID'].$row['ProductName'].$row['Price'].$row['Image'];
    
    $cid = $row['CustomerID'];
    $cname = $row['CustomerName'];
    $cemail= $row['Email'];
    $cpsw= $row['Password'];
    $cphone = $row['Phone'];
    $cadd = $row['Address'];
    

echo "<tr bgcolor='#FFD801' width='100px' height='50px'>";
echo "<td>$cid</td>";
echo "<td>$cname</td>";
echo "<td>$cemail</td>";
echo "<td>$cpsw</td>";
echo "<td>$cphone</td>";
echo "<td>$cadd</td>";


echo "</tr>";

}
echo	"</table></body></html>";

