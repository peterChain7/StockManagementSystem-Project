<?php
//stored function
session_start();

include ('dbconnect/connection.php');
if ($_SERVER['REQUEST_METHOD']=='POST')
{

    $firstname= $_POST ['username'];
    $password= $_POST ['password'];
    $query="select * from admin where username='".$_POST ['username']."'and password='".$_POST ['password']."'";
    $result=mysqli_query($conn,$query);
if(mysqli_fetch_assoc($result))

{
//if data matches create session
$_SESSION ['username']=$_POST ['username'];
header("location:index.php");
}
else
{
    header("location:index.php?invalid=incorrect username or password");
}
}
?>