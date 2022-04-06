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
    
  
    include "connect-db.php";
		$sqlselect    = "SELECT email, username FROM UserDetails";
        $result = $conn->query($sql_select);
    	if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
          		echo '<p>' . $row["username"] .': ' . $row["email"] .'</p>';
          }
        }
    	else{
        echo "<div class='form'>
              <h3>Could not find registered Emails.</h3><br/>
              <p class='link'>Head back to <a href='UserAccount.php'>Account</a></p>
              </div>";
        }
  
  }
?>

</body>
</html>