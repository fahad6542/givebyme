<div class="col-lg-4 col-sm-4 col-xs-12">
                            <div class="row project-item">
                               
                                <div class="row">
                                    <a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid']; ?>">
                                      <img src="<?php 
                                                    $images = explode(",", $project['images']);
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
                                        <h4><a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid']; ?>" title="<?php echo $project['title']; ?>"><?php 
                                            if (strlen($project['title'])>50) {
                                                $wr=wordwrap($project['title'],50,':');
                                                $strs=explode(":",$wr);
                                                echo $strs[0]. " ...";
                                            }else{
                                              echo $project['title']; 
                                            }
                                         ?></a></h4>
                                    </div>
                                    <?php if ($project['projectValue']!=0 && $project['projectValue']!="N/A") {?>
                                      
                                    
                                    <div class="row pro-pln">
                                        <div class="col-lg-6 col-sm-6 col-xs-6 no-padding">
                                            <div class="row plan-nam">
                                                <h4>Funding Goal</h4>
                                            </div>
                                            <div class="row">
                                                <h5>$<?php echo number_format($project['projectValue']) ?></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-6 no-padding ">
                                            <div class="row plan-nam">
                                                <h4>Fund raised</h4>
                                            </div>
                                            <div class="row">
                                                <h5>$<?php echo $project['currentInvestmentAmount'] ?></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <?php }?>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-xs-12">
                                           <!-- <a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid']; ?>" class="btn investnow">
                                                Organizing
                                            </a>-->
                                        </div>
                                      
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
