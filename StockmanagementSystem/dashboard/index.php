<?php session_start(); ?>
<!DOCTYPE html>
<head>
<title>home</title>
<link rel="stylesheet" href="css/styles/main.css"> 
<link rel="stylesheet" href="css/fonts/main.css">  
<link rel="stylesheet" href="css/tables/main.css">    
</head>
<body>
<!--the main div that holds all entire divisions, closed at the buttom-->
<div id="main-div">
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
    header('location:../index.php');
}
?>
</div>
<!--footer system logo ends-->
<!--top div for notification for all errors-->
<div id="top-div">
</div>
<!--top div for notification ends here-->
<!--web contents here,  its content division-->
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
		"<tr><td><H4><img src='images/profit.png'>Item cost: ".$pricepurchased."/=</h4></td></tr>".
		"<tr><td><H4><img src='images/profit.png'>Profit: ".$profit."/=</h4></td></tr>".
		"<tr><td><H4><img src='images/profit.png'>User earnings: ".$userearnings."/=</h4></td></tr>
		</table>";
        
	}
	
?>

</div>

<!--contents of the web ends here /contents div-->
<!--main div left side heigheted starts here-- -->
<!--main div left side heigheted -->
<div id="leftdiv-main">
<!--small div inside main left div starts here----------------------->
<div id="leftsmall-first">
<ul class="add-product" id="zoom">
        
        <li><a href="adduser.php"> Add user</a></li>
        <li><a href="removeuser.php"> Remove user</a></li>
        <li><a href="updateuser.php"> update user</a></li>
        </ul>
        
        </div>

<!--ndogo zake zinaisha hapa-->
<!--main div left side heigheted ends here -->
</div>

<!--footer-->

<!--footer ends-->
<!--div kuu imefungwa-->
</div>
</body>
</html>
<!----------------------------------------------END--------------------------->