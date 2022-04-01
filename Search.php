<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Ryan Filbey">
	<meta name="description" content="Assignment8">
	<meta name="keywords" content="Shoaza, searchPage, Mens, Womens, Kids, Shoes, Store, Top, Rated, search, Page">
  <link rel="stylesheet" href="SearchPage.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src = "AddToCartButton.js" ></script>
  <script src = "navCartImage.js" ></script>
    <title>E-Commerce Project</title>
</head>

<body>
  
<nav class = "menu">
<div class="topnav">
    <img src="shoazaLogo.png" class="logo" alt="">
    <div class="nav-items">
      <div class="search">
            <input type="text" id = "search" class="search-field" placeholder="search brand, product">
            <button class="search-button" id = "searchbtn" onclick = "location.href = 'Search.php'" >search</button>
        </div>
        <a href="UserAccount.php"><img src="user.png" alt=""></a>
        <a href="#" onclick = "navCartImage()" ><img src="cart.png" alt=""></a>
    </div>
</div>
  
  <ul class="links-row">
    <li class="link-name"><a href="HomePage.php" class="link">home</a></li>
    <li class="link-name"><a href="MensPage.php" class="link">mens</a></li>
    <li class="link-name"><a href="WomensPage.php" class="link">womens</a></li>
    <li class="link-name"><a href="KidsPage.php" class="link">kids</a></li>
    <li class="link-name"><a href="HomePage.php#topRated" class="link">top rated</a></li>
</ul>
</nav>
  
  
 
<section class="product" id = "ProductSearch">
    <h2 class="product-category">Search results</h2>

<div class="product-row">
    <div class="product-display">
        <div class="product-image">
            <span class="star-rating">5 Stars</span>
            <a href="ProductCloseUp.html"><img src="img/card1.png" class="product-pic" alt=""></a>
            <button class="display-button">add to cart</button>
        </div>
        <div class="product-info">
            <a href="ProductCloseUp.html"><h2 class="product-name">brand</h2></a>
            <p class= "product-description" >a short line about the shoe</p>
            <span class="price">$20</span>
        </div>
    </div>
 </div>
</section>
  
  <footer>
    <div class="footer-display">
        <img src="shoazaLogo.png" class="logo" alt="">
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
<script src = "Search.js" ></script>
<input type="hidden" id="myPhpValue" value="<?php echo $auth ?>" />
</body>
  
</html>
