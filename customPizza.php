<!DOCTYPE html>
<html>
<title>Compose Pizza</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Times New Roman", Georgia, Serif;}
body, html {height: 100%}
.bgimg-1{
  background-image: url('5.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
  opacity: 80%;
  position: relative;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
}
  
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
 

<!--Base Piza Table-->
<div class="w3-padding w3-display-middle">


<div class="w3-container">
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<div class="w3-panel w3-border w3-light-grey w3-round w3-opacity-min">
<h4 class="w3-text  w3-center">Select Pizza Size and Choose Ingredients.</h4>
<h4 class="w3-text  w3-center">Create your own pizza as you love !</h4>
</div>
</div>

<form method="post">

<table class="w3-table-all w3-centered w3-opacity-min w3-card-4">

    <tr>
	  <th> Select </th>
	  <th>Pizza Size</th>
	   <th>Pizza Price</th> 
    </tr>

</div>

<?php

$host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = postgres";
   $credentials = "user = postgres password=1234";

   $db = pg_connect( "$host $port $dbname $credentials"  );

$sql2 = pg_query($db, "select * from viewbasepizza() ;");

     while ($row = pg_fetch_assoc($sql2)) { 

   echo "<tr><td> <input type='radio' name='radioo' value=' ". $row['bpizza_id']." ' required></td><td>". $row['bpizza_size']."</td><td>"."€ ". $row['bpizza_price']."</td>";
   
	 }
	echo "</table>";
 
?>

<br>

<!--Ingredient Table-->

<table class="w3-table-all w3-centered w3-opacity-min w3-card-4 ">

    <tr>
	  <th>Select Ingredient</th>
	  <th>Ingredient Name</th>
	   <th>Ingredient Region</th>
	   <th>Ingredient Price</th> 
    </tr>

</div>

<?php

   

   $sql = pg_query($db, "select * from ingforcustomer() ;");

     while ($row = pg_fetch_assoc($sql)) { 

   echo "<tr><td> <input type='checkbox' name='checkbbox[]' value='  ". $row['ingredient_id']." ' ></td><td>". $row['ingredient_name']."</td><td>". $row['ingredient_region']."</td><td>"."€ ". $row['ingredient_price']."</td>";
   
	 }
	echo "</table>";
 
?>

<br>

<button class="w3-btn w3-black " name="submit" >Add to Cart</button></p>

</form>

</div>

</div>

<?php
if (isset($_REQUEST["submit"]))
	{
		$cartid = $_REQUEST["checkbbox"];
		$basepizza = $_REQUEST["radioo"];
		
		$sql3 = pg_query ($db, "select  addbasepizzatocart('$basepizza');");
		
		
		foreach($cartid as $id )
		{
		
		$sql1 = pg_query($db, "select  addtocart('$id');");
		
		}
		 
		 echo "<meta http-equiv='refresh' content='0;url=cart.php'>";
		 
	}



?>



</body>




</html>
