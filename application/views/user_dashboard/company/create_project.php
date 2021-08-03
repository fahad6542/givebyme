<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Add Project</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <form method="post" role="form" id="form_project" action="<?php echo base_url(); ?>company/save" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="pro_type" value="project">
                <div class="panel panel-default tabs">
                    <?php echo $nav_tabs;?>
                    <div class="panel-body tab-content">
                        <div class="tab-pane active" id="tab-first">
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Project Name</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name="title" required/>
                                    <span class="help-block"><?= form_error('title') ?></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Description</label>
                                <div class="col-md-6 col-xs-12">
                                    <textarea class="form-control" name="description" rows="5" cols="150" id="desTinyc" ></textarea>
                                    <span class="help-block"><?= form_error('description') ?></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Industries</label>
                                <div class="col-md-6 col-xs-12">
                                    <select class="industries form-control" name="industries[]" multiple="multiple" required>
                                        <?php foreach ($industries as $key => $industry) : ?>
                                        <option value="<?php echo $industry['iid'] ?>"><?php echo $industry['industryName'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="help-block"><?= form_error('industries') ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Deal Type</label>
                                <div class="col-md-6 col-xs-12">
                                    <select class="form-control" name="dealtype" required>
                                        <?php foreach ($dealTypes as $key => $deal) : ?>
                                        <option value="<?php echo $deal['id'] ?>"><?php echo $deal['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="help-block"><?= form_error('dealtype') ?></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Project Images</label>
                                <div class="col-md-6 col-xs-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                            <input type="file" class="form-control" name="projectImages[]" multiple="multiple" required/>
                                            <span class="help-block"><?= form_error('projectImages') ?></span>
                                                            </div>
                                                        </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Funding Goal</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="number" class="form-control" name="projectValue" required/>
                                    <span class="help-block"><?= form_error('projectValue') ?></span>
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Minimum Reservation</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="number" class="form-control" name="minimumInvestment" required/>
                                    <span class="help-block"><?= form_error('minimumInvestment') ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Maximum Reservation</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="number" class="form-control" name="maximumInvestments" required/>
                                    <span class="help-block"><?= form_error('maximumInvestments') ?></span>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Partner</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="partner" required/>
                                                <span class="help-block"><?= form_error('partner') ?></span>
                                            </div>
                                        </div>
                            
                           
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Website</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name="web_url" required/>
                                    <span class="help-block"><?= form_error('web_url') ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Email</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="email" class="form-control" name="email" required/>
                                    <span class="help-block"><?= form_error('email') ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Contact No</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name="contact_no" required/>
                                    <span class="help-block"><?= form_error('contact_no') ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Social Links</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12">
                                            <input type="text" class="form-control" name="fb" placeholder="Facebook" required/>
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <input type="text" class="form-control" name="tw" placeholder="Twitter" />
                                           </div>
                                        <div class="col-md-4 col-xs-12">
                                            <input type="text" class="form-control" name="insta" placeholder="Instagram"  />
                                        </div>
                                    </div>
                                    <span class="help-block"><?= form_error('social_links') ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Address</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name="location" required/>
                                    <span class="help-block"><?= form_error('location') ?></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Country</label>
                                <div class="col-md-6 col-xs-12">
                                    <select class="form-control select" name="country" required>
                                       <?php foreach ($couList as $c) {
                                            ?>
                                        <option value="<?php echo $c["name"];?>"><?php echo $c["name"];?></option>
                                        <?php }?>

                                    </select>
                                    <span class="help-block"><?= form_error('country') ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">State</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name="pstate" required/>
                                    <span class="help-block"><?= form_error('pstate') ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">City</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name="city" required/>
                                    <span class="help-block"><?= form_error('city') ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Youtube Video URL</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name="video_url" />
                                    <span class="help-block"><?= form_error('video_url') ?></span>
                                </div>
                            </div>
                            
                             <h4>Past Earnings</h4>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">1st year Gross Revenue</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="yieldFor1stYear" min="0"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">2nd year Gross Revenue</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="yieldFor2ndYear" min="0"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">3rd year Gross Revenue</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="yieldFor3rdYear" min="0"/>
                                            </div>
                                        </div>
                                        
                                        <h4>Past Profit</h4>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">1st year Net Income</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="grossIncome" min="0"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">2nd year Net Income</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="netIncom" min="0"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">3rd year Net Income</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="number" class="form-control" onkeyup="" name="totalExpenses" min="0"/>
                                            </div>
                                        </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary pull-right">Save<span class="fa fa-floppy-o fa-right"></span></button>
                    </div>
                </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
