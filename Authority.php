<?php
    session_start();
	$authLevel = 0;
    if(!isset($_SESSION["username"])) {
        $authLevel = 1;
    }
	else if($_SESSION["username"] == "admin"){
      $authLevel = 3;
    }
	else if(isset($_SESSION["username"])){
      $authLevel = 2;
    }

?>