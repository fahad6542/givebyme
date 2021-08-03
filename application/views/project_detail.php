<script type="text/javascript">
    
    function removeDummy() {
        
        document.getElementById("toogle-btn").style.display = "none";
        var elem = document.getElementById('invest-now-toogle');
        elem.parentNode.removeChild(elem);
        return false;
    }
</script>
<?php 
    $displayTitle="Campaign";
    if ($project["pro_type"]=="company") {$displayTitle="Campain";}

    function getYoutubeEmbedUrl($url){

        $urlParts   = explode('/', $url);
        $vidid      = explode( '&', str_replace('watch?v=', '', end($urlParts) ) );

        return 'https://www.youtube.com/embed/' . $vidid[0] ;
    }
    //echo print_r($this->load->helper('url'));
    $images = explode(",", $project['images']);
?>

<section class="project-detail">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php echo $project['title']; ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php if ($project['video_url']!="" && $project["video_url"]!="N/A") {?>
                                    <iframe id="embedded_video" src="<?php echo getYoutubeEmbedUrl($project['video_url']);?>?HD=1;rel=0;showinfo=0&amp;wmode=transparent" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen="" height="430" width="786" frameborder="0"></iframe>

                                <?php }else{
                                    
                                    foreach ($images as $key => $image)
                                        : ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo base_url() ?><?php echo $image; ?>" class="img-responsive">
                                        </div>
                                    <?php endforeach; ?>
                                           <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                                <?php }?>
                             
                            </div>
                            
                        </div>
                        <br>
                        <p><?php if ($project['description']!="N/A") {echo $project['description'];} ?></p>
                    </div>
                    <div class="row">
                        <ul class="nav nav-tabs" style="visibility: hidden;">
                            <?php if ($project["pro_type"]=="project") {?>
                            <li class="active"><a data-toggle="tab" href="#about">About Property</a></li>
                            <?php }?>
                            <!--<li><a data-toggle="tab" href="#finance">Financial</a></li>-->
                            <?php if ($project["pro_type"]=="company") {?>
                                <li class="active"><a data-toggle="tab" href="#company">Campain Info</a></li>
                            <?php }
                                  if (sizeof($document)) {
                            ?>
                            <li><a data-toggle="tab" href="#documents">Documents</a></li>
                            <?php }
                            if (sizeof($team)) {

                            ?>
                                <li><a data-toggle="tab" href="#team">Team</a></li>
                            <?php }?>

                        </ul>

                        <div class="tab-content">
                            <!--Not applicable-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <form role="form" action="<?php echo base_url();?>stripePost" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>"
                                                    id="payment-form">
                        <input type="hidden" class="form-control" name="pid" value="<?php echo $project['pid']; ?>">
                        <input type="hidden" class="form-control" name="pname" value="<?php echo $project['title']; ?>">
                        <div class="row project-details">
                                <h4><?php echo $displayTitle;?> Details</h4>
                            <ul>
                                <li class="row">
                                    <div class="col-lg-3 col-sm-3 col-xs-3">
                                        <img src="<?php echo base_url(); ?>assets/home/img/detail/capital.png" class="img-responsive">
                                    </div>
                                    <div class="col-lg-9 col-sm-9 col-xs-9">
                                        <h5>Funding Goal</h5>
                                        <h6><?php echo number_format($project['projectValue']); ?></h6>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-lg-3 col-sm-3 col-xs-3">
                                        <img src="<?php echo base_url(); ?>assets/home/img/detail/capital.png" class="img-responsive">
                                    </div>
                                    <div class="col-lg-9 col-sm-9 col-xs-9">
                                        <h5>Fund Raised</h5>
                                        <h6><?php echo number_format($project['currentInvestmentAmount']); ?></h6>
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
                                
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row form-group">
                                <label class='control-label'>Amount</label>
                                <input type="number" class="form-control" id="invetAmount" placeholder="Amount" nomin="10" nomin="<?php echo $project['minimumInvestment']; //onblur="checkMinAmount()" ?>" name="investAmount" required
                                 />
                                <div id="form-part" class="collapse">
                                    <p></p>
                                    <div class='form-row row'>
                            <div class=' form-group required'>
                                <label class='control-label'>Name</label> <input
                                    class='form-control' name="name" size='4' type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class=' form-group required'>
                                <label class='control-label'>Email</label> 
                                <input type="email" name="email" class='form-control' size='4'>
                            </div>
                        </div>
     
                        <div class='form-row row'>
                            <div class='form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
      
                        <div class='form-row row card-info'>
                            <div class='col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
      
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
                                        <div class="row form-group">
                                            
                                    <textarea name="description" class="form-control" row="3" placeholder="I Doanted because"></textarea>
                                </div>
                                <div class="row form-group">
                                <input type="submit" class="btn" id="invest-now" value="Donate Now" />
                            </div>
                            </div>
                           
                            <div class="row form-group" id="toogle-btn">
                                <input type="button" class="btn" data-toggle="collapse" data-target="#form-part" id="invest-now-toogle" value="Donate Now" onclick="removeDummy()" />
                            </div>
                           
                        </div>

                    </form>
                    <div class="row">
                        <div data-image="<?php echo base_url($images[0]); ?>"  class="sharethis-inline-share-buttons"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (count($relatedProjects)>0) {?>

<!--end of category-detail-sec-->
  <div class="related-campaign-slide aaaaaaaa">
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

                              <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="project-item">
                                  <div class="row1"> <a href="<?php echo base_url('invest/details/'.$project["pid"]); ?>">
                                    <img src="<?php 
                                                                $images = explode(",", $project['images']);
                                                                echo base_url() . $images[0];
                                                                ?>" class="img-responsive" onerror="this.src='<?php echo base_url('assets/home/img/not_found.jpg'); ?>'" title="" alt="<?php echo $project['title'] ?>"> </a> </div>
                                  <div class="row project-detail">
                                    <div class="row1">
                                      <h4><a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid']; ?>"><?php if (strlen($project['title'])>50) {
                                                $wr=wordwrap($project['title'],50,':');
                                                $strs=explode(":",$wr);
                                                echo $strs[0]. " ...";
                                            }else{
                                              echo $project['title']; 
                                            } ?></a></h4>
                                    </div>
                                    <div class="row1 pro-pln">
                                      <div class="col-lg-6 col-sm-6 col-xs-6 no-padding">
                                        <div class="row1 plan-nam">
                                          <h4>Fundings Goal</h4>
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
  <!--end of related-campaign-slide-->

