<?php 

require_once("models/config.php");

// Public page

setReferralPage(getAbsoluteDocumentPath(__FILE__));

if(isUserLoggedIn()) {
	addAlert("warning", "You're already logged in!");
	header("Location: home");
	exit();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Login</title>
	<?php require('phpfiles/head.php'); ?>

	<!-- Add Any other css you want here -->
	<link href="css/login/login.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
    <?php require('phpfiles/header.php'); ?>
    <div class="login">
      <h1>
        <center>
          Login
        </center>
     </h1>
     	<div class="formHolder">
        <div class="loginForm">
          <form id="login" action="api/process_login.php" method="post">
            <input type="text" name="log" id="user" class="input" placeholder="Username">
            <br>
            <input type="password" name="pwd" id="pass" class="input" placeholder="Password">
            <br>
            <input type="submit" name="wp-submit" id="" value="Login">
          </form>
    	</div>
        </div>
     </div>
    <?php require('phpfiles/footer.php'); ?>
</body>
</html>
