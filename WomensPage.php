<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="author" content="Ryan Filbey">
	<meta name="description" content="Assignment8">
  <link rel="stylesheet" href="CategoryPage.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src = "AddToCartButton.js" ></script>
  <script src = "navCartImage.js" ></script>
    <title>E-Commerce Project</title>
</head>

<body>
  
<nav class = "menu">
<div class="topnav">
    <img src="images/shoazaLogo.png" class="logo" alt="">
    <div class="nav-items">
      <div class="search">
            <input type="text" id = "search" class="search-field" placeholder="search brand, product">
            <button class="search-button" id = "searchbtn" onclick = "location.href = 'Search.html'" >search</button>
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
?>  
 
<section class="product" id = "allWomens">
    <h2 class="product-category">All Womens Shoes</h2>

<div class="product-row">

<?php 
        include_once "connect-db.php";
        
        $sql_select = "SELECT * FROM `Items` WHERE `category` = \"Women\'s\";";
        $result = $conn->query($sql_select);
        //echo $conn->query($sql_select);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo '<div class="product-display">
                <div class="product-image">
                    <span class="star-rating">5 Stars</span>
                    <a href="ProductCloseUp.php?itemID=' . $row["itemID"] . '"><img src="' . $row["img_path"] .'" class="product-pic" alt=""></a>
                    <button class="display-button" onclick = "addToCartButton()">add to cart</button>
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
