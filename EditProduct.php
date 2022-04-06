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
        $column = stripslashes($_REQUEST['column']);  
        $column = mysqli_real_escape_string($conn, $column);
        $val = stripslashes($_REQUEST['alterval']);  
        $val = mysqli_real_escape_string($conn, $val);
 
        $query    = "UPDATE Items SET $column = '$val' WHERE name='$itemname'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
         if ($result) {
            echo "<div class='form'>
                  <h3>Product Modified</h3><br/>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Unsuccessful, make sure item name and attribute are spelled correctly.</h3><br/>
                  </div>";
        }
    } 
?>
    <form class="form" method="post" name="login">
        <h1 class="login-header">Edit Existing Product</h1>
        <input type="text" class="login-input" name="name" placeholder="Item Name" autofocus="true" required/>
        <input type="text" class="login-input" name="column" placeholder="Attribute to be altered" required/>
        <input type="text" class="login-input" name="alterval" placeholder="New Value" required/>
        <input type="submit" value="Edit Product" name="submit" class="login-button"/>
        <p class="link">Head back to <a href="UserAccount.php">Account</a></p>
      	<p class="link"><a href="HomePage.php">Go To Home Page</a></p>
  </form>
</body>
</html>