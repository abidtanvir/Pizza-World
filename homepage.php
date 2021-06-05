<!DOCTYPE html>
<html>
<title>Pizza World</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
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
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<!-- Top image -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image w3-opacity-min " src="1.jpg" alt="pizza" width="1600" height="800"> <!-- Top image -->
  <div class="w3-display-bottomleft w3-padding-large w3-opacity w3-hover-opacity-off">
    <h1 class="w3-xxlarge">Best Pizza In The Town</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">



<hr>

  <!-- orderyour pizza Section -->
  <div class="w3-row w3-padding-64" id="customizepizza">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="4.jpg" class="w3-round w3-image w3-opacity-min" alt="choose" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Order Your Customized Pizza</h1><br>
      <h5 class="w3-center">Make your own fusion</h5>
      <p class="w3-large"> Choose ingredients from various regions of the world. Select your dough size from our base pizza and add ingredients as you wish. </p>
      <p class="w3-center w3-large w3-text-grey w3-hide-medium">Pay as you choose.</p>
	  <div class="w3-container w3-center">
	  <a href= "custompizza.php" class="w3-center w3-btn w3-ripple w3-dark-grey w3-round-xxlarge"> Customize Pizza</a>
	  </div>
    </div>
  </div>
  
  

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We are open Mon-Sat : 09:00am - 10:00pm and Sun 04:00pm - 10:00pm</p>

	<p>We understand your needs and we will serve the food to satisfy the biggest criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Pizza World, Vettersstrasse 72, Chemnitz, Germany</b></p>
    <p>You can also contact us and order by phone +49987654321. Email: service@pizzaworld.com</p>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>All Rights Reserved: S M Tanvir Abid</p>
</footer>

</body>
</html>
