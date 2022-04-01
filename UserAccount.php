<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Ryan Filbey">
  	<meta name="description" content="Shoaza online shoe store Kids Page">
  	<meta charset="UTF-8">
  	<meta name="keywords" content="Shoaza, Kidspage, Shoes, Store, Top, Rated, kids, Page">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CategoryPage.css" />
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
  
  <?php
include("Authority.php");
  $auth = $authLevel;
  
  if($authLevel == 1){
  echo '<section class="product" id = "Account-nav">  
   <h1 class ="product-category">My Account</h1> 
  <a href = "LoginPage.php"><h2 class ="product-category">Login To My Account</h2></a> 
   <a href = "register.php"><h2 class ="product-category">Register a New Account</h2></a> 
   </section>';
  }
  else if($authLevel == 2){
    echo '<section class="product" id = "Account-nav"> 
   <h1 class ="product-category">My Account</h1>
   <h1 class ="product-category" style = "color:orange"><b>Username: </b></h1>';
   echo "<h1 class ='product-category'>" . $_SESSION["username"] . "</h1>";
   echo '<h1 class ="product-category" style = "color:orange"><b>Email: </b></h1>';
   echo "<h1 class ='product-category'>" . $_SESSION["email"] ."</h1>";
   echo '<a href = "Cart.php" style = "color:orange"><h2 class ="product-category">My Cart</h2></a>
   <a href = "checkout.php" style = "color:orange"><h2 class ="product-category">Checkout</h2></a>
   <a href = "logout.php" style = "color:orange"><h2 class ="product-category">Logout</h2></a>
   </section>';
  }
  
  else if($authLevel == 3){
    echo '<section class="product" id = "Account-nav"> 
   <h1 class ="product-category">Admin Level Account</h1>
   <h1 class ="product-category" style = "color:orange"><b>Username: </b></h1>';
   echo "<h1 class ='product-category'>" . $_SESSION["username"] . "</h1>";
   echo '<h1 class ="product-category" style = "color:orange"><b>Email: </b></h1>';
   echo "<h1 class ='product-category'>" . $_SESSION["email"] ."</h1>";
   echo '<a href = "AdminAddProduct.php" style = "color:orange"><h2 class ="product-category">Add/Edit Product</h2></a>
   <a href = "Active orders.php" style = "color:orange"><h2 class ="product-category">View all orders</h2></a>
   <a href = "Cart.php" style = "color:orange"><h2 class ="product-category">Cart</h2></a>
   <a href = "logout.php" style = "color:orange"><h2 class ="product-category">Logout</h2></a>
   </section>';
  }
?>
  
  
  
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
<input type="hidden" id="myPhpValue" value="<?php echo $auth ?>" />
<script src = "Search.js" ></script>
</body>
</html>