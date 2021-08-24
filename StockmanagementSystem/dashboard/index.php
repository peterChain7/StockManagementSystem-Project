<?php session_start(); ?>
<!DOCTYPE html>
<head>
<title>home</title>
<link rel="stylesheet" href="css/styles/main.css"> 
<link rel="stylesheet" href="css/fonts/main.css">  
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
<table class="homestatus">
<?php 
//this php script responsible for searching data from database to send to android
//and when you run this script alone, will display data on browser
	require_once('dbconnect/connection.php');
//statement SMMT
	$stmt = $conn->prepare("SELECT count(*)username, count(*)productid, sum(pricepurchased), sum(salesprice),sum(profit),sum(userearnings)from product,sales,USER   where  product.productid=sales.productid and user.userid=sales.userid ");
	$stmt->execute();
//SMS bind:  to return value from given colums
    //use array method to fetch multiple colums instead of using JSON object
    //binding result does not support select *
	$stmt->bind_result($username,$productid,$pricepurchased,$salesprice,$profit,$userearnings);
	$contents = array(); 
	while($stmt->fetch())
	//smt to fetch given rows using array
    //sequence order is matter  as you declare in query
    {
		$temp = array();
        
        $temp['username']=$username;
        $temp['productid']=$productid;
        $temp['pricepurchased']=$pricepurchased;
		$temp['salesprice']=$salesprice;
		$temp['profit']=$profit;
		$temp['userearnings']=$userearnings;
		$profit=$salesprice-$pricepurchased-$userearnings;
		$userearnings=5/100* $salesprice;
		//$profit=$pprice-$salesprice;
	    //array to push content  from given rows
        array_push($contents, $temp);
        echo 
         "<tr><td><H4><img src='images/totalitems.png'>Transactions: ".$username."</h4></td></tr>".
        "<tr><td><H4><img src='images/salesprice.png'>Total items: ".$productid."</h4></td></tr>".
		"<tr><td><H4><img src='images/salesprice.png'>Total sales ".$salesprice."/=</h4></td></tr>".
		"<tr><td><H4><img src='images/profit.png'>Ttem cost: ".$pricepurchased."/=</h4></td></tr>".
		"<tr><td><H4><img src='images/profit.png'>Profit: ".$profit."/=</h4></td></tr>".
		"<tr><td><H4><img src='images/profit.png'>User earnings: ".$userearnings."/=</h4></td></tr>
		</table>";
        
	}
	
?>
</div>
<!--contents ends here-->
<!--main div left side heigheted -->
<div id="leftdiv-main">
<!--ndogo zake zinaanza hapa-->
<div id="leftsmall-first">
<ul class="add-product" id="zoom">
         <li><a href="removeproduct.php">remove product</a></li>
        <li><a href="addproduct.php">add product</a></li>
        <li><a href="stockstatus.php">sales statistics</a></li>
        <li><a href="productprices.php">product prices</a></li>
        <li><a href="salesinfo.php"> salesinfo</a></li>  
        <li><a href="generalreport.php"> general report</a></li>  
       </div>
<!--<div id="leftsmall-second">
  </div>-->
<!--ndogo zake zinaisha hapa-->
<!--main div left side heigheted ends here -->
</div>
<!--footer-->
<div id="footer">
    <?php
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
</body>
</html>