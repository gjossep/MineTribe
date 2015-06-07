<?php 
require_once("models/config.php");
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
					  <li><a href="#portfolio">Statistics</a></li>
					  <li><a href="#contact">Friends</a></li>
					</ul>    			
				</div><!-- col-md-4 -->

    		<!-- ===== vCard Content ===== -->
    			<div class="col-md-8">
	    			<div class="tab-content">
	    			
	    			  <!-- ===== First Tab ===== -->
					  <div class="tab-pane active" id="about">
					  	<h3>Victoria Wallberg</h3>
					  	<h5>Web Designer</h5>
					  	<hr></hr>
					  	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
					  	<p>Has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
					  	<p class="pull-right red"><i class="icon-heart"></i></p>
					  </div><!-- tab about -->
					  
	    			  <!-- ===== Second Tab ===== -->
					  <div class="tab-pane" id="profile">
					  	<h4><i class="icon-briefcase"></i> Job Experience</h4>
					  	<p class="sm">
					  		<grey>Black Tie Corp.</grey> | June 2013 - Actual.<br/>
					  		<grey>Other Corp.</grey> | January 2011 - May 2013.<br/>
					  	</p>
					  
						  <h4><i class="icon-file-text-alt"></i> Education</h4>
					  	<p class="sm">
					  		<grey>Web Designer</grey> | Greenville University.<br/>
					  		<grey>Business Master</grey> | Loyal Univesrity.<br/>
					  	</p>
					  	
						  <h4><i class="icon-trophy"></i> Awards</h4>
					  	<p class="sm">
					  		<grey>Best Web Design</grey> | Black Tie Site.<br/>
					  		<grey>Designer of the Year</grey> | 2012.<br/>
					  	</p>
					  </div><!-- Tab Profile -->
					  
	    			  <!-- ===== Third Tab ===== -->
					  <div class="tab-pane" id="portfolio">
						  <div class="row">
							  <div class="col-xs-6 centered">
							  	<img class="img-responsive" src="img/imgtheme/p01.png" alt="random">
							  	<a href="#"><h6><i class="icon-link"></i> Project Name</h6></a>
							  </div><!-- col-xs-6 -->
							  <div class="col-xs-6 centered">
							  	<img class="img-responsive" src="img/imgtheme/p02.png" alt="random">
							  	<a href="#"><h6><i class="icon-link"></i> Project Name</h6></a>
							  </div><!-- col-xs-6 -->
						  </div><!-- row -->
						  
						  <div class="row">
						  	<br>	
							  <div class="col-xs-6 centered">
							  	<img class="img-responsive" src="img/imgtheme/p03.png" alt="random">
							  	<a href="#"><h6><i class="icon-link"></i> Project Name</h6></a>
							  </div><!-- col-xs-6 -->
							  <div class="col-xs-6 centered">
							  	<img class="img-responsive" src="img/imgtheme/p04.png" alt="random">
							  	<a href="#"><h6><i class="icon-link"></i> Project Name</h6></a>
							  </div><!-- col-xs-6 -->
						  </div><!-- row -->
					  </div><!-- /Tab Portfolio -->
					  
	    			  <!-- ===== Fourth Tab ===== -->
					  <div class="tab-pane" id="contact">
						  <h4>Contact Information</h4>
						  <hr> </hr>
						  <div class="row">
							  <div class="col-xs-6">
								  <p class="sm">
								  	<i class="icon-globe"></i> - BlackTie.co <br/>
									<i class="icon-envelope"></i> - victoria@blacktie.co  
								  </p>
							  </div><!-- col-xs-6 -->
							  
							  <div class="col-xs-6">
								  <p class="sm">
								  	<i class="icon-phone"></i> - +44 2009-4839 <br/>
									<i class="icon-apple"></i> - 902 3940-4439  
								  </p>
							  </div><!-- col-xs-6 -->
						  </div><!-- row -->
						  
						  <h4>Social Links</h4>
						  <hr></hr>
						  <div class="row">
							  <div class="col-xs-6">
								  <p class="sm">
								  	<i class="icon-facebook"></i> - Vicky.Wallberg <br/>
									<i class="icon-tumblr"></i> - Love-Vicky-Site  
								  </p>
							  </div><!-- col-xs-6 -->
							  
							  <div class="col-xs-6">
								  <p class="sm">
								  	<i class="icon-dribbble"></i> - Vicoooria <br/>
									<i class="icon-twitter"></i> - @BlackTie_co  
								  </p>
							  </div><!-- col-xs-6 -->
						  </div><!-- row -->
					  </div><!-- Tab Contact -->
					  
					</div><!-- Tab Content -->
    			</div><!-- col-md-8 -->
    		</div><!-- row w -->
    	</div><!-- col-lg-6 -->
    </div><!-- /.container -->

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
     
    <?php require('phpfiles/footer.php'); ?>
</body>
</html>
