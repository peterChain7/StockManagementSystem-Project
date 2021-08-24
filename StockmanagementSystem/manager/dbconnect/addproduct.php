<?php
include('connection.php');
$productname=$_POST['productname'];
$productid=$_POST['productid'];
$datepurchased=$_POST['datepurchased'];
$pricepurchased=$_POST['pricepurchased'];
$userid=$_POST['userid'];
$pair=$_POST['pair'];
$status=$_POST['status'];
$price=$_POST['price'];
$sql = "INSERT INTO product values('$productname','$productid','$datepurchased','$pricepurchased','$userid','$pair','$status','$price')";
if ($conn->query($sql) === TRUE) 
{
  echo"<div class='alert'><script type='text/javascript'>alert('record successfully added !!');</script></div>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>