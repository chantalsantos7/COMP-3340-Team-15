<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoaza Monitoring Page</title>
    <link rel="stylesheet" href="CategoryPage.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src = "AddToCartButton.js" ></script>
    <script src = "navCartImage.js" ></script>
</head>
<body>
<nav class = "menu">
  <?php 
  include("topNavMenu.php");
  ?>
</nav>
    <h2>Features</h2>
    <h3>Database</h3>
    <?php 
    $servername = "localhost";
    $username = "santoso_COMP-3340-Project";
    $password = "projectpass22";
    $dbname = "santoso_COMP-3340-Project";
            
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "<p >Status: down</p>";
    } else {
        echo "<p>Status: online</p>";
    }
    ?>
</body>
</html>