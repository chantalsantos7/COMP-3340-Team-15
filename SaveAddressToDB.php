<?php
include("connect-db.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$userID = "";
//get the userID from UserDetails
$sql_select = "SELECT `userID` FROM `UserDetails` WHERE `firstName` LIKE \'$fname\' AND `lastName` LIKE \'$lname\';";
$result = $conn->query($sql_select);
if ($result->num_rows > 0) {
    $userID = $result["userID"];
}
?>