<?php session_start(); ?>
<!DOCTYPE html>
<head>
<title>adduser</title>
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



<form id="adduser"class="addproductform"method="POST"action="dbconnect/adduser.php">
    <table class="addproducttable"width="90%"><tr><td>
    
<label for ="Reg No">Reg No</label>
<input type ="text"class="textbox"id="regno"name="userid"><br>

<label for ="firstname">firstname</label>
<input type ="text"class="textbox"id="firstname"name="firstname"><br>

<label for ="lastname">lastname</label>
<input type ="text" class="textbox"id="lastname"name="lastname"><br>

<label for ="username">username</label>
<input type ="text" class="textbox"id="username"name="username"><br>


<label for ="resident">resident</label>
<input type ="text" class="textbox"id="resident"name="resident"><br>

</select>


<label for ="password">password</label>
<input type ="password" class="textbox"id="password"name="password"><br>


<label for ="rpassword">rewrite password</label>
<input type ="password" class="textbox"id="repeatpassword"name="repeatpassword"><br>


<label for ="email">email</label>
<input type ="email" class="textbox"id="email"name="email"><br>


<label for ="phonenumber">phone number</label>
<input type ="number" class="textbox"id="phonenumber"name="phonenumber"><br>


<label for ="role">role</label>
<input type ="text" class="textbox"id="role"name="role"><br>

</td></tr></table>
<input type="submit"value="register">
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
 <script>

    const regno = document.getElementById('regno')
    const firstname = document.getElementById('firstname')
    const lastname = document.getElementById('lastname')
    const username = document.getElementById('username')
    const resident = document.getElementById('resident')
    const password= document.getElementById('password')
    const repeatpassword= document.getElementById('repeatpassword')
    const email = document.getElementById('email')
    const phonenumber = document.getElementById('phonenumber')
    const role = document.getElementById('role')
    const form = document.getElementById('adduser')
    const errorElement = document.getElementById('top-div')
    
    form.addEventListener('submit', (e) => {
      let messages = []
      if (regno.value === '' || regno.value == null) {
        messages.push('regno is required')
      }

      else if (firstname.value === '' || firstname.value == null) {
        messages.push('enter firstname')
      }

      else if (firstname.value >20) {
        messages.push('firstname is much longer')
      }

     else if (lastname.value === '' || lastname.value == null) {
        messages.push('lastname is required')
      }

      else if (username.value === '' || username.value == null) {
        messages.push('username is required')
      }

     else if (resident.value === '' || resident.value == null) {
        messages.push('resident is required')
      }

      else  if (password.value === '' || password.value == null) 
      {
        messages.push('password is required')
      }
    
    
      else if (password.value.length >= 20) {
        messages.push('Password must be less than 20 characters')
        
      }

      else if (password.value.length <=3) 
      {
        messages.push('Password must be greater than 6 characters')
        
      }
    
      else if (password.value === 'password' ||password.value=='PASSWORD'||password.value=='nywira'||password.value=='NYWIRA') {
        messages.push('Password cannot be password')
      }


      else  if (repeatpassword.value !== password ) 
      {
        messages.push('password does not match')
      }

      else if (phonenumber.value.length >10) 
      {
        messages.push('invalid phone number (format 0676xxxxxx)')
        
      }

      else  if (phonenumber.value === '' || phonenumber.value == null) 
      {
        messages.push('enter phone number')
      }
    
      else  if (role.value !== 'user' || role.value !== 'admin'|| role.value !== 'manager') 
      {
        messages.push('role:  USER,ADMIN,MANAGER -small leter')
      }
     

      if (messages.length > 0) {
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
      }
    })
</script>