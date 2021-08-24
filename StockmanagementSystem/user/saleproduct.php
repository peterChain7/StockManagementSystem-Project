<!DOCTYPE html>
<head>
<title>adduser</title>
<link rel="stylesheet" href="css/styles/main.css"> 
<link rel="stylesheet" href="css/fonts/main.css">  
<link rel="stylesheet" href="css/forms/main.css">  
<link rel="stylesheet" href="css/tables/main.css">   
</head>
<body>
<!--div kuu-->
<div id="main-div">

<!--top div for notification-->
<div id="top-div">

</div>
<!--top div for notification ends here-->

<!--contents here-->
<div id="contents">
    <form id="saleproduct"class="addproductform"method="POST"action="dbconnect/saleproduct.php">
    <table class="addproducttable"width="90%"><tr><td>
<label for ="price">price</label>
<input type ="text"class="textbox"id="productid"name="price"><br>

<!--<label for ="productid">productid</label>
<input type ="text"class="textbox"id="salesprice"name="productid"><br>-->

<label for ="userid"> productid</label>
<select name ="productid">    
<?php
include('dbconnect/connection.php');
$sql = "SELECT productid FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<option>" . 
$row["productid"].
 "</option><br>";
}
echo "<select>";
} else { echo "0 results"; }
$conn->close();
?>
<br><br>


<label for ="user id">userid</label>
<input type ="text" class="textbox"id="userid"name="userid"><br>


<label for ="pair">pair</label>
<input type ="text"class="textbox"id="productid"name="pair"><br>

 


</td></tr></table>
<input type="submit"value="register">
</form>
</div>
<!--contents ends here-->
<!--main div left side heigheted -->
<div id="leftdiv-main">

<!--ndogo zake zinaanza hapa-->
<div id="leftsmall-first">

    <ul class="add-product" id="zoom">
    <li><a href="saleproduct.php">Sale product </a></li>
        <li><a href="productprices.php">Product Prices</a></li>
        <li><a href="report.php"> Report</a></li>  
        </ul>
        
        </div>

<!--ndogo zake zinaisha hapa-->


<!--main div left side heigheted ends here -->
</div>

<!--footer-->

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
        header("location:../index.php");
    }
    
    ?>

</div>
<!--footer ends-->
<!--div kuu imefungwa-->
</div>
<script src="js/adduser.js"></script>
</body>
</html>