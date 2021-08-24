<?php
//stored function
session_start();

include ('dbconnect/connection.php');
if ($_SERVER['REQUEST_METHOD']=='POST')
{

    $firstname= $_POST ['username'];
    $password= $_POST ['password'];

$query = "select * from user where username='$firstname' and passwrd='$password'";
$result = mysqli_query($conn,$query);
if ($row = mysqli_fetch_array($result))
{

    $role = $row[9];
	
     
    if ($role == 'ADMIN')
    {
	      
        $_SESSION ['username']=$_POST ['username'];
        header('location:dashboard/index.php');
		
    }
    
    
    else if($role == 'USER')
    {
        $_SESSION ['username']=$_POST ['username'];
        header('location:user/index.php');
    }
	
	
	  else if($role == 'MANAGER')
    {
        $_SESSION ['username']=$_POST ['username'];
        header('location:manager/index.php');
    }   
}

 else
    {
	$_SESSION['errors'] = array("Your username or password was incorrect.");
header("Location:index.php");
   //header('location:index.php');
    }

}
?>