<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="register.css"/>
</head>
<body>
<?php
    require('connect-db.php');
    if (isset($_REQUEST['username'])) {
        $fname = stripslashes($_REQUEST['fname']);
        $fname = mysqli_real_escape_string($conn, $fname);
        $lname = stripslashes($_REQUEST['lname']);
        $lname = mysqli_real_escape_string($conn, $lname);
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query    = "INSERT into REG_USERS (username, password, email)
                     VALUES ('$username', '$password', '$email')";
        $sql_query = "INSERT INTO `UserDetails`(`firstName`, `lastName`, `email`, `password`, `username`) VALUES ('$fname','$lname','$email','$password', '$username')";             
        $result   = mysqli_query($conn, $sql_query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Registration successful</h3><br/>
                  <p class='link'>Click here to <a href='LoginPage.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  </div>";
        }
    } 
?>
    <form class="form" action="register.php" method="post">
        <h1 class="login-header">Registration</h1>
        <input type="text" class="login-input" name="fname" id="fname" placeholder="First Name" required>
        <input type="text" class="login-input" name="lname" id="lname" placeholder="Last Name" required>
        <input type="text" class="login-input" name="username" placeholder="Username" required>
        <input type="text" class="login-input" name="email" placeholder="Email Address" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already a user? <a href="LoginPage.php">Click to Login</a></p>
      	<p class="link"><a href="HomePage.php">Go To Home Page</a></p>
    </form>

</body>
</html>
