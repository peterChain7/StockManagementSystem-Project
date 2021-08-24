<?php
//stored function
session_start();

include ('dbconnect/connection.php');
if ($_SERVER['REQUEST_METHOD']=='POST')
{

    $username= $_POST ['username'];
    $password= $_POST ['password'];

$query = "SELECT * FROM user where username='$username' and password='$password'";
$result = mysqli_query($conn,$query);
if ($row = mysqli_fetch_array($result))
{

    $role = $row[8];
	
     
    if ($role == 'admin')
    {
	      
        $_SESSION ['username']=$_POST ['username'];
        header('location:dashboard/index.php');
		
    }
    
    
    else if($role == 'user')
    {
        $_SESSION ['username']=$_POST ['username'];
        header('location:user/index.php');
    }
	
	
	  else if($role == 'manager')
    {
        $_SESSION ['username']=$_POST ['username'];
        header('location:manager/index.php');
    }   
}

 else
    {
    //$_SESSION['errors'] = array("Your username or password was incorrect.");
    //header('location:index.php');
 echo"<div class='alert'><script type='text/javascript'>alert('incorrect username/password');</script></div>";
 }
}
?>
<!DOCTYPE html>
<head>
<title>login</title>
<link rel="stylesheet" href="css/styles/main.css"> 
<link rel="stylesheet" href="css/fonts/main.css"> 
<link rel="stylesheet" href="css/forms/main.css">    
</head>
<body>


<div id="main-div">
<!--contents here-->
<div id="contents">
<div class="div-login"align="center">
    <form action="index.php"method="POST" id="login">
    <input class="username" name="username"type="text"placeholder="username"id="name"><br><br>
    <input class="password" name="password"type="password"placeholder="password"id="password"><br>
     <input class="button" type="submit"value="login">  
    </form>
</div>
<!--error login div-->
<div id="error">

</div>
<!--error login div-->

</div>
</div>
<!--contents ends here-->
<!--div kuu imefungwa-->
</div>
</body>
</html>
<script src="js/adduser.js"></script>




    
    
    