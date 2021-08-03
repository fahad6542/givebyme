<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/search/search.css">

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

    <script src="<?php echo base_url(); ?>assets/home/search/search.js" type="text/javascript"></script>
    <script>
      var proJsonLst=<?php echo $proJsonLst;?>;
autocomplete(document.getElementById("ptitle"), proJsonLst);

      var indJsonLst=<?php echo $indJsonLst;?>;
autocomplete(document.getElementById("Categoery"), indJsonLst);
</script>
    
<section class="projects">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <h2><?php echo $pageHeading;?></h2>
                    </div>
                    <div class="row" id="project-row">
						<?php foreach ($projects as $key => $project) : 
                        $data['project']=$project;
                        $string = $this->load->view('partial/productBox',$data , TRUE);
                        echo $string;
              ?>

						
						<?php endforeach; ?>
					</div>
                </div>
            </div>
        </section>
        
