<section class="projects">
    <div class="row">
        <div class="container">
            <div class="row">
                <?php if (sizeof($projects)) : ?>
                    <?php foreach ($projects as $key => $project) : ?>


                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="row project-item">
                            <div class="row">
                                <a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid']; ?>">
                                    <!-- <img src="<?php //echo base_url(); ?>assets/home/img/3.jpg" class="img-responsive"> -->
                                    <img src="<?php 
                                                $images = explode(", ", $project['images']);
                                                echo base_url() . $images[0];
                                                ?>"
                                        class="img-responsive"
                                        onerror="this.src='<?php echo base_url(); ?>assets/home/img/not_found.jpg'"
                                        title="<?php echo $project['title'] ?>"
                                        alt="<?php echo $project['title'] ?>"
                                    />
                                </a>
                        
                            </div>
                            <div class="row project-detail">
                                <div class="row">
                                    <h4><a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid']; ?>"><?php echo $project['title'] ?></a></h4>
                                                 
                                </div>
                                <div class="row pro-pln">
                                    <div class="col-lg-6 col-sm-6 col-xs-6 no-padding">
                                        <div class="row plan-nam">
                                            <h4>Campaign value</h4>
                                        </div>
                                        <div class="row">
                                            <h5><?php echo number_format($project['projectValue']) ?></h5>
                                        </div>
                                    </div>
                                   <!-- <div class="col-lg-4 col-sm-4 col-xs-4 no-padding">
                                        <div class="row plan-nam">
                                            <h4>estimated annual return</h4>
                                        </div>
                                        <div class="row">
                                            <h5><?php echo number_format($project['estimatedReturn']) ?>%</h5>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6 col-sm-6 col-xs-6 no-padding ">
                                        <div class="row plan-nam">
                                            <h4>fund raised</h4>
                                        </div>
                                        <div class="row">
                                            <h5>1500</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                        <a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid']; ?>" class="btn investnow">Reserve now</a>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                        <a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid']; ?>" class="btn detail">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if (!sizeof($projects)) : ?>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <h4 class="text-center">No Projects Found</h4>
                        </div>
                    </div>
                <?php endif; ?>
		    </div>
        </div>
    </div>
</section>
