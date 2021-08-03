<?php 
function getYoutubeEmbedUrl($url){

    $urlParts   = explode('/', $url);
    $vidid      = explode( '&', str_replace('watch?v=', '', end($urlParts) ) );

    return 'https://www.youtube.com/embed/' . $vidid[0] ;
}
?>
<section class="project-detail">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3><?php echo $project['title']; ?></h3>
                            <!-- <h5><i class="fas fa-map-marker-alt"></i> Address</h5> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <!-- <img src="img/3.jpg" class="img-responsive"> -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                            <?php
                                            $images = explode(", ", $project['images']);
                                            foreach ($images as $key => $image)
                                                : ?>
                                                <div class="swiper-slide">
                                                    <img src="<?php echo base_url() ?><?php echo $image; ?>" class="img-responsive">
                                                </div>
                                            <?php endforeach; ?>
                                        <!-- <img src="<?php echo base_url() ?><?php echo $project['images']; ?>" class="img-responsive"></div> -->
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <br>
                                <p><?php echo $project['description']; ?></p>
                            </div>
                            <div class="row">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#about">About Property</a></li>
                                    <li><a data-toggle="tab" href="#finance">Financial</a></li>
                                    <li><a data-toggle="tab" href="#company">Company</a></li>
                                    <li><a data-toggle="tab" href="#documents">Documents</a></li>
                                    <li><a data-toggle="tab" href="#team">Team</a></li>
                                    
                                </ul>

                                <div class="tab-content">
                                    <div id="about" class="tab-pane fade in active">
                                    <br>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                                <h5><b>Project name : <?php echo $project['title']; ?></b></h5>
                                                <h5><b>Industry: <?php
                                                                $projectIndustries = explode(",", $project['industries']);
                                                                foreach ($projectIndustries as $key => $projectIndustry) {
                                                                    foreach ($industries as $key => $industry) {
                                                                        if ($projectIndustry == $industry['iid']) {
                                                                            echo '<span class="label label-primary">' . $industry['industryName'] . '</span> ';
                                                                        }
                                                                    }
                                                                }
                                                                ?></b></h5>
                                                <h5><b>Location/country: </b><?php echo $project['location']; ?></h5>
                                                <h5><b>Partner : <?php echo $project['partner']; ?></b></h5>
                                                <h5><b>Asset Class: <?php echo $project['assetClass']; ?></b></h5>
                                                <h5><b>Contactor: <?php echo $project['contractor']; ?></b></h5>
                                                <h5><b>Duration for complete: </b><?php echo $project['durationForComplete']; ?> years</h5>
                                                <h5><b>Year of construction: </b><?php echo $project['yearOfConstruction']; ?></h5>
                                                <h5><b>Year of reconstruction: </b><?php echo $project['yearOfReConstruction']; ?></h5>
                                            </div>
                                            <!-- <div class="col-lg-6 col-sm-6 col-xs-12">
                                                <h5><b>Year of construction: <?php echo $project['yearOfConstruction']; ?></b></h5>
                                                <h5><b>Year of reconstruction: <?php echo $project['yearOfReConstruction']; ?></b></h5>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div id="finance" class="tab-pane fade">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                                <h4><b>Investment details / Property cost</b></h4>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td>Project Value</td>
                                                        <td><?php echo number_format($project['projectValue']); ?></td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td>Purchase Price</td>
                                                        <td><?php echo $project['purchasePrice']; ?></td>
                                                    </tr> -->
                                                    <!-- <tr>
                                                        <td>Renovation Cost</td>
                                                        <td><?php echo $project['renovationCost']; ?></td>
                                                    </tr> -->
                                                    <tr>
                                                        <td>Reservation Category</td>
                                                        <td><?php echo $project['investmentCategory']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Minimum Reservation</td>
                                                        <td><?php echo $project['minimumInvestment']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Maximum Reservation</td>
                                                        <td><?php echo $project['maximumInvestments']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Investment type</td>
                                                        <td><?php echo $project['investmentType']; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                                <h4><b>Estimated yields / Estimate yield for 3 years</b></h4>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td>Estimated Yields for 1st year(%)</td>
                                                        <td><?php echo $project['yieldFor1stYear']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Net Rent Yields for 2nd year(%)</td>
                                                        <td><?php echo $project['yieldFor2ndYear']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estimated HPI for 3rd year(%)</td>
                                                        <td><?php echo $project['yieldFor3rdYear']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Projected IRR(%)</td>
                                                        <td><?php echo $project['projectedIRR']; ?></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <h4><b>Information about income / Information about rent</b></h4>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td>Gross income (%)</td>
                                                        <td><?php echo $project['grossIncome']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Net income(%)</td>
                                                        <td><?php echo $project['netIncom']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total expenses(%)</td>
                                                        <td><?php echo $project['totalExpenses']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total dividend yield(%)</td>
                                                        <td><?php echo $project['totalDividendYield']; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="company" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-xs-12 s2014-company-profile">
                                                <div class="company-name">
        <img src="<?php echo base_url().'uploads/companylogo/'.$project['logo']; ?>" title="<?php echo $project['cname']; ?>" alt="<?php echo $project['cname']; ?>">
        <h1><?php echo $project['cname']; ?></h1>
        
      </div><!-- end .company-name -->
      
      <div class="company-feature-links">
               <div class="company-feature">
                      <iframe id="embedded_video" src="<?php echo getYoutubeEmbedUrl($project['video_url']);?>?HD=1;rel=0;showinfo=0&amp;wmode=transparent" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen="" height="460" width="786" frameborder="0"></iframe>
                  </div><!-- end .company-feature -->
      </div><!-- .company-feature-links -->
      <p><?php //echo $project['description']; ?> </p>
      
       <div class="text-center center-block">
            <br />
            <a href="<?php echo $project['web_url']; ?>"><i id="social-web" class="fa fa-globe fa-3x social"></i></a>
                    <a href="mailto:<?php echo $project['email']; ?>"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
                                                
      <br>
      <strong>Adddress:</strong> <?php echo $project['address']; ?> 
                                                <?php echo $project['city']; ?>
                                                    <?php echo $project['state']; ?>
                                                
                                                <?php echo $project['countryName']; ?> | 
                                                
                                                
                                                <strong>Tel:</strong> <?php echo $project['contact_no']; ?>
                                                
                                                
     </div>
                                            
                                        </div>
                                    </div>
                                    <div id="documents" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <ul style="margin-top: 50px; margin-bottom: 50px;">
                                                <?php foreach ($document as $value) {?>
                                                                                                                    
                                                                                                              
                                                <li class="col-md-4 inactive">
          <div class="media">
              <div class="pull-left">
                <span class="glyphicon glyphicon-book"></span>
              </div>
            <div class="media-body">
                <h5 class="media-heading"><strong><?php echo $value["title"];?></strong> <a href="<?php echo base_url().'uploads/document/'.$value["file_name"];?>"  download="<?php echo $value["title"];?>" class="glyphicon glyphicon-download-alt"></a></h5>
            </div>
        </div>
          </li>
            <?php } ?>
                                            </ul>
                                                </div>
                                        </div>
                                    </div>
                                    <div id="team" class="tab-pane fade">
                                         <!-- Team Members Row -->
  <div class="row">
    <!--<div class="col-lg-12">
      <h2 class="my-4">Our Team</h2>
    </div>-->
      <?php 
      foreach ($team as $value) {?>
                                          <div class="col-lg-4 col-sm-6 text-center mb-4">
                                              <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo base_url().'uploads/members/'.$value["photo"];?>" alt="<?php echo $value["mname"];?>">
      <h3><?php echo $value["mname"];?>
        <small><?php echo $value["designation"];?></small>
      </h3>
      <p><?php echo $value["description"];?></p>
    </div>                              
                                                                <?php    }?>
    
      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12">
                            <form method="post" action="<?php echo base_url(); ?>payment">
                                <input type="hidden" class="form-control" name="project_id" value="<?php echo $project['pid']; ?>">
                                <div class="row project-details">
                                        <h4>Project Details</h4>
                                    <ul>
                                        <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/capital.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>Project Value</h5>
                                                <h6><?php echo number_format($project['projectValue']); ?></h6>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/earnings.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>Country</h5>
                                                <h6><?php echo $project['country']; ?></h6>
                                            </div>
                                        </li>
                                        <!-- <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/economic-investment.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>State</h5>
                                                <h6><?php echo $project['state']; ?></h6>
                                            </div>
                                        </li> -->
                                        <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/invention.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>Reservation Type</h5>
                                                <h6><?php echo $project['investmentType']; ?></h6>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/growth.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>Minimum Reservation</h5>
                                                <h6><?php echo $project['minimumInvestment']; ?></h6>
                                            </div>
                                        </li>
                                        <!-- <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/investment.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>Gross Income</h5>
                                                <h6><?php echo $project['grossIncome']; ?></h6>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/investment-2.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>Est. yield for 1<sup>st</sup> year</h5>
                                                <h6><?php echo $project['yieldFor1stYear']; ?></h6>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/line-chart.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>Est. yield for 2<sup>nd</sup> year</h5>
                                                <h6><?php echo $project['yieldFor2ndYear']; ?></h6>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/money.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>Est. yield for 3<sup>rd</sup> year</h5>
                                                <h6><?php echo $project['yieldFor3rdYear']; ?></h6>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-lg-3 col-sm-3 col-xs-3">
                                                <img src="<?php echo base_url(); ?>assets/home/img/detail/profits-1.png" class="img-responsive">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-xs-9">
                                                <h5>Project IRR</h5>
                                                <h6><?php echo $project['projectedIRR']; ?></h6>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="row form-group">
                                        <input type="number" class="form-control" id="invetAmount" placeholder="Enter Invest Amount" min="<?php echo $project['minimumInvestment']; ?>" name="investAmount" required onblur="checkMinAmount()">
                                    </div>
                                    <script>
                                        var minAmount = "<?php echo $project['minimumInvestment']; ?>";
                                        function checkMinAmount() {
                                            var btn = document.getElementById('invest-now');
                                            var invetAmount = document.getElementById('invetAmount');
                                            if(parseInt(invetAmount.value) < parseInt(minAmount)){
                                                toastr.options = {
                                                    "closeButton": true,
                                                    "debug": false,
                                                    "newestOnTop": false,
                                                    "progressBar": false,
                                                    "preventDuplicates": false,
                                                    "onclick": null,
                                                    "showDuration": "300",
                                                    "hideDuration": "1000",
                                                    "timeOut": "5000",
                                                    "extendedTimeOut": "1000",
                                                    "showEasing": "swing",
                                                    "hideEasing": "linear",
                                                    "showMethod": "fadeIn",
                                                    "hideMethod": "fadeOut"
                                                }
                                                toastr.error('Invalid Amount.<br> Minumum Investment amount is $' + minAmount);
                                                btn.disabled = true;
                                            }else{
                                                btn.disabled = false;
                                            }
                                        }
                                    </script>
                                    <div class="row form-group">
                                        <input type="submit" class="btn" id="invest-now" value="Reserve Now" />
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>