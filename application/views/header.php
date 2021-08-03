<html>
    <head>
        <title>Givebyme</title>
        <meta charset="UTF-8">
        <meta name="description" content="donation, Lavniworld">
        <meta name="keywords" content="funding, donation">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?php echo base_url(); ?>assets/user-dashboard/img/favicon.png" type="image/png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/search/search.css">


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
                                <img alt="Lavni Capital" src="<?php echo base_url(); ?>assets/home/img/logo.png">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="main-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <?php if($this->session->userdata('userdata')) :
                                            $user=$this->session->userdata('userdata');
                                ?>
                                <li><a href="<?php echo base_url();?>campaign/add">List Your Organization</a></li>
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
            <div class="row main-text">
                <div class="container">
                    <div id="text-carousel" class="carousel carousel-fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="carousel-content">
                                            
                                            <div class="row">
                                                <div id="s-section" class="container">
  <form autocomplete="off" action="<?php echo base_url("search");?>" method="post">
     <div class="form-row align-items-center center-form-home">
      <div class="col-md-5 col-xs-5 padd-r-0">
        <div class="input-title-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Find</div>
          </div>
        <div class="autocomplete">
          <input id="ptitle" type="text" name="ptitle" class="form-control searchBox" placeholder="Title" value="<?php echo $ptitle;?>">
        </div>
      </div>
    </div>

    <div class="col-md-5 col-xs-5 padd-l-0 padd-r-0">
      <div class="input-categoery-group">
        <div class="input-group-prepend">
          <div class="input-group-text">IN</div>
        </div>

        <div class="autocomplete">
      <input id="Categoery" type="text" name="industryName" class="form-control searchBox" placeholder="Categoery" value="<?php echo $industryName;?>">
    </div>
  </div>
</div>

  <div class="col-auto my-1">
        <button type="submit" class="btn btn-primary home-s-btn"><i class="fa fa-search"></i></button>
  </div>

</div>
  </form>
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <script src="<?php echo base_url(); ?>assets/home/search/search.js" type="text/javascript"></script>
    <script>
      var proJsonLst=<?php echo $proJsonLst;?>;
autocomplete(document.getElementById("ptitle"), proJsonLst);

      var indJsonLst=<?php echo $indJsonLst;?>;
autocomplete(document.getElementById("Categoery"), indJsonLst);
</script>
