 <section class="invest">
            <div class="">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <h2>How lavniworld work</h2>
                            <p>Lavniworld is the place where communities and people around the help each other.</p>
                        </div>
                    </div>
                    <!--slider-starts-->
                    <div class="row">
                        <div class="col-md-12 col-sm-4 col-xs-12 text-center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="item active">
                                  <img class="d-block w-100" src="<?php echo base_url('assets/home/img/howItWorks/1.jpg');?>" alt="First slide">
                                </div>
                                <div class="item">
                                  <img class="d-block w-100" src="<?php echo base_url('assets/home/img/howItWorks/2.jpg');?>" alt="Second slide">
                                </div>
                                <div class="item">
                                  <img class="d-block w-100" src="<?php echo base_url('assets/home/img/howItWorks/3.jpg');?>" alt="Third slide">
                                </div>
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
                        </div>
                    </div>
                    <!--slider-ends-->

                    <div class="row">
                        <div class="col-md-4">
                            <h3>1.  START YOUR CAMPAIGN.</h3>
                            <ul class="work-lst">
                                <li>Set your fundraising Goal</li>
                                <li>Tell your story </li>
                                <li>Add picture or video</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h3>2. SHARE WITH THE WORLD </h3>
                            <ul class="work-lst">
                                <li>send email</li>
                                <li>share on social media </li>
                                <li>send text</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h3>3.  RRECEIVE DONATION</h3>
                            <ul class="work-lst">
                                <li>Accepting Donations </li>
                                <li>Thank donors  </li>
                                <li>Withdraw funds</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                    <a href="<?php echo base_url("login");?>" class="support-btn">Start Fundraising Campaign</a>
                    </div>

                </div>
            </div>
        </section>

<?php if (count($trendingProjects)>0) {?>

<!--end of category-detail-sec-->
  <div class="related-campaign-slidea">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Trending Campaign </h3>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php 
                    $i=0;
                    $cl="active";
                foreach ($trendingProjects as $project) {
                  $i++;
                    if ($i==1) { //start new row
                        ?>
                
                        <div class="item <?php echo $cl;?>">
                            <div class="row">
                <?php 
                $cl="";
              }?>

                              <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="project-item">
                                  <div class="row1"> <a href="<?php echo base_url('invest/details/'.$project["pid"]); ?>">
                                    <img src="<?php 
                                                                $images = explode(",", $project['images']);
                                                                echo base_url() . $images[0];
                                                                ?>" class="img-responsive" onerror="this.src='<?php echo base_url('assets/home/img/not_found.jpg'); ?>'" 
                                                                title="<?php echo $project['title'] ?>" alt="<?php echo $project['title'] ?>"> </a> </div>
                                  <div class="row project-detail">
                                    <div class="row1">
                                      <h4><a href="https://lavniworld.com/invest/details/52"><?php echo $project['title'] ?></a></h4>
                                    </div>
                                    <div class="row1 pro-pln">
                                      <div class="col-lg-6 col-sm-6 col-xs-6 no-padding">
                                        <div class="row1 plan-nam">
                                          <h4>Funding Goal</h4>
                                        </div>
                                        <div class="row1">
                                          <h5>$<?php echo number_format($project['projectValue']) ?></h5>
                                        </div>
                                      </div>
                                      <div class="col-lg-6 col-sm-6 col-xs-6 no-padding ">
                                        <div class="row1 plan-nam">
                                          <h4>Fund Raised</h4>
                                        </div>
                                        <div class="row1">
                                          <h5>$<?php echo $project['currentInvestmentAmount'] ?></h5>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row1">
                                      <div class="col-lg-6 col-sm-6 col-xs-12"> <a href="<?php echo base_url('invest/details/'.$project["pid"]); ?>" class="btn investnow">Donate Now</a> </div>
                                      <div class="col-lg-6 col-sm-6 col-xs-12"> <a href="<?php echo base_url('invest/details/'.$project["pid"]); ?>" class="btn detail">View details</a> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                  
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
  </div>
  <!--end of trending-campaign-slide-->

<?php }?>
