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
    if (isset($_POST['name'])) {
        $itemname = stripslashes($_REQUEST['name']);  
        $itemname = mysqli_real_escape_string($conn, $itemname);
 
        $query    = "DELETE FROM Items WHERE name='$itemname'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
         if ($result) {
            echo "<div class='form'>
                  <h3>Product Removed</h3><br/>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Unsuccessful, make sure item name is spelled correctly</h3><br/>
                  </div>";
        }
    } 
?>
    <form class="form" method="post" name="login">
        <h1 class="login-header">Remove Product</h1>
        <input type="text" class="login-input" name="name" placeholder="Item Name" autofocus="true" required/>
        <input type="submit" value="Remove Product" name="submit" class="login-button"/>
        <p class="link">Head back to <a href="UserAccount.php">Account</a></p>
      	<p class="link"><a href="HomePage.php">Go To Home Page</a></p>
  </form>
</body>
</html>