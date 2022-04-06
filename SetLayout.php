<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Ryan Filbey">
	<meta name="description" content="Shoaza online shoe store Home Page">
  	<meta charset="UTF-8">
  	<meta name="keywords" content="Shoaza, HomePage, Mens, Womens, Kids, Shoes, Store, Top, Rated, Home, Page">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <link rel="stylesheet" href="HomePage.css" />
  <script src = "AddToCartButton.js" ></script>
  <script src = "navCartImage.js" ></script>
    <title>E-Commerce Project</title>
</head>

<body>
  
<nav class = "menu" id = "menu">
<div class="topnav">
  <?php
  include("topNavMenu.php")
  ?> 
    </div>
</div>
  
  <ul class="links-row">
    <li class="link-name"><a href="HomePage.php" class="link">home</a></li>
    <li class="link-name"><a href="MensPage.php" class="link">mens</a></li>
    <li class="link-name"><a href="WomensPage.php" class="link">womens</a></li>
    <li class="link-name"><a href="KidsPage.php" class="link">kids</a></li>
    <li class="link-name"><a href="#topRated" class="link">top rated</a></li>
</ul>
</nav>
  
  
 <?php
include("Authority.php");
    if($authLevel != 3){
      echo '<section class="product" id = "topRated"><h1 class="product-category">You do not have access to this page. Login as an Admin to gain access</h1></section>';
    }
      else{
        echo '<section class="product" id = "topRated"><h1 class="product-category">Select The Website Theme Below</h1>
        <form>
        <div class="product-row">
    	<label for="color">Choose Theme Color:</label>
  		<select id="color">
        	<option value="#CCE5FF" selected>Blue</option>
        	<option value="#e8f7da">Green</option>
        	<option value="#e8b7b0">Red</option>
        </select>
        </div>
  		</form>
        </section>';
      }
?> 
  
  
  
  <footer id = "foot">
    <div class="footer-display">
    <img src="images/shoazaLogo.png" class="logo" alt="Shoaza logo">
        <div class="footer-links">
            <ul class="category">
                <li class="category-name">men</li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
            </ul>
            <ul class="category">
                <li class="category-name">women</li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
          	</ul>
          <ul class="category">
                <li class="category-name">kids</li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
                <li><a href="#" class="footer-link">brand</a></li>
            </ul>
        </div>
    </div>
    
    <p class="footer-heading">about company</p>
    <p class="info">Info</p>
    <p class="info">support email: customersupport@shoaza.com</p>
    <p class="info">phone: </p>
    <div class="footer-other-links">
        <div>
            <a href="#" class="sitemap-link">sitemap</a>
        </div>
    </div>
    <p class="footer-ending">Shoaza online store</p>
</footer>
  
 <input type="hidden" id="myPhpValue" value="<?php echo $auth ?>" />
  <script src = "RetrieveLayoutTheme.js"></script>
  <script src = "SetLayout.js"></script>
  <script src = "Search.js" ></script>

</body>
  
</html>
