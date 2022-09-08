<?php
include ('managenav.php');
include '../user/databaseconnect.php';

?>

<html>
<body style="background-color: black" >
<br><br><table border=2 align=center style="box-shadow: 5px 10px 18px #888888">
  <tr style="color: #FFD801">
     <th>No.</th>
      <th>Customer ID</th>
       <th>Customer Name</th>
       <th> Card Holder</th>
       <th>Card Type</th>
       <th>Card No.</th>
       <th>Card EXP Date</th>
       <th>CVV</th>
       <th>Amount</th>
       <th>Date</th>
       </tr>

<?php 
$pid=$cid=$cname=$cusholname=$ctype=$cnumber=$cexp=$cvv=$amount="";
$sql = " select * from paymenttable ";
foreach ($db1->query($sql) as $row)
{
    $pid=$row['PayID'];
    $cid = $row['CustomerID'];
    $cname = $row['CustomerName'];
    $cusholname= $row['CardHolderName'];
    $ctype= $row['CardType'];
    $cnumber = $row['CardNumber'];
    $cexp = $row['CardExpDate'];
    $cvv = $row['CVV'];
    $amount = $row['Amount'];
    $date=$row['PaymentDate'];
    

echo "<tr bgcolor='#659EC7' width='100px' height='50px'>";
echo "<td>$pid</td>";
echo "<td>$cid</td>";
echo "<td>$cname</td>";
echo "<td>$cusholname</td>";
echo "<td>$ctype</td>";
echo "<td>$cnumber</td>";
echo "<td>$cexp</td>";
echo "<td>$cvv</td>";
echo "<td>$amount</td>";
echo "<td>$date</td>";


echo "</tr>";

}
echo	"</table></body></html>";

