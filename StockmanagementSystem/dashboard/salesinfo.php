<?php session_start(); ?>
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
<th>PRICE PURCHASED</th>
<th>NAME</th>
<th>STATUS</th>
<th>SALESPRICE</th>
<th>TRANSACTION NO</th>
<th>PROFIT</th>
<th>USER EARNINGS</th>
<th>DATE</th>
</tr></thead>
<?php
include('dbconnect/connection.php');
$sql = "select pricepurchased,productname,status,salesprice,salesid,profit,userearnings,created_at  from product,sales   where product.productid=sales.productid";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tbody><tr><td>" . 
$row["pricepurchased"].

"</td><td>" . 
$row["productname"] .

 "</td><td>".
 $row["status"].

 "</td><td>".
 $row["salesprice"].

 "</td><td>".
 $row["salesid"].
 
  "</td><td>".
 $row["profit"] =$row["salesprice"]- $row["pricepurchased"]-$row["userearnings"].
 
  "</td><td>".
 $row["userearnings"]=5/100* $row["salesprice"].
 
  "</td><td>".
 $row["created_at"].
 

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
        <li><a href="stockstatus.php">sales statistics</a></li>
        <li><a href="productprices.php">product prices</a></li>
        <li><a href="salesinfo.php"> salesinfo</a></li>  
        <li><a href="generalreport.php"> general report</a></li>  
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