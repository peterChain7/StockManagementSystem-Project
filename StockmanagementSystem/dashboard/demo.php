<!DOCTYPE html>
<head>
<title>removeproduct</title>
<link rel="stylesheet" href="css/styles/main.css"> 
<link rel="stylesheet" href="css/fonts/main.css">  
<link rel="stylesheet" href="css/forms/main.css">  
<link rel="stylesheet" href="css/tables/main.css">   
</head>
<body>
<!--the main div that holds all entire divisions, closed at the buttom-->
<div id="main-div">


<!--top div for notification for all errors-->
<div id="top-div">
</div>
<!--top div for notification ends here-->
<!--web contents here,  its content division-->
<div id="contents">
<table class="generaltables">
<tr><thead>
<th>TOTAL USERS</th>
<th>TOTAL PRODUCTS</th>
<th>TOTAL PRODUCT COST</th>
<th>TOTAL SALES</th>
<th>PROFIT</th>
<th>USER EARNINGS</th>


</tr></thead>
<?php
include('dbconnect/connection.php');

$sql = "SELECT count(*)username, count(*)productid, sum(pricepurchased), sum(salesprice),sum(profit),sum(userearnings)from product,sales,USER   where  product.productid=sales.productid and user.userid=sales.userid";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tbody><tr><td>" . 
$row["username"].

"</td><td>" . 
$row["productid"] .

 "</td><td>".
 $row["pricepurchased"].

 "</td><td>".
 $row["salesprice"].

 "</td><td>".
 $row["profit"].
 
  "</td><td>".
 $row["userearnings"].
 

"</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
<!--contents of the web ends here /contents div-->
<!--main div left side heigheted starts here-- -->
<div id="leftdiv-main">
<!--small div inside main left div starts here----------------------->
<div id="leftsmall-first">
<ul class="add-product" id="zoom">
<li><a href="removeproduct.php">remove product</a></li>
        <li><a href="addproduct.php">add product</a></li>
        <li><a href="stockstatus.php">stock status</a></li>
        <li><a href="productprices.php">product prices</a></li>
        <li><a href="deletedtransactions.php"> deleted transactions</a></li>  
        <li><a href="updatedtransactions.php">updated transactions </a></li>
        <li><a href="compasations.php">compasations</a></li>
        <li><a href="generalreport.php"> general report</a></li>  
        <li><a href="summary.php">summary</a></li>
        </ul>
        
        </div>
<!--<div id="leftsmall-second">
   
</div>-->
<!--small div inside main left div ends here------------------------->
<!--footer  this is system logo, logout-->
</div>

<!--main div left side heigheted ends here -->
<!--footer  this is system logo, logout-->
<div id="footer">
<?php

session_start();
if(isset($_SESSION['username']))
{
    echo $_SESSION['username'];
    echo '<a href="logout.php?logout">logout</a>';
}
else
{
    header('location:../index.html');
}

?>

</div>

<!--footer system logo ends-->
<!--div kuu imefungwa-->
</div>
</body>
</html>
<!----------------------------------------------END--------------------------->