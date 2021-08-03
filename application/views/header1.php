<html>
    <head>
        <title>Lavniworld</title>
        
        <meta charset="UTF-8">
        
        <meta name="author" content="Lavniworld">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?php echo base_url(); ?>assets/user-dashboard/img/favicon.png" type="image/png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" charset="utf-8"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        
        <?php if(isset($project)){ ?>
        <meta name="description" content="<?php echo strip_tags(substr($project["description"],0,250));?>">
        <meta name="keywords" content="Lavniworld, <?php echo $project['title']; ?>, funding, investment">
        <meta property="og:url"     content="<?php echo base_url("invest/details/").$project['pid']; ?>" />
  <meta property="og:type"          content="article" />
  <meta property="og:title"         content="<?php echo $project['title'];?>" />
  <meta property="og:description"   content="<?php echo strip_tags(substr($project["description"],0,250));?>" />
  <meta property="og:image"         content="<?php 
                                                    $images = explode(", ", $project['images']);
                                                    echo base_url() . $images[0];
                                                    ?>" />
         <script src="//platform-api.sharethis.com/js/sharethis.js#property=5ca1f7362c4f3b001126ebb8&product=inline-share-buttons"></script>
     <?php }?>
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
                            <a class="navbar-brand" href="<?php echo base_url(); ?>" title="Home">
                                <img alt="Lavniworld" src="<?php echo base_url(); ?>assets/home/img/logo.png">
<!--                                <h2>Lavniworld</h2>-->
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="main-menu">
                             <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <?php if($this->session->userdata('userdata')) :
                                            $user=$this->session->userdata('userdata');
                                ?>
                                <li><a href="<?php echo base_url('campaign/add');?>">List Your Organization</a></li>
                                <li> <a href="<?php echo base_url(); ?>my-dashboard">Dashboard</a></li>
<!--                                    <li> <a href="<?php //echo base_url(); ?>logout">Logout</a></li>-->
                                <?php else: ?>
                                    <li><a href="<?php echo base_url("login");?>">List Your Organization</a></li>
                                    <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                                    <li><a href="<?php echo base_url(); ?>register">Join Now</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
