
<section class="projects organizations">
    <div class="row">
        <div class="container">
            <h3 class="pull-left cat-title" >Organizations</h3>
        </div>
    </div>
    <div class="row">

        <div class="container">

            <div class="row" id="project-row">
				<?php foreach ($organizations as $key => $project) :
                $data['project']=$project;
                $string = $this->load->view('partial/productBox',$data , TRUE);
                echo $string;
      ?>

				
				<?php endforeach; ?>
			</div>
        </div>
    </div>
</section>

<section class="projects companies">
    <div class="row">
        <div class="container">
            <h3 class="pull-left cat-title">Compaigns</h3>
        </div>
    </div>
    <div class="row">

        <div class="container">

            <div class="row" id="project-row">
                <?php foreach ($companies as $key => $project) :
                $data['project']=$project;
                $string = $this->load->view('partial/productBox',$data , TRUE);
                echo $string;
      ?>

                
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
           
        <section class="serv">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
                    <div class="row serv-item item-1">
                        <h2><i class="fas fa-credit-card"></i></h2>
                        <div class="text-sec-1">
                        <h4>EDUCATION</h4>
                        <p>Build reliable supporters</p>
                        <p>Manage your supporters and funds easily</p>
                        <p>Play part any education of children around the world</p>
                        </div>
                         <a href="<?php echo base_url('campaign/add'); ?>" class="btn start-campaign">List Your Organization</a>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
                    <div class="row serv-item item-2">
                        <h2><i class="fas fa-hand-holding-usd"></i></h2>
                        <h4>Church</h4>
                        <div class="text-sec">
                        <p>Manage your members</p>
                        <p>Collect Tithes from members easily</p>
                        <p>Offer flexible way members to contribute</p>
                        </div>
                        <a href="<?php echo base_url('campaign/add'); ?>" class="btn start-campaign oneline-ext-margin">List Your Organization</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
                    <div class="row serv-item item-3">
                        <h2><i class="fas fa-clock"></i></h2>
                        <h4>Non profit</h4>
                        <div class="text-sec">
                        <p>Grow your organization supporters</p>
                        <p>Manage your donors and donation</p>
                        <p>Get exposure of your organization</p>
                        </div>
                        <a href="<?php echo base_url('campaign/add'); ?>" class="btn start-campaign oneline-ext-margin">List Your Organization</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
                    <div class="row serv-item item-4">
                        <h2><i class="fas fa-chart-line"></i></h2>
                        <h4>Community organization</h4>
                        <div class="text-sec">
                        <p>Build and grow your organization supporters</p>
                        <p>Manage your supporters and your funds</p>
                        <p>Get enough exposure of your organization</p>
                        <p>Build reliable donors</p>
                        </div>
                        <a href="<?php echo base_url('campaign/add'); ?>" class="btn start-campaign">List Your Organization</a>
                    </div>
                </div>
            </div>
        </section>
        
