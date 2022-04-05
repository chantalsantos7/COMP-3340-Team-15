<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoaza Monitoring Page</title>
</head>
<body>
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
        echo "<p>Status: down</p>";
    } else {
        echo "<p>Status: up</p>";
    }
    ?>
</body>
</html>