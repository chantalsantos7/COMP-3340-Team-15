<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="author" content="Ryan Filbey">
	<meta name="description" content="Assignment8">
	<meta name="keywords" content="Shoaza, Menspage, Shoes, Store, Top, Rated, mens, Page">
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
?>  
  
 
<section class="product" id = "allMens">
    <h2 class="product-category">All Mens Shoes</h2>

<div class="product-row">
<?php 
        include_once "connect-db.php";
        
        $sql_select = "SELECT * FROM `Items` WHERE `category` = \"Men\'s\";";
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

        
 </div>
</section>
  
  <footer id = "foot">
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
<input type="hidden" id="myPhpValue" value="<?php echo $auth; ?>" />
<script src = "Search.js" ></script>
<script src = "RetrieveLayoutTheme.js" ></script>
</body>

</html>
