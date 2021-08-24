<!DOCTYPE html>
<head>
<title>lhome</title>
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
        </div>
<!--<div id="leftsmall-second">
  
</div>-->
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
</body>
</html>
