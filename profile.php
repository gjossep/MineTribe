<?php 

//Gets all the loggedIn account system. 
require_once("models/config.php");

//This checks the data from the ?user= exists. So if its just profile.php it will return false here.
if(isset($_GET['user'])) {
	
	//This gets the value of the ?user= in the url.
	$username = $_GET['user'];

	//Checks if thats a real user.
	if(userNameExists($username)) {
		//If it does, lets get the user account details.
		$userdetails = fetchUserAuthByDisplayName($username);
		$displayName = $userdetails->display_username;
			//User examples
			/*
			How to acces the data: $userdetails email;
			
			Things you can do instead of email:
			 -email
			 -id
			 -password
			 -title
			 -display_name
			 -user_name
			
			*/
			
	//So its not a real user.
	} else {
		
		//Check if logged in.
 		if(isUserLoggedIn()) { 	
		
			//If we are logged in, lets go the profile.php page without any ?user=
			header("Location: profile.php");
			//Stops the rest of the page loading so it saves time.
			die();
			
		//So not logged in.
		} else {
			
			//Lets go back to the home page then.
			header("Location: index.php");
			die();	
		}
	}

//So the ?user= field is empty or doesnt exist.
} else {
	
	//Check if the user is logged in
	if(isUserLoggedIn()) { 
	
		//They are so lets get the logged-in user's uuid or username.
		$username = $loggedInUser -> user_name;	
	
	//Not logged in then.
	} else {
		
		//Fuck you go home.
		header("Location: index.php");
		die();	
	}
}

//After that whole script we will get the stats now.

//Sets up the database connection.
$servername = "gjosse.nl.mysql";
$username = "gjosse_nl";
$password = "bcJ7UEPx";
$dbname = "gjosse_nl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


//Ask the database to give me the stats and rank for the username of either the requested user or the logged in one. This is deterimend by the above script. The $username
$sql = "SELECT stats, rank FROM uf_users WHERE user_name=".$username;

//Look at what the database as replied.
$result = $conn->query($sql);

//Loop over all the rows it found, but because we only gave one username value it will only have one row. 
$row = mysql_fetch_assoc($result);
	
	//Get the long stats data that looks like: 1,2,3,4,5
	$statsRaw = $row["stats"];
	
	//Explode or divide the data by the commas so we can get individal stats values. This will return a array of stats, to get the one we want we have to do $stats[statNumber]
	$stats = explode(',', $statsRaw);
	
	//Get and store rank as a value. 
	$rank = $row['rank'];
	
	// You have to get the other stats, ill just give two examples below.
	
	$statDistanceCrouched = $stats[7];
	$statDistanceSprinted = $stats[8];
	$statDistanceSwum = $stats[9];
	$statDistanceFall = $stats[10];
	$statDistanceClimbed = $stats[11];
	$statUnderWater = $stats[12];	
	$statDistanceMinecart = $stats[14];
	$statDistanceBoat = $stats[14];
	$statJump = $stats[15];
	$statFishCaught = $stats[16];
	
	/*
	
	To add these stats to HTML just use <?php $statPlayTime ?> to put them in anywhere.
	
	To get anyvalue you see here into HTML just use <?php (then the id of the thing you want, these all start with a doller sign) ?>
	
	*/



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>profile</title>


	<!-- Add Any other css you want here -->
	<link href="css/tribeleader" rel="stylesheet" type="text/css" />
    <link href="csstheme/bootstrap.css" rel="stylesheet">
    <link href="csstheme/font-awesome.min.css" rel="stylesheet">
  	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href="csstheme/main.css" rel="stylesheet">
   <style> 
   
