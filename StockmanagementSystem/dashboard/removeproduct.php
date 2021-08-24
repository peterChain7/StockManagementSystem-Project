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
<form id="login"class="removeproductform"action="removeproduct.php"name="removeproduct">
<table class="removeproducttable"width="90%"><tr><td>
<label for ="productname">Product Name</label>
<input type ="text"id="productname"class="textbox">
</td></tr></table>
<input type="submit"value="search">
</form>
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