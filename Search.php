<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="author" content="Ryan Filbey">
	<meta name="description" content="Assignment8">
	<meta name="keywords" content="Shoaza, Shoes, Mens, Womens, Kids, Store, Top, Rated, search, Page">
  <link rel="stylesheet" href="SearchPage.css" />
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
</nav>
	
<?php
include("Authority.php");
    $auth = $authLevel;
?>  
  
<section class="product" id = "ProductSearch">
    <h2 class="product-category">Search results</h2>

<div class="product-row">
<?php
include("connect-db.php");
$search = $_GET['search'];
$sql_select = "SELECT * FROM `Items` WHERE `brand` = \"$search\";";
        $result = $conn->query($sql_select);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo '<div class="product-display">
                <div class="product-image">
                    <span class="star-rating">5 Stars</span>
                    <a href="ProductCloseUp.php?itemID=' . $row["itemID"] . '"><img src="' . $row["img_path"] .'" class="product-pic" alt=""></a>
                    <button class="display-button" onclick = "addToCartButton()">add to cart</button>
                    <input type="hidden" name="itemID" value=' . $row["itemID"] . '>
                </div>
                <div class="product-info">
                <a href="ProductCloseUp.php?itemID=' . $row["itemID"] . '"><h2 class="product-brand">' . $row["brand"] . '</h2></a>
                    <p class= "product-name">' . $row["name"] .'</p>
                    <span class="price">$'. $row["price"] .'</span>
                </div>
            </div>';
            }
        }
        $conn->close();
?> 
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
<script src = "Search.js" ></script>
<input type="hidden" id="myPhpValue" value="<?php echo $auth ?>" />
</body>
  
</html>
