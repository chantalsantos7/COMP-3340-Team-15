<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Ryan Filbey">
	<meta name="description" content="Assignment8">
  <link rel="stylesheet" href="WomensPage.css" />
    <title>E-Commerce Project</title>
</head>

<body>
        <?php 
        include_once "connect-db.php";
        
        $sql_select = "SELECT * FROM Items";
        echo $sql_select;
        $result = $conn->query($sql_select);
        //echo $conn->query($sql_select);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-card'>
                <div class='product-image'>
                    <span class='discount-tag'>5 Stars</span>
                    <img src='img/card1.png' class='product-thumb' alt=''>
                    <button class='card-btn'>add to cart</button>
                </div>
                <div class='product-info'>
                    <h2 class='product-brand'>" . $row["brand"] . "</h2>
                    <p class='product-name'>" . $row["name"] ."</p>
                    <span class='price'>$" . $row["price"] ."</span><span class='actual-price'>$40</span>
                </div>
            </div>";
                
                //select a product-container class item, fill in the details - iterate through the array of them
                //echo "id: " . $row["itemID"]. " - item name: " . $row["name"]. " - details: " . $row["details"]. " - price: " . $row["price"] . " - brand: " . $row["brand"] . " - category: " . $row["category"];
            }
        } else {
            echo "no results";
        }
        $conn->close();
        
        ?>

    <nav class="navbar">
    <div class="nav">
        <img src="images/shoazaLogo.png" class="brand-logo" alt="">
        <div class="nav-items">
            <div class="search">
                <input type="text" class="search-box" placeholder="search brand, product">
                <button class="search-btn">search</button>
            </div>
            <a href="#"><img src="images/user.png" alt=""></a>
            <a href="#"><img src="images/cart.png" alt=""></a>
        </div>
    </div>
    
    <ul class="links-container">
        <li class="link-item"><a href="HomePage.html" class="link">home</a></li>
        <li class="link-item"><a href="MensPage.html" class="link">mens</a></li>
        <li class="link-item"><a href="WomensPage.html" class="link">womens</a></li>
        <li class="link-item"><a href="KidsPage.html" class="link">kids</a></li>
        <li class="link-item"><a href="Categories.html" class="link">categories</a></li>
        <li class="link-item"><a href="HomePage.html#topRated" class="link">top rated</a></li>
    </ul>
    </nav>
    
    <section class="product" id="allWomens">
        <h2 class="product-category">All Womens Shoes</h2>

    <div class="product-container">
        <?php
            
        ?>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">5 Stars</span>
                <img src="img/card1.png" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">brand</h2>
                <p class="product-short-des">a short line about the shoe</p>
                <span class="price">$20</span><span class="actual-price">$40</span>
            </div>
        </div>
    </div>
    </section>
    
    <footer>
        <div class="footer-content">
            <img src="images/shoazaLogo.png" class="logo" alt="">
            <div class="footer-ul-container">
                <ul class="category">
                    <li class="category-title">men</li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                </ul>
                <ul class="category">
                    <li class="category-title">women</li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                </ul>
            <ul class="category">
                    <li class="category-title">kids</li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                    <li><a href="#" class="footer-link">brand</a></li>
                </ul>
            </div>
        </div>
        
        <p class="footer-title">about company</p>
        <p class="info">Info</p>
        <p class="info">support emails - help@shoaza.com, customersupport@shoaza.com</p>
        <p class="info">telephone</p>
        <div class="footer-social-container">
            <div>
                <a href="#" class="social-link">terms & services</a>
                <a href="#" class="social-link">privacy page</a>
            </div>
        </div>
        <p class="footer-credit">Shoaza online store</p>
    </footer>

</body>
  
</html>