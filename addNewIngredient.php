<!DOCTYPE html>
<html>
<title>Add New Ingredient</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Times New Roman", Georgia, Serif;}
body, html {height: 100%}
.bgimg {
  background-image: url('11.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
  opacity: 80%;
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

</style>
<body>

<div class="bgimg w3-display-container">  


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


<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = postgres";
   $credentials = "user = postgres password=1234";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   
   
   
   if (isset($_REQUEST["submit"]))
	{
		$iname= $_REQUEST["ingname"];
		$iprice= $_REQUEST ["ingprice"];
	    $iregion = $_REQUEST["ingregion"];
		$istock = $_REQUEST["ingstock"];
		$isupplier = $_REQUEST["ingsupplier"];
		$istatus = $_REQUEST["ingstatus"];
		
		
		 $sql = pg_query($db, "select  addingredient('$iname','$iprice','$iregion','$istock', '$isupplier', '$istatus');"); 
		 
		 echo "<meta http-equiv='refresh' content='0;url=manageIngredients.php'>";
		 
	}

?>



<div class="w3-padding w3-display-middle">

<form class="w3-container w3-card-4 w3-opacity-min w3-light-grey" method="post">
  <h2 class="w3-text-black">Add New Ingredient</h2>
       
  <label class="w3-text-black"><b>Ingredient Name</b></label>
  <input class="w3-input w3-border" name="ingname" type="text" required></p>
  <p> 
<label class="w3-text-black"><b>Ingredient Price</b></label>
  <input class="w3-input w3-border" name="ingprice" type="text" required></p>
  
   <p> 
<label class="w3-text-black"><b>Ingredient Region</b></label>
  <input class="w3-input w3-border" name="ingregion" type="text" required></p>
  <p>
  
	 
  <p> 
<label class="w3-text-black"><b>Ingredient Stock (Unit) </b></label>
  <input class="w3-input w3-border" name="ingstock" type="text" required></p>
  
  
<p>  
  <label class="w3-text-black"><b>Select Supplier </b></label>
  <select class="w3-select" name="ingsupplier">
    <option value="" disabled selected>Choose Supplier</option>
  
  <?php
        $sql2 = pg_query($db, "select * from activesupplier();");

     while ($row = pg_fetch_assoc($sql2) ) 
	 
	 { 
	  
	 echo "<option value= $row[supid]> $row[supid], $row[supname] </option>";
	 
	 
	 }
	 ?>
	 </select>

<p> 
  <select class="w3-select" name="ingstatus">
    <option value="" disabled selected>Choose Ingredient Status</option>
    <option value=true>Visible</option> 
    <option value=false>Invisible</option>
    </select>
    <p>
	
	
  <button class="w3-btn w3-black" name="submit">Add Ingredient</button></p>

</form>

<br>
 <button class="w3-btn w3-black" onclick= "location.href='manageIngredients.php'">Cancle</button></p>


</div>

</body>

