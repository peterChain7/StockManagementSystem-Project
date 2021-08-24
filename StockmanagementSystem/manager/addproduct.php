<?php session_start(); ?>
<!DOCTYPE html>
<head>
<title>addproduct</title>
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
    <form action="dbconnect/addproduct.php"method="POST" id="login"class="addproductjavaform">
   <table class="addproducttable"width="90%">
		<tr><td>
<label for ="productname">Product name</label> 
    <input class="textbox" type="text"placeholder="pname"id="productname"name="productname"><br><br>

    <label for ="product ID">Product ID</label> 
      <input class="textbox" type="text"placeholder="id"id="productid"name="productid"><br><br>

      <label for ="date-purchased">Date Purchased</label>
      <input type ="date"id="datepurchased"class="textbox"name="datepurchased"><br><br>

      <label for ="pricepurchased">Price Purchased</label>
  <input type ="text"id="pricepurchased"class="textbox"name="pricepurchased"><br><br>
</td><td>

<label for ="userid"> user ID</label>
<select name ="userid">    
<?php
include('dbconnect/connection.php');
$sql = "SELECT userid FROM USER where role='admin'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "<option>" . 
$row["userid"].
 "</option><br>";
}
echo "<select>";
} else { echo "0 results"; }
$conn->close();
?>
<br><br>

  <label for ="pair">pair</label>
  <input type ="text" id="eid"class="textbox"name="pair"><br><br>

  <label for ="status"id="status"name="status">status</label><br>
 <input type="text"name="status"class="textbox">

 <label for ="price"id="price"name="price">price</label><br>
 <input type="text"name="price"class="textbox">

</tr></table>
  <input class="button" type="submit"value="add">
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
    header('location:../index.html');
}

?>

</div>
<!--footer system logo ends-->
<!--div kuu imefungwa-->
</div>
</body>
</html>
<!--add product  validation internal java-->
<script>
    const productname = document.getElementById('productname')
    const productid = document.getElementById('productid')
    const datepurchased = document.getElementById('datepurchased')
    const pricepurchased = document.getElementById('pricepurchased')
    const  eid = document.getElementById('eid')
    const form = document.getElementById('login')
    const status = document.getElementById('new')
    const errorElement = document.getElementById('top-div')
form.addEventListener('submit', (e) => {
      let messages = []
      if (productname.value === '' || productname.value == null) {
        messages.push('Enter product name')
      }
    
     else if (productname.value.length <=1) 
     {
        messages.push('product name characters between 2  10')

    }
    
     else if (productname.value.length >= 20)
      {
        messages.push('product name characters should not be much longer')
      }

     else if (productid.value.length >= 20)
      {
        messages.push('product ID characters should not be much longer')
      }

     else if (productid.value === '' || productid.value == null)
      {
        messages.push('product ID is required')
      }

      else if (datepurchased.value === '' || datepurchased.value == null) 
      {
        messages.push('purchased date is required')
      }

      else if(pricepurchased.value===''||pricepurchased.value==null)
   { 
       messages.push('purchasing price can not be null !!')
    }

else if (pricepurchased.value.length >= 10) 
   {
        messages.push('price is much longer')
   }

      else if (pricepurchased.value.length <=2) 
      {
        messages.push('invalid price')
      }

     
  else if(salesprice.value===''||salesprice.value===null)
   { 
       messages.push('enter sales price')
    }

if (messages.length > 0) 
{
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
}
    })

</script>

<!----------------------------------------------END--------------------------->

