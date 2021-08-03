<!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Edit Campaign<?php // echo $companyItem["pro_type"];?></li>
            </ul>
<?php //echo "<pre>"; print_r($companyItem);?>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" role="form" id="form_project" action="<?php echo base_url(); ?>Company/update" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $companyItem["pid"];?>" name="pid" />
                            <input type="hidden" value="<?php echo $companyItem["status"];?>" name="status" />
                            <input type="hidden" value="<?php echo $companyItem["pro_type"];?>" name="pro_type" />
                            
                            <div class="panel panel-default tabs">
                                <?php echo $nav_tabs;?>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Campaign Name</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="title" value="<?php echo $companyItem["title"];?>" min="40" max="50"  required/>
                                                <span class="help-block"><?= form_error('title') ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Description</label>
                                            <div class="col-md-6 col-xs-12">
                                                <textarea class="form-control" name="description" rows="5" cols="150" id="desTinyc"><?php echo $companyItem["description"];?></textarea>
                                                <span class="help-block"><?= form_error('description') ?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Category</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                        <!-- <input type="text" class="tagsinput" value="First,Second,Third" /> -->
                                                                        <select class="industries form-control" name="industries[]" multiple="multiple" required>
                                                                                <?php foreach ($industries as $key => $industry) : ?>
                                                                                <option value="<?php echo $industry['iid'] ?>"><?php echo $industry['industryName'] ?></option>
                                                                                <?php endforeach; ?>
                                                                        </select>
                                                                        <?php 
                                                                $selectedIds = $companyItem['industries'];
                                                                $selectedIds = explode(",", $selectedIds);
                                                                                // print_r($selectedIds);
                                                                ?>
                                                                        <script>
                                                                                var ids = new Array();
                                                                                var pausecontent = new Array();
                                                                                <?php foreach ($selectedIds as $key => $val) { ?>
                                                                                        ids.push('<?php echo $val; ?>');
                                                                                <?php 
                                                                } ?>
                                                                                console.log(ids);
                                                                                setTimeout(function(){
                                                                                        $('.industries').val(ids);
                                                                                        console.log(1);
                                                                                }, 5000);
                                                                        </script>
                                                                        <span class="help-block"><?= form_error('industries') ?></span>
                                                                </div>
                                                        </div>
                                             <input type="hidden" name="dealtype" value="0">         
                                        
                                        
                                        <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Campaign Images</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="gallery" id="links">
                             
                                    <?php foreach (explode(",",$companyItem["images"]) as $img){?>
                                        
                                         <a class="gallery-item" href="#" data-gallery>
                                <div class="image"> 
                                    <input type="hidden" name="img[]" value="<?php echo $img;?>" />
                                    <img src="<?php echo base_url().trim($img);?>" class="img-responsive" style="height: 100px;"  onerror="this.src='<?php echo base_url();?>assets/home/img/not_found.jpg'"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>                              
                            </a>
                                   <?php }?>
                                    
                                    
                                    
                                    </div>
                                    <input type="file" class="form-control" name="projectImages[]"   multiple="multiple" accept="image/*"/>
                                    <span class="help-block"><?= form_error('projectValue') ?></span>
                                </div>
                            </div>
                                        
                                        <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Funding Goal</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="number" class="form-control" name="projectValue"  value="<?php echo $companyItem["projectValue"];?>" required/>
                                    <span class="help-block"><?= form_error('projectValue') ?></span>
                                </div>
                            </div>
                            
                            <input type="hidden" class="form-control" name="minimumInvestment" value="0" required/>
                            <input type="hidden" class="form-control" name="maximumInvestments" value="0" required/>
                            <?php /*
                             <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Minimum Reservation</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="number" class="form-control" name="minimumInvestment" value="<?php echo $companyItem["minimumInvestment"];?>" required/>
                                    <span class="help-block"><?= form_error('minimumInvestment') ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Maximum Reservation</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="number" class="form-control" value="<?php echo $companyItem["maximumInvestments"];?>" name="maximumInvestments" required/>
                                    <span class="help-block"><?= form_error('maximumInvestments') ?></span>
                                </div>
                            </div>
                            
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Website</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="web_url" value="<?php echo $companyItem["web_url"];?>" required/>
                                                <span class="help-block"><?= form_error('web_url') ?></span>
                                            </div>
                                        </div>
                                        */?>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="email" class="form-control" name="email" value="<?php echo $companyItem["email"];?>" required/>
                                                <span class="help-block"><?= form_error('email') ?></span>
                                            </div>
                                        </div>
                                        <?php /*
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Contact No</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="contact_no" value="<?php echo $companyItem["contact_no"];?>" required/>
                                                <span class="help-block"><?= form_error('contact_no') ?></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Social Links</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="row">
                                                    <?php $slinks = json_decode($companyItem["social_links"]);?>
                                                    <div class="col-md-4 col-xs-12">
                                                        <input type="text" class="form-control" name="fb" placeholder="Facebook" value="<?php echo $slinks->fb;?>" required/>
                                                    </div>
                                                    <div class="col-md-4 col-xs-12">
                                                        <input type="text" class="form-control" name="tw" placeholder="Twitter"  value="<?php echo $slinks->tw;?>" />
                                                       </div>
                                                    <div class="col-md-4 col-xs-12">
                                                        <input type="text" class="form-control" name="insta" placeholder="Instagram"  value="<?php echo $slinks->insta ;?>"  />
                                                    </div>
                                                </div>
                                                <span class="help-block"><?= form_error('social_links') ?></span>
                                            </div>
                                        </div>
                                        */ ?>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Address</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="location" value="<?php echo $companyItem["location"];?>" required/>
                                                <span class="help-block"><?= form_error('location') ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Country</label>
                                            <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" name="country" required>
                                                   <?php foreach ($couList as $c) {
                                                       $selected="";
                                                       if ($companyItem["country"]==$c["name"]) {
                                                           $selected="selected='selected'";
                                                       }
                                                        ?>
                                                    <option value="<?php echo $c["name"];?>" <?php echo $selected;?> ><?php echo $c["name"];?></option>
                                                    <?php }?>
                                                    
                                                </select>
                                                <span class="help-block"><?= form_error('country') ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">State</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="pstate" value="<?php echo $companyItem["pstate"];?>" required/>
                                                <span class="help-block"><?= form_error('pstate') ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">City</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="city" value="<?php echo $companyItem["city"];?>" required/>
                                                <span class="help-block"><?= form_error('city') ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Youtube Video URL</label>
                                            <div class="col-md-6 col-xs-12">
                                                <?php if ($companyItem['video_url']!="" && $companyItem["video_url"]!="N/A"){?>
                                                    <input type="text" class="form-control" name="video_url" value="<?php echo $companyItem["video_url"];?>" />
                                                <a href="<?php echo $companyItem["video_url"];?>" target="_blank" >Watch video </a>
                                                <?php }else{?>
                                                    <input type="text" class="form-control" name="video_url" />
                                                <?php }?>
                                                <span class="help-block"><?= form_error('video_url') ?></span>
                                            </div>
                                        </div>
                                        <?php /*
					<div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Campaign Logo</label>
                                            <div class="col-md-6 col-xs-12">
					                            <div class="panel panel-default">
					                                <div class="panel-body">
                                                                            <input type="hidden" name="logo" value="<?php echo $companyItem["logo"];?>" />
                                                                            <img src="<?php echo base_url().'assets/uploads/projects/'.$companyItem["logo"];?>" height="100" width="100" alt="No logo found." title="Click Upload to replace old Logo" />
                                                                            <input type="file" class="form-control" name="newlogo" />
                                                        <span class="help-block"><?= form_error('logo') ?></span>
					                                </div>
					                            </div>
                                            </div>
                                        </div>
                                        <!--
                                        <h4>Past Earnings</h4>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">1st year Gross Revenue</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="yieldFor1stYear" value="<?php echo $companyItem["yieldFor1stYear"];?>"  min="0"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">2nd year Gross Revenue</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="yieldFor2ndYear" value="<?php echo $companyItem["yieldFor2ndYear"];?>" min="0"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">3rd year Gross Revenue</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="yieldFor3rdYear" value="<?php echo $companyItem["yieldFor3rdYear"];?>" min="0"/>
                                            </div>
                                        </div>
                                        
                                        <h4>Past Profit</h4>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">1st year Net Income</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="grossIncome" value="<?php echo $companyItem["grossIncome"];?>" min="0"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">2nd year Net Income</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="netIncom" value="<?php echo $companyItem["netIncom"];?>" min="0"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">3rd year Net Income</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="totalExpenses" value="<?php echo $companyItem["totalExpenses"];?>" min="0"/>
                                            </div>
                                        </div>
                                        -->
                                        */ ?>
                                <div class="panel-footer">
                                    <?php /* <a href="<?php echo base_url().'document/create/'.$companyItem["pid"];?>" title="Don't Save" class="btn btn-primary pull-right left-gap" role="button">Next </a>
                                    */ ?>
                                    <button class="btn btn-primary pull-right">Update<span class="fa fa-floppy-o fa-right"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->