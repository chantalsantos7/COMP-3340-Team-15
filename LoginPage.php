<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="register.css"/>
</head>
<body>
<?php
    require('connect-db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);  
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
 
        $query    = "SELECT * FROM UserDetails WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['email'] = $data['email'];

            header("Location: HomePage.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Please try again below</p>
                  </div>";
        }
    } 
?>
    <form class="form" method="post" name="login">
        <h1 class="login-header">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required/>
        <input type="password" class="login-input" name="password" placeholder="Password" required/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Not signed up?   <a href="register.php">Register here!</a></p>
      	<p class="link"><a href="HomePage.php">Go To Home Page</a></p>
  </form>
</body>
</html>
