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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/style.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>
    <body>
        <section class="main-banner">
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
                            <a class="navbar-brand" href="<?php echo base_url(); ?>">
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
                                <li><a href="#">Country</a></li>
								<?php if($this->session->userdata('userdata')) :?>
									<li> <a href="<?php echo base_url(); ?>dashboard">My Dashboard</a></li>
								<?php else: ?>
									<li><a href="<?php echo base_url(); ?>login">Login</a></li>
									<li><a href="<?php echo base_url(); ?>register">Join Now</a></li>
								<?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row main-text">
                <div class="container">
                    <div id="text-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="carousel-content">
                                            <div class="row">
                                                <h2>Join Community of Entrepreneurs, Investors and Philanthropist</h2>
                                                <p>first world internet platform that connect investors to Africa</p>
                                            </div>
                                            <div class="row">
                                                <a href="#searchN" class="btn invest">Donate Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="carousel-content">
                                            <div class="row">
                                                <h2>Discover Potential Opportunities</h2>
                                                <p>The only trusted network for investors</p>
                                            </div>
                                            <div class="row">
                                                <a href="#searchN" class="btn invest">Donate Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="carousel-content">
                                            <div class="row">
                                                <h2>Make Change While Investing in Africa</h2>
                                                <p>Africa is the future</p>
                                            </div>
                                            <div class="row">
                                                <a href="#searchN" class="btn invest">Donate Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="carousel-content">
                                            <div class="row">
                                                <h2>Invest in the Projects and Companies that Benefits the Communities</h2>
                                                <p>Africa is the future</p>
                                            </div>
                                            <div class="row">
                                                <a href="#searchN" class="btn invest">Donate Now</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                  <!--<a class="left carousel-control" href="#text-carousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                     <a class="right carousel-control" href="#text-carousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a> -->

                    </div>
<!--
                    <div class="row text-center">
                        <div class="row">
                            <h2>Best place for investment</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>

                    </div>
-->
                </div>
            </div>
        </section>
