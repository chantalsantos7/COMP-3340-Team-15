<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="register.css"/>
</head>
<body>
<?php
  include("Authority.php");
  if($authLevel != 3){
    echo "You don't have access to this page";
  }
  else{
    
  }
    include "connect-db.php";
    if (isset($_REQUEST['name'])) {
        $itemname = stripslashes($_REQUEST['name']);
        $itemname = mysqli_real_escape_string($conn, $itemname);
        $category = stripslashes($_REQUEST['category']);
        $category = mysqli_real_escape_string($conn, $category);
        $details = stripslashes($_REQUEST['details']);
        $details = mysqli_real_escape_string($conn, $details);
        $price = stripslashes($_REQUEST['price']);
        $price = mysqli_real_escape_string($conn, $price);
        $brand = stripslashes($_REQUEST['brand']);
        $brand = mysqli_real_escape_string($conn, $brand);
        $query    = "INSERT into Items (name, details, price, brand, category)
                     VALUES ('$itemname', '$details', '$price', '$brand', '$category')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Product Added</h3><br/>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Unsuccessful, an error occurred.</h3><br/>
                  </div>";
        }
    } 
?>
    <form class="form" action="" method="post">
        <h1 class="login-header">Admin Add Product</h1>
        <input type="text" class="login-input" name="name" placeholder="Item Name" required />
        <input type="text" class="login-input" name="category" placeholder="Item Category" required>
        <input type="text" class="login-input" name="details" placeholder="Item Details" required>
        <input type="text" class="login-input" name="price" placeholder="Item Price" required>
        <input type="text" class="login-input" name="brand" placeholder="Item Brand" required>
        <input type="submit" name="submit" value="Add Product" class="login-button">
        <p class="link">Head back to <a href="UserAccount.php">Account</a></p>
      	<p class="link"><a href="HomePage.php">Go To Home Page</a></p>
    </form>
</body>
</html>