<?php }?>


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
                                        $('#form-part').collapse('show');
                                    }else{
                                        btn.disabled = false;
                                    }
                                }
                                function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
                            </script>

 <div id="overlay">
  <div id="text">Processing your transaction via secure payment gateway. [SSL certified]. <div class="loader"></div></div>
</div>

 <!--Success Modal Templates-->
    <div id="modal-success" class="modal modal-message modal-success fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="glyphicon glyphicon-check"></i>
                </div>
                <div class="modal-title">Success</div>
                <div class="modal-body">We got your payment. <br> Thank you for your donation!</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                </div>
            </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
    </div>
    <!--End Success Modal Templates-->
    <!--Info Modal Templates-->
    <div id="modal-info" class="modal modal-message modal-info fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="modal-title">Alert</div>

                <div class="modal-body">You'vd got mail!</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                </div>
            </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
    </div>
    <!--End Info Modal Templates-->
    <!--Danger Modal Templates-->
    <div id="modal-danger" class="modal modal-message modal-danger fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="glyphicon glyphicon-fire"></i>
                </div>
                <div class="modal-title">Alert</div>

                <div class="modal-body"><?php if ($this->session->flashdata('modalError')) { echo $this->session->flashdata('modalError');}?></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                </div>
            </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
    </div>
    <!--End Danger Modal Templates-->
    <!--Danger Modal Templates-->
    <div id="modal-warning" class="modal modal-message modal-warning fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa fa-warning"></i>
                </div>
                <div class="modal-title">Warning</div>

                <div class="modal-body">Something is wrong please try again later.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">OK</button>
                </div>
            </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
    </div>
    <!--End Danger Modal Templates-->
