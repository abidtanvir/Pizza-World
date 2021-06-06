<!DOCTYPE html>
<html>
<title> Log in as Baker </title>
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





<div class="w3-padding w3-display-middle">


<form action="" class="w3-container w3-card-4 w3-light-grey w3-text-dark-gray w3-margin" method="post">
<h2 class="w3-center">Login as Baker</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-hover-gray" name="username" type="text" placeholder="Username" required>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border w3-hover-gray" name="password" type="password" placeholder="Password" required>
    </div>
</div>

<button class="w3-button w3-block w3-section w3-dark-gray w3-ripple w3-padding" name="submit">Submit</button>

</form>




</div>

<?php


	
if (isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if ($user=="baker" && $pass=="baker")
	{
		header('location: bakerProfile.php');
	}
    else
     {
	 header("refresh:2; url=homepage.php");
	 
	 } 
	
}
?>

</body>
</html>
