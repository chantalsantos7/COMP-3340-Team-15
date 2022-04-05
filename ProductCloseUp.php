<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="author" content="Ryan Filbey">
	<meta name="description" content="Assignment8">
	<meta name="keywords" content="Shoaza, productpage, product, Shoes, Store, Page">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src = "AddToCartButton.js" ></script>
  <script src = "navCartImage.js" ></script>
  <link rel="stylesheet" href="ProductCloseUp.css" />
    <title>E-Commerce Project</title>
</head>

<body>
  
<nav class = "menu">
  <?php 
  include("topNavMenu.php");
  ?>
</nav>

<?php
include("Authority.php");
    $auth = $authLevel;
?>	
  
  <section class="product-details">
    <?php 
    include_once "connect-db.php";
    //retrieve the item from the DB using the itemID passed via GET in the URL
    if (isset($_GET['itemID'])) {
      $sql_select = "SELECT * FROM `Items` WHERE `itemID` = " .  $_GET['itemID'] . ";" ;
      $result = $conn->query($sql_select);
      $row =[];
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<img src="' . $row["img_path"] .'" class="image-slider" alt="">';
      }
    ?>
    <div class="details">
    <?php 
      if ($result->num_rows > 0) {
        echo '<h2 class="product-brand">' . $row["name"] .'</h2>
          <p class="product-short-des">' . $row["details"] . '</p>
          <span class="product-price">$' . $row["price"] . '</span><br><br>
          <span class="star-rating">5 Stars</span><br>
          <button class="cart-button" onclick = "addToCartButton()">add to cart</button>';
      }
    }
    $conn->close();
    ?>
        
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
<input type="hidden" id="myPhpValue" value="<?php echo $auth ?>" />
<script src = "Search.js" ></script>
</body>
  
</html>
