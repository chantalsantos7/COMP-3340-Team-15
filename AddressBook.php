<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Book</title>
    <link rel="stylesheet" href="CategoryPage.css" />
    <link rel="stylesheet" href="AddressBook.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src = "AddToCartButton.js" ></script>
    <script src = "navCartImage.js" ></script>
</head>
<body>
  <?php 
  include("topNavMenu.php");
  ?>
    <h2 class="headings" style="color: orange;">Add Shipping Address</h2>
    <div id="address-form">
      <form action="SaveAddressToDB.php" method="post">
        <div class="form-row">
          <label for="fname" class="form-label">First Name: </label> 
        <input type="text" name="fname" id="fname" placeholder="First Name">
        </div>
        <div class="form-row">
          <label for="lname" class="form-label">Last Name: </label> 
          <input type="text" name="lname" id="lname" placeholder="Last Name">
        </div>
        <div class="form-row">
          <label for="address" class="form-label">Address:</label> 
          <textarea name="address" id="address" cols="30" rows="10"></textarea>
        </div>
        <div class="form-row">
          <label for="zipcode" class="form-label">Zipcode: </label>
          <input type="text" name="zipcode" id="zipcode">
        </div>
        <div class="form-row">
          <label for="city" class="form-label">City: </label>
          <input type="text" name="city" id="city">
        </div>
        <div class="form-row">
           <label for="state" class="form-label">State: </label>
          <input type="text" name="state" id="state">
        </div>
          <input type="submit" value="Save Address">
          <input type="button" value="Clear Address">
    </form>
    </div>
    
</body>
</html>