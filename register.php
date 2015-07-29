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
	<title>Register</title>
    
    <script>
	//Changed the script a bit to make it faster.
	function register() {	

		
		var oForm = document.forms[0];
		var username = oForm.elements["username"].value;
		var MCpassword = oForm.elements["MCpassword"].value;
		
		var webPassword = oForm.elements["password"].value; 
		var webPasswordCheck = oForm.elements["passwordCheck"].value; 
		
		var email = oForm.elements["email"].value; 
		
		var age = oForm.elements["age"].value; 
		
		var spider = oForm.elements["spiderbro"].value;
		
		var errors = "The following are wrong or incomplete: "+ "<br/>";
		
		if((username.length == 0) || (MCpassword.length == 0)) {
			errors = errors + " - Minecraft Username or Minecraft Password "+ "<br/>";
			document.getElementById("MCCheck").innerHTML = "Username or password is empty!";
		} else {
			var xmlhttp;
			if (window.XMLHttpRequest)
  				{// code for IE7+, Firefox, Chrome, Opera, Safari
  					xmlhttp=new XMLHttpRequest();
  				}
			else
 				{// code for IE6, IE5
				  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  				}
			
			xmlhttp.onreadystatechange = function() {
            	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                	console.log(xmlhttp.responseText);
            	}
        	}
			xmlhttp.open("GET","/ExtraScripts/CheckMCAccount.php?u=" + username + "&p="+MCpassword,false);
			xmlhttp.send();
			var uuid = xmlhttp.responseText;
			errors = errors + " - UUID of user: "+uuid;
			
			xmlhttp.open("POST", "/api/create_user.php", true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("user_name=1234"+"&display_name="+username+"&email="+email+"&title=Tribber&password="+webPassword+"&passwordc="+webPasswordCheck+"&spiderbro="+spider);
			
			}
			document.getElementById("MCCheck").innerHTML = errors;
	}
	</script>
	<?php require('phpfiles/head.php'); ?>
	
	<!-- Add Any other css you want here -->
	<link href="css/login/login.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
    <?php require('phpfiles/header.php'); ?>
    
    <div class="login">
      <h1>
        <center>
          Register
        </center>
     </h1>
     
     <form id="signup">

        <div class="inputs">	
        	<div id='display-alerts' class="col-lg-12">
				<div class='alert alert-danger'>
					<p id="MCCheck"> We dont store your Minecraft password!</p>
                </div>
      		</div>
            
        	<p> Minecraft Username</p>
            <input type="text" name="username" id="MCUsername" placeholder="Minecraft Username" />
        	<p>Minecraft Password </p>
            <input type="password" name="MCpassword" id="MCPassword" placeholder="Minecraft Password" />
            
            <p> Website Password </p>
            <input type="password" name="password" placeholder="Website Password" />
        	<p>  Confirm Website Password </p>
            <input type="password" name="passwordCheck" placeholder="Confirm password" />
            <p> Email Address </p>
            <input type="text" name="email" placeholder="Email" />
            <p> Age </p>
            <input type="text" name="age" placeholder="Age" />
                         <p> How did you find out about us?</p>
            <select name="findout">
                <option value="facebook">Facebook page</option>
  				<option value="server">On a Minecraft Server</option>
  				<option value="friends">Friends</option>
  				<option value="other">Other</option>
            
            </select>
            <br />
	
            <button type="button" id="submit" onclick="register()">Register</button>
            
            <input type="hidden" name='spiderbro' id='spiderbro' value='http://'/>
            <!--<input type="submit" id="submit" value="Register" />-->
                    
        </div>

    </form>
     
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
