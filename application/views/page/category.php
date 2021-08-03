<div class="wrapper" style="background-color: #FFF">
    
  <div class="category-detail-seca">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3><?php echo $category["industryName"];?></h3>
        </div>
      </div>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

          <?php echo $category["description"];?>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        
    </div><!--Conatiner-ends-->
  </div><!--category-detail-sec-ends-->

  <?php if (count($relatedProjects)>0) {?>

    <!--end of category-detail-sec-->
  <div class="related-campaign-slidea">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Related Campaigns </h3>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php 
                    $i=0;
                    $cl="active";
                foreach ($relatedProjects as $project) {
                  $i++;
                    if ($i==1) { //start new row
                        ?>
                
                        <div class="item <?php echo $cl;?>">
                            <div class="row">
                <?php 
                $cl="";
              }?>
            <?php 
             $data['project']=$project;
             $string = $this->load->view('partial/productBox',$data , TRUE);
                            echo $string;
            ?>

                <?php if ($i==3) {  //end row
                            $i=0; ?>
                            </div>
                          </div>
                <?php }
                } //end foreach 

                if ($i==1 || $i==2) { //ends if remaing
                    $i=0;?>
                            </div>
                          </div>
                <?php }?>

            </div>
           
        </div>
        </div>
      
 </div>
    <!--end of related-campaign-slide-->

<?php }?>
</div>
  
<!--end of wrapper-->