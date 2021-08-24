<?php
include('connection.php');
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$username =$_POST['username'];
$resident =$_POST['resident'];
$password =$_POST['password'];
$phonenumber =$_POST['phonenumber'];
$userid =$_POST['userid'];
$role =$_POST['role'];

$sql="INSERT INTO user(user_id,firstname,lastname,username,resident,passwrd,phonenumber,role)
VALUES
(
  '$userid',
  '$firstname',
  '$lastname',
  '$username',
  '$resident',
  '$password',
  '$phonenumber',
  '$role')";
if ( $conn->query($sql)==true)
{
  echo "yes";
}
else
{
  echo "no";
}

?>