.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#ffffff; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:10px;
	font-family:Arial;
	font-weight:bold;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #e5e5e5 5%, #e5e5e5 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e5e5e5), color-stop(1, #e5e5e5) );
	background:-moz-linear-gradient( center top, #e5e5e5 5%, #e5e5e5 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#e5e5e5", endColorstr="#e5e5e5");	background: -o-linear-gradient(top,#e5e5e5,e5e5e5);

	background-color:#e5e5e5;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#000000;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #e5e5e5 5%, #e5e5e5 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e5e5e5), color-stop(1, #e5e5e5) );
	background:-moz-linear-gradient( center top, #e5e5e5 5%, #e5e5e5 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#e5e5e5", endColorstr="#e5e5e5");	background: -o-linear-gradient(top,#e5e5e5,e5e5e5);

	background-color:#e5e5e5;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
.button {
   border: 2px solid #000000;
   background: #d91f1f;
   background: -webkit-gradient(linear, left top, left bottom, from(#ff0000), to(#d91f1f));
   background: -webkit-linear-gradient(top, #ff0000, #d91f1f);
   background: -moz-linear-gradient(top, #ff0000, #d91f1f);
   background: -ms-linear-gradient(top, #ff0000, #d91f1f);
   background: -o-linear-gradient(top, #ff0000, #d91f1f);
   background-image: -ms-linear-gradient(top, #ff0000 0%, #d91f1f 100%);
   padding: 9px 18px;
   -webkit-border-radius: 3px;
   -moz-border-radius: 3px;
   border-radius: 3px;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   text-shadow: #e6123c 0 1px 0;
   color: #000000;
   font-size: 18px;
   font-family: helvetica, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border: 2px solid #08131a;
   text-shadow: #cf1f1f 0 1px 0;
   background: #de6f6f;
   background: -webkit-gradient(linear, left top, left bottom, from(#c26161), to(#de6f6f));
   background: -webkit-linear-gradient(top, #c26161, #de6f6f);
   background: -moz-linear-gradient(top, #c26161, #de6f6f);
   background: -ms-linear-gradient(top, #c26161, #de6f6f);
   background: -o-linear-gradient(top, #c26161, #de6f6f);
   background-image: -ms-linear-gradient(top, #c26161 0%, #de6f6f 100%);
   color: #000000;
   }
.button:active {
	text-shadow: #de1f1f 0 1px 0;
	border: 2px solid #000000;
	background: #cc5c5c;
	background: -webkit-gradient(linear, left top, left bottom, from(#d15858), to(#de6f6f));
	background: -webkit-linear-gradient(top, #d15858, #cc5c5c);
	background: -moz-linear-gradient(top, #d15858, #cc5c5c);
	background: -ms-linear-gradient(top, #d15858, #cc5c5c);
	background: -o-linear-gradient(top, #d15858, #cc5c5c);
	background-image: -ms-linear-gradient(top, #d15858 0%, #cc5c5c 100%);
	color: #000000;
	position: relative;
	height: 10px;
   }
   .addbutton {
   border: 2px solid #000000;
   background: #11eb44;
   background: -webkit-gradient(linear, left top, left bottom, from(#12e62b), to(#11eb44));
   background: -webkit-linear-gradient(top, #12e62b, #11eb44);
   background: -moz-linear-gradient(top, #12e62b, #11eb44);
   background: -ms-linear-gradient(top, #12e62b, #11eb44);
   background: -o-linear-gradient(top, #12e62b, #11eb44);
   background-image: -ms-linear-gradient(top, #12e62b 0%, #11eb44 100%);
   padding: 9px 18px;
   -webkit-border-radius: 3px;
   -moz-border-radius: 3px;
   border-radius: 3px;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   text-shadow: #5cd914 0 1px 0;
   color: #000000;
   font-size: 18px;
   font-family: helvetica, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.addbutton:hover {
   border: 2px solid #08131a;
   text-shadow: #3ec948 0 1px 0;
   background: #6fde7f;
   background: -webkit-gradient(linear, left top, left bottom, from(#78eb5e), to(#6fde7f));
   background: -webkit-linear-gradient(top, #78eb5e, #6fde7f);
   background: -moz-linear-gradient(top, #78eb5e, #6fde7f);
   background: -ms-linear-gradient(top, #78eb5e, #6fde7f);
   background: -o-linear-gradient(top, #78eb5e, #6fde7f);
   background-image: -ms-linear-gradient(top, #78eb5e 0%, #6fde7f 100%);
   color: #000000;
   }
.addbutton:active {
   text-shadow: #1fde26 0 1px 0;
   border: 2px solid #000000;
   background: #98cc5e;
   background: -webkit-gradient(linear, left top, left bottom, from(#60de47), to(#6fde7f));
   background: -webkit-linear-gradient(top, #60de47, #98cc5e);
   background: -moz-linear-gradient(top, #60de47, #98cc5e);
   background: -ms-linear-gradient(top, #60de47, #98cc5e);
   background: -o-linear-gradient(top, #60de47, #98cc5e);
   background-image: -ms-linear-gradient(top, #60de47 0%, #98cc5e 100%);
   color: #000000;
   }
   #about h4 {
	   color:#099
}
   #about h3 {
	   color:#C00
}
   #about h1 center {
	   color:#099
}

   #about h5 {
	color: #666;
}
   .col-md-4 #myTab li a {
}
   #profile h2 center {
	color: #339;
}
   .col-md-4 #myTab li a {
	color: #06C;
}
   #portfolio .row .table table tr td h4 b {
	color: #096;
}
   #portfolio .row h3 b {
	color: #066;
}
   </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
   	<?php require('phpfiles/head.php'); ?>
	</head>

	<body>
    <?php require('phpfiles/header.php'); ?>
    
    <div class="Profile">
      <h1>
        <center>
          Profile
        </center>
     </h1>
     
    <div class="container">
    	<div class="col-lg-6 col-lg-offset-3">
    	
    		<!-- ===== vCard Navigation ===== -->
    		<div class="row w">
    			<div class="col-md-4">
    				<img class="img-responsive" src="img/imgtheme/avatar.jpg" alt="avatar">
					<ul class="nav nav-tabs nav-stacked" id="myTab">
					  <li class="active"><a href="#about">Profile</a></li>
					  <li><a href="#profile">Tribe</a></li>
					  <li><a href="#portfolio">Fun Statistics</a></li>
					  <li><a href="#contact">Friends</a></li>
					</ul>    			
				</div><!-- col-md-4 -->

    		<!-- ===== vCard Content ===== -->
    			<div class="col-md-8">
	    			<div class="tab-content">
	    			
	    			  <!-- ===== First Tab PROFILE ===== -->
					  <div class="tab-pane active" id="about">

					  	<h3><?php $dispayName ?></h3>
					  	<h4>Rank <?php $rank ?></h4>
					  	<hr></hr>                       
          <?php if(isUserLoggedIn()) {            
		  
		  			if(!isset($_GET['user']))  {
		  ?>     
           						<h4> <center> ADD MORE FRIENDS </center> </h4>
                				<hr />
                				<img src="img/addfriend.png" alt="tribedefault" height="310" width="310"/>
           
           			<?php }else{ ?> 
                    			<!--if not friends-->
								<h1> <center>Add Friend</center></h1>
               					<img src="img/becomefriend.png" alt="tribedefault" height="310" width="310"/>
                                <hr />
                 				<h5> <center>add friend?</center></h5>
                	<?php } ?>
       	 <?php } else { ?>
							<!--if not logged in-->
						 	<img src="img/addfriend.png" alt="tribedefault" height="310" width="310"/>
                 			<hr />
                 			<h5> <center>You need to Login or Register to add people</center></h5>
                     
         <?php } ?>

				 		<!--	<h1> <center>FRIENDS</center></h1>
				 				<img src="img/removefriend.png" alt="tribedefault" height="310" width="310"/>
                				<hr />
                 				<h5> <center>remove friend?</center></h5>-->
                 
                		
                 
                 

                 
               <!--<!if your own account-->

                
					<hr />
                    
					  </div>
					  
	    			  <!-- ===== Second Tab TRIBE ===== -->
		<div class="tab-pane" id="profile">
		<?php if(isUserLoggedIn()) {            
		  
		  		if(!isset($_GET['user']))  {
		?> 
                      		<!-- if user himself GOES TO IT himself and no tribe-->
                  			
					  		<h2><center>No tribe yet!</center></h2>
							<hr />
                       	 	<h4> <center> Create a tribe with your friends or join your friends tribe! </center> </h4>
                       	 	<hr />                        
                            
                            <!--if user has tribe-->
<!--                     	<div class="tab-pane" id="profile">
					  		<h2><center>Tribe</center></h2>
							<hr />
					  		<img src="img/tribecover/tribedefault.jpg" alt="tribedefault" height="210" width="330"/>
					 		<hr />-->
                            
                <?php }else{ ?>                             	
                <!--if user has no tribe-->
                  			<div class="tab-pane" id="profile">
					 		<h2><center>A lone wolf :(</center></h2>
							<hr />
					 		<img src="img/tribecover/notribe.jpg" alt="tribedefault" height="200" width="330"/>
							<hr />
              
                            <!--if user has tribe-->
<!--                     	<div class="tab-pane" id="profile">
					  		<h2><center>Tribe</center></h2>
							<hr />
					  		<img src="img/tribecover/tribedefault.jpg" alt="tribedefault" height="210" width="330"/>
					 		<hr />-->
 				<?php } ?>
          <?php }else{ ?>     
					
						    <div class="tab-pane" id="profile">
					 		<h2><center>A lone wolf :(</center></h2>
							<hr />
					 		<img src="img/tribecover/notribe.jpg" alt="tribedefault" height="200" width="330"/>
							<hr />
         	
                            <!--if user has tribe-->
<!--                     	<div class="tab-pane" id="profile">
					  		<h2><center>Tribe</center></h2>
							<hr />
					  		<img src="img/tribecover/tribedefault.jpg" alt="tribedefault" height="210" width="330"/>
					 		<hr />-->
                 
            <?php } ?>               
                      </div>
       	   
                   

                        
                        
                        
                        
					  <!-- Tab statistics -->
					  
	    			  <!-- ===== Third Tab ===== -->
					  <div class="tab-pane" id="portfolio">
						  <div class="row">
					  		<h3><b>Fun Statistics</b></h3>
					  	 
              <div class="table" >
                <table>
                    <tr>
                        <td>
                            <h4><b>Skill</b></h4>
                        </td>
                        <td >
                            <h4><b>Data</b></h4>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Distance Crouched
                        </td>
                        <td>
                            <?php $statDistanceCrouched ?>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Distance Sprinted
                        </td>
                        <td>
                            <?php $statDistanceSprinted ?>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Distance Swum
                        </td>
                        <td>
                            <?php $statDistanceSwum ?>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Distance Fallen
                        </td>
                        <td>
                            <?php $statDistanceFall ?>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Distance Climbed
                        </td>
                        <td>
                            <?php $statDistanceClimbed ?>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Distance Underwater
                        </td>
                        <td>
                            <?php $statDistanceCrouched ?>
                        </td>
                    </tr>   
                    <tr>
                        <td >
                            Distance by Boat
                        </td>
                        <td>
                            <?php $statDistanceBoat ?>
                        </td>
                    </tr> 
                    <tr>
                        <td >
                            Distance by Minecart
                        </td>
                        <td>
                            <?php $statDistanceMinecart ?>
                        </td>
                    </tr> 
                    <tr>
                        <td >
                            Amount of Jumps
                        </td>
                        <td>
                            <?php $statJump ?>
                        </td>
                    </tr>                    <tr>
                        <td >
                            Fish Caught
                        </td>
                        <td>
                            <?php $statFishCaught ?>
                        </td>
                    </tr>                                                                                                                  
                </table>
                <hr />
            </div>
            
                            
						</div>
					  </div><!-- /Tab Portfolio -->
					  
	    			  <!-- ===== Fourth Tab ===== -->
					  <div class="tab-pane" id="contact">
					  		<h4><b>Friends<b></h4>
              <div class="table" >
                <table>
                    <tr>
                        <td>
                            Player Name
                        </td>
                        <td >
                            Player Name
                        </td>
           			    <td >
                            Player Name
                        </td>
                    </tr>
                    <tr>
                        <td >
                            friend
                        </td>
                        <td>
                            friend
                        </td>
           				<td>
                            friend
                        </td>     
                     </tr>                                                                    
                </table>
                <hr />

     </div>
         <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script> 
		$('#myTab a').click(function (e) {
	  		e.preventDefault()
	  		$(this).tab('show')
		})	
	</script>   
     
</body>
</html>
