<!DOCTYPE html>
<html>
<title>Manage Orders</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Times New Roman", Georgia, Serif;}
body, html {height: 100%}
.bgimg-1{
  background-image: url('11.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
  opacity: 80%;
  position: relative;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
}



.button {
  padding: 10px 15px;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #000;
  background-color: #F8F8FF;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
}

.button:hover {background-color:#B0E0E6 }

.button:active {
  background-color: #D3D3D3;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
  
  .parallax {
  /* The image used */
  background-image: url("img_parallax.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  

</style>
<body>


 


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="homepage.php" class="w3-bar-item w3-button">PIZZA WORLD</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="customPizza.php" class="w3-bar-item w3-button">Order Your Pizza</a>
	  <a href="bakerLogin.php" class="w3-bar-item w3-button">Baker</a>
      <a href="homepage.php#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>
<div class="bgimg-1 ">  
<div class="parallax"></div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 <button class="button" onclick= "location.href='manageSuppliers.php'"><span>Manage Suppliers</button>
<br>
<br>
<br>
<br>
<br>
<br>
<button class="button" onclick= "location.href='manageIngredients.php'"><span>Manage Ingredients</button>
<br>
<br>
<br>
<br>
<br>
<br>
<button class="button" onclick= "location.href='homepage.php'"><span>Logout</button>

<!--Table-->

<div class="w3-padding w3-display-middle">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>

<!--delivered Table-->

<div class="w3-container">

<div class="w3-panel-small w3-border w3-light-grey  w3-opacity-min">
<h2 class="w3-text-green w3-center">Delivered Orders</h2>
</div>

<table class="w3-table-all w3-centered w3-opacity-min w3-card-4">


    <tr>
      <th>Order ID</th>
	  <th>Items</th>
	  <th>Total Price</th>
	  <th>Action</th>
      
    </tr>

</div>

<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = postgres";
   $credentials = "user = postgres password=1234";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   
   

   $sql1 = pg_query($db, "select * from  viewdeliveredorders();");

     while ($row = pg_fetch_assoc($sql1)) { 

   echo "<tr><td>". $row['dlvrorderid']."</td><td>". $row['dlvrorderitems']."</td><td>"."??? ". $row['dlvrorderprice']."</td><td>    
    
	  <a href='deleteOrder.php?delPendItem=$row[dlvrorderid]' onclick='return chkdlt()'>Remove</a>";
    
   
	 }
	echo "</table>";


?>

<BR>

<BR>

<!--pending Table-->
<div class="w3-container">

<div class="w3-panel-small w3-border w3-light-grey  w3-opacity-min">
<h2 class="w3-text-red   w3-center">Pending Orders</h2>
</div>


<table class="w3-table-all w3-centered w3-opacity-min w3-card-4 ">

    <tr>
      <th>Order ID</th>
	  <th>Items</th>
	  <th>Total Price</th>
	  <th>Remove</th>
	  <th>Action</th>
      
    </tr>

</div>

<?php

   $sql = pg_query($db, "select * from viewpendingorders();");

     while ($row = pg_fetch_assoc($sql)) { 

   echo "<tr><td>". $row['pendorderid']."</td><td>". $row['pendorderitems']."</td><td>"."??? ". $row['pendorderprice']."</td><td>    
    
	  <a href='deleteOrder.php?delPendItem=$row[pendorderid]' onclick='return chkdlt()'>Remove</a> <td>
	  
	  <a href='deliverPizza.php?editorderId=$row[pendorderid]'>Deliver Now</a>"; 
    
   
	 }
	echo "</table>";
	
?>
	
	<script>
	
function chkdlt()
{
	return confirm('Are You Sure to Delete the Order?');
}

</script>
	
	
	
</div>
</div>	
	



</div>
</body>
</html>