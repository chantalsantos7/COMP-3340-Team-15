<!DOCTYPE html>
<html lang="en">
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
  
<nav class = "menu" id = "menu">
  <?php 
  include("topNavMenu.php");
  ?>
</nav>
  
  <?php
include("Authority.php");
  $auth = $authLevel;
  
  if($authLevel == 1){ //appears when the user is not logged in, prompting them to login or create an account
  echo '<section class="product" id = "Account-nav">  
   <h1 class ="product-category">My Account</h1> 
  <a href = "LoginPage.php"><h2 class ="product-category">Login To My Account</h2></a> 
   <a href = "register.php"><h2 class ="product-category">Register a New Account</h2></a> 
   </section>';
  }
  else if($authLevel == 2){ //appears for logged in customers
    echo '<section class="product" id = "Account-nav"> 
   <h1 class ="product-category">My Account</h1>
   <h1 class ="product-category" style = "color:orange"><b>Username: </b></h1>';
   echo "<h1 class ='product-category'>" . $_SESSION["username"] . "</h1>";
   echo '<h1 class ="product-category" style = "color:orange"><b>Email: </b></h1>';
   echo "<h1 class ='product-category'>" . $_SESSION["email"] ."</h1>";
   echo '<a href = "Cart.php" style = "color:orange"><h2 class ="product-category">My Cart</h2></a>
   <!--<a href = "AddressBook.php" style = "color:orange"><h2 class ="product-category">Add Shipping Address</h2></a>-->
   <a href = "checkout.php" style = "color:orange"><h2 class ="product-category">Checkout</h2></a>
   <a href = "logout.php" style = "color:orange"><h2 class ="product-category">Logout</h2></a>
   <a href = "UserHelpPage.html" style = "color:orange"><h2 class ="product-category">Help Page and FAQs</h2></a>
   </section>';
  }
  
  else if($authLevel == 3){ //admin level account page - has links for the admin to add a product, and monitor whether the site's features are up
    echo '<section class="product" id = "Account-nav"> 
   <h1 class ="product-category">Admin Level Account</h1>
   <h1 class ="product-category" style = "color:orange"><b>Username: </b></h1>';
   echo "<h1 class ='product-category'>" . $_SESSION["username"] . "</h1>";
   echo '<h1 class ="product-category" style = "color:orange"><b>Email: </b></h1>';
   echo "<h1 class ='product-category'>" . $_SESSION["email"] ."</h1>";
   echo '<a href = "AddProduct.php" style = "color:orange"><h2 class ="product-category">Add/Edit Product</h2></a>
   <a href = "RemoveProduct.php" style = "color:orange"><h2 class ="product-category">Remove Product</h2></a>
   <a href = "EditProduct.php" style = "color:orange"><h2 class ="product-category">Edit Product</h2></a>
   <a href = "SetLayout.php" style = "color:orange"><h2 class ="product-category">Set Layout Theme</h2></a>
   <a href = "EmailList.php" style = "color:orange"><h2 class ="product-category">List of registered usernames and emails</h2></a>
   <a href = "ActiveOrders.php" style = "color:orange"><h2 class ="product-category">View all orders</h2></a>
   <a href = "Cart.php" style = "color:orange"><h2 class ="product-category">Cart</h2></a>
   <!-- link to the monitoring page, to check whether the backend site features are down -->
   <a href="monitoringpage.php" style = "color:orange"><h2 class="product-category">Monitor site features</h2></a>
   <a href = "AdminHelpPage.html" style = "color:orange"><h2 class ="product-category">Admin Help Page</h2></a>
   <a href = "logout.php" style = "color:orange"><h2 class ="product-category">Logout</h2></a>
   </section>'; 
  }
?>
  <footer id = "menu">
    <div class="footer-display">
    <img src="images/shoazaLogo.png" class="logo" alt="Shoaza logo">
        <div class="footer-links">
            <ul class="category">
                <li class="category-name">men</li>

            </ul>
            <ul class="category">
                <li class="category-name">women</li>

          	</ul>
          <ul class="category">
                <li class="category-name">kids</li>

            </ul>
        </div>
    </div>
    
    <p class="footer-heading">about company</p>
    <p class="info">Info</p>
    <p class="info">support email: customersupport@shoaza.com</p>
    <p class="info">phone: </p>
    <div class="footer-other-links">
        <div>
            <a href="sitemap.html" class="sitemap-link">sitemap</a>
        </div>
    </div>
    <p class="footer-ending">Shoaza online store</p>
</footer>
<input type="hidden" id="myPhpValue" value="<?php echo $auth ?>" />
<script src = "Search.js" ></script>
<script src = "RetrieveLayoutTheme.js" ></script>
</body>
</html>
