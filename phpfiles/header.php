<?php

require_once("models/config.php");

setReferralPage(getAbsoluteDocumentPath(__FILE__));


if(isUserLoggedIn()) { 
?>

    <!-- Navigation -->
    <link rel="icon" type="img/ico" href="img/favicon.png">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">MineTribe</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/profile.php">Profile</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Tribe</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../account/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
  <?php } else { ?>
  
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">MineTribe</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/login.php">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/pricetable.php">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  <?php } ?>
  
    
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
				<img src="/img/logo-version.png" alt="this is the logo">
            </div>
        </div>
        
    </header>
