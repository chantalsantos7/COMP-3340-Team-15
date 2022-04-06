<?php 
echo '
<div class="topnav">
<img src="images/shoazaLogo.png" class="logo" alt="">
<div class="nav-items">
  <div class="search">
        <form method="get" action="Search.php" class="search-form">
        <input type="text" id="search" name="search" class="search-field" placeholder="search brand">
        <input class="search-button" id = "searchbtn" type="submit" value="Search">
        </form>
    </div>
    <a href="UserAccount.php"><img src="images/user.png" alt=""></a>
    <a href="#" onclick = "navCartImage()" ><img src="images/cart.png" alt=""></a>
</div>
</div>
  
  <ul class="links-row">
    <li class="link-name"><a href="HomePage.php" class="link">home</a></li>
    <li class="link-name"><a href="MensPage.php" class="link">mens</a></li>
    <li class="link-name"><a href="WomensPage.php" class="link">womens</a></li>
    <li class="link-name"><a href="KidsPage.php" class="link">kids</a></li>
    <li class="link-name"><a href="HomePage.php#topRated" class="link">top rated</a></li>
</ul>';
?>