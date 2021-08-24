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
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>PHONE</th>
<th>PRODUCT PRICE</th>
<th>SALES PRICE</th>
<th>PRODUCTNAME</th>
<th>DATE</th>
<th>PROFIT</th>



</tr></thead>
<?php
include('dbconnect/connection.php');

$sql = "SELECT firstname,lastname,phonenumber,price,salesprice,productname,created_at,profit  from user,product,sales
where product.productid=sales.productid  and user.userid=sales.userid";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<tbody><tr><td>" . 
$row["firstname"].

"</td><td>" . 
$row["lastname"] .

"</td><td>" . 
$row["phonenumber"] .

"</td><td>" . 
$row["price"] .

"</td><td>" . 
$row["salesprice"] .


"</td><td>" . 
$row["productname"] .


"</td><td>" . 
$row["created_at"] .

"</td><td>" . 
$row["profit"] ='not applicable'.





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
<li><a href="saleproduct.php">Sale product </a></li>
        <li><a href="productprices.php">Product Prices</a></li>
        <li><a href="report.php"> Report</a></li>  
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