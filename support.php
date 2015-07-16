<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Customer Support</title>
 
    <?php require('phpfiles/head.php'); ?>
    <!-- Bootstrap core CSS -->
    <link href="css/pricetable/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/pricetable/main.css" rel="stylesheet">
    	<link href="css/login/login.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	
.info {
	color: #000;
	background-color: #FFF;
	margin-right: 38%;
	margin-left: 38%;
	padding-left: 20px;
	padding-right: 20px;
	border: #E74C3C;
	border-radius: 10px;
	line-height: 10px;
	padding-top: 10px;
	padding-bottom: 10px;
	margin-bottom:50px;
}




.background {
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	background:repeat;
}

</style>
	
</head>
    <body class="background">
<div class="info">
      <h3>
   <center>
    <b>Customer Support</b>
</center>
      </h3>
      <hr>
      <p>
       
     <form id="signup">

        <div class="inputs">
        	<p> Email Address</p>
            <input type="text" name="email" placeholder="email" />
            <hr>
        	<p> Minecraft Username </p>
            <input type="text" name="username" placeholder="username" />
            <hr>
		<div class="comment">
            <p> Comments (Max 200 words)</p>
            <input name="description" type="text" maxlength="200">
            </div>
            <br />

             <p> About?</p>
            <select name="issue">
                <option value="facebook">Profile</option>
  				<option value="server">Ranking</option>
  				<option value="friends">Friends</option>
  				<option value="other">Chatting</option>
                <option value="other">Register</option>
                <option value="other">Login</option>
                <option value="other">Other+</option>
            </select>
            <hr>
             
            <input type="submit" id="submit" value="Submit" />
                    
        </div>

    </form>
    
</p>

    </div>
    
   
</body>
</html>
