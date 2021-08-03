<html>
    <head>
        <title>Lavniworld</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/home/css/style.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>
    <body>
        <section class="inner-menu">
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">
<!--                                <img alt="Brand" src="img/logo.png">-->
                                <h2>Lavniworld</h2>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="main-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Industry</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<?php foreach ($industries as $key => $industry) :?>
										<a class="dropdown-item" href="<?php  echo $industry['iid'];?>"><?php  echo $industry['industryName'];?> </a>
										<?php endforeach; ?>
                                    </div>

                                </li>
                                <li><a href="<?php echo base_url(); ?>invest">Projects</a></li>
<!--                                <li><a href="#">Notifications</a></li> -->
                                <li><a href="#">Country</a></li>
								<?php if($this->session->userdata('userdata')) :?>
									<li> <a href="<?php echo base_url(); ?>dashboard">My Dashboard</a></li>
								<?php else: ?>
									<li> <a href="<?php echo base_url(); ?>login">Login</a></li>
	                            	<li><a href="<?php echo base_url(); ?>register">Join Now</a></li>
								<?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
