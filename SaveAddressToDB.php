<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Book</title>
</head>
<body>
<?php
include("connect-db.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$city = $_POST['city'];
$state = $_POST['state'];
$userID = "";
//get the userID from UserDetails
$sql_select = "SELECT `userID` FROM `UserDetails` WHERE `firstName` LIKE '$fname' AND `lastName` LIKE '$lname'";
echo $sql_select;
$result = $conn->query($sql_select);
if ($result->num_rows > 0) {
    $userID = $result["userID"];
} else { echo "no results found";};

$sql = "INSERT INTO `ShippingDetails`(`userID`, `firstName`, `lastName`, `address`, `city`, `state`, `zipcode`) VALUES ($userID,'$fname','$lname','$address','$city','$state','$zipcode');";
if ($conn->query($sql)) {
    echo "<p> New shipping address added!";
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}
$conn->close;
?>

<div class="address-details">
    <?php
    echo "<p>$fname $lname \n $address \n $zipcode \n $city, $state</p>";
    ?> 
</div>

</body>
</html>

