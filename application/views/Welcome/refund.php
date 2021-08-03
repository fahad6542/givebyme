<section class="projects">
    <div class="row text-center">
        <h3>Refund</h3>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">
                <h3>Lavniworld can Refund you at anytime</h3>
                <p>You can request a refund from us, whenever you feel something is not right, made a mistake in while donating, or when the campaign is flagged.</p>
                <p>Contact us below for the refund</p>
            </div>
            <div class="row terms">
                <form method="post" action="<?php echo base_url()."/Welcome/sendEmail";?>" id="contact-form">
            <div class="panel-body">
                                    <p>Feel free to contact us for any issues you might have with our products.</p>
                                    <input type="hidden" name="subject" value="Refund" >
                                    <input type="hidden" name="formTitle" value="Refund" >
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="senderName" class="form-control" placeholder="Your Name" required="required">
                                    </div> 
                                    <div class="form-group">
                                        <label>Your E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="youremail@domain.com" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Campaign Name</label>
                                        <input type="text" name="campaignName" class="form-control" placeholder="Campaign Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Amount</label>
                                        <input type="text" name="amount" class="form-control" placeholder="Amount" required="required">
                                    </div>                                
                                    <div class="form-group">
                                        <label>Reason</label>
                                        <textarea name="message" class="form-control" placeholder="Tell us the reason for your Refund " rows="3" required="required"></textarea>
                                    </div>                                
                                </div> 
                                    <button class="btn btn-success pull-right"><span class="fa fa-envelope-o"></span> Send</button>
                                
                </form>
            </div>
        </div>
    </div>
</section>

<?php if (count($runningProjects)>0) {?>

<!--end of category-detail-sec-->
  <div class="related-campaign-slidea">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Running Campaign </h3>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php 
                    $i=0;
                    $cl="active";
                foreach ($runningProjects as $project) {
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
                                  <div class="row1"> <a href="<?php echo base_url('campaign/detail/'.$project["pid"]); ?>">
                                    <img src="<?php 
                                                                $images = explode(",", $project['images']);
                                                                echo base_url() . $images[0];
                                                                ?>" class="img-responsive" onerror="this.src='<?php echo base_url('assets/home/img/not_found.jpg'); ?>'" 
                                                                title="<?php echo $project['title'] ?>" alt="<?php echo $project['title'] ?>"> </a> </div>
                                  <div class="row project-detail">
                                    <div class="row1">
                                      <h4><a href="<?php echo base_url('campaign/detail/').$project['pid'];?>"><?php echo $project['title'] ?></a></h4>
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
                                      <div class="col-lg-6 col-sm-6 col-xs-12"> <a href="<?php echo base_url('campaign/detail/'.$project["pid"]); ?>" class="btn investnow">Donate Now</a> </div>
                                      <div class="col-lg-6 col-sm-6 col-xs-12"> <a href="<?php echo base_url('campaign/detail/'.$project["pid"]); ?>" class="btn detail">View details</a> </div>
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
