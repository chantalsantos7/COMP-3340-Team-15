<?php
$servername = "localhost";
$username = "santoso_COMP-3340-Project";
$password = "projectpass22";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully.";

?>