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
     
     <form id="signup" role='form' name='login' action='/api/process_login.php' method='post'>
       <div id='display-alerts' class="col-lg-12">
         <?php 
				if(isset($_GET['error'])) {
					echo "<div class='alert alert-danger'>";
						echo $_GET['error'];
					echo "</div>";
				}
			?>
       </div>
       <div class="inputs">
           <input type="text" name="username" placeholder="Username" />
        
            <input type="password" name="password" placeholder="Password" />
            
            <input type="submit" id="submit" value="Login" />
                    
       </div>

    </form>
    <hr />
     	<!--<div class="formHolder">
        <div class="loginForm">
          <form id="login" action="api/process_login.php" method="post">
          
			<h4> Username</h4>
            <input type="text" name='username' id="user" class="input" placeholder="Minecraft Username">
            <br>
            <h4>Password</h4>
            <input type="password" name='password' id="pass" class="input" placeholder="Webstie Password">

            <br>
            <input type="submit" name="wp-submit" id="" value="Login">
          </form>
    	</div>
        </div>-->
     </div>
  
    <?php require('phpfiles/footer.php'); ?>
</body>
</html>
