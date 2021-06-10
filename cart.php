<!DOCTYPE html>
<html>
<title>Cart</title>
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
<!--Cart Table-->
<div class="w3-padding w3-display-middle">

<div class="w3-container">

<div class="w3-panel w3-border w3-light-grey w3-round w3-opacity-min">
<h5 class="w3-text  w3-center">You Can Remove Ingredients Before Confirm</h5>
</div>
<br>



<table class="w3-table-all w3-centered w3-opacity-min w3-card-4 w3-large">

    <tr>
	  <th>Name</th>
	  <th>Price</th>
	  <th> Action</th>
    </tr>

</div>

<?php

$host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = postgres";
   $credentials = "user = postgres password=1234";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   
   
   


   $sql2 = pg_query($db, "select * from viewcart() ;");
   
   
   

     while ($row = pg_fetch_assoc($sql2)) 
	 { 

   echo "<tr><td>". $row['cart_ingredient_name']."</td><td>"."€ ". $row['cart_ingredient_price']."</td><td>
   <a href='deleteFromCart.php?delCartIngId=$row[cart_id]'onclick='return chkdlt()'>Remove</a>" ;
   
	 }
	 
	echo "</table>";

  
 
?>
<br>
<?php
$sum = pg_query($db, "select cartsum();");
  $row = pg_fetch_assoc($sum);
   
   ?>
   <div class="w3-panel w3-border w3-light-grey w3-round w3-opacity-min">
<h5 class="w3-text  w3-center"><?php echo "Total Price is : € "; echo $row["cartsum"]; ?></h5>
</div>
   


<br>

<form action="confirmOrder.php" method= "post">
<button class="w3-btn w3-black" name="submit" >Confirm Order</button></p>
</form>

<form action="orderAgain.php" method= "post">
<button class="w3-btn w3-black" name="submit" >Order Again</button></p>
</form>






</div>





</div>


<script>
function chkdlt()
{
	return confirm('Are You Sure to Delete the Record?');
}

</script>


</body>
</html>