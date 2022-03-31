<?php
$servername = "localhost";
$username = "santoso_COMP-3340-Project";
$password = "projectpass22";
$dbname = "santoso_COMP-3340-Project";
        
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>