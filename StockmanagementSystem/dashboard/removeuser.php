<?php session_start(); ?>
<!DOCTYPE html>
<head>
<title>removeuser</title>
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
<form id="login"class="removeproductform">
<table class="removeproducttable"width="90%"><tr><td>
<label for ="productname">reg no</label>
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
       <li><a href="adduser.php"> Add user</a></li>
        <li><a href="removeuser.php"> Remove user</a></li>
        <li><a href="updateuser.php"> update user</a></li>
        </ul>
        
        </div>

<!--small div inside main left div ends here------------------------->
<!--main div left side heigheted ends here -->
</div>
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
<!----------------------------------------------END--------------------------->

<!--div kuu imefungwa-->
</div>
</body>
</html>