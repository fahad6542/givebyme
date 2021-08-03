<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Add Campaign</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <form method="post" role="form" id="form_project" action="<?php echo base_url(); ?>company/save" class="form-horizontal campaignFrm" enctype="multipart/form-data">
                <input type="hidden" name="pro_type" value="company">
                <div class="panel panel-default tabs">
                    <?php echo $nav_tabs;?>
                    <div class="panel-body tab-content">
                        <div class="tab-pane active" id="tab-first">
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Compaign Name</label>
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
                                <label class="col-md-3 col-xs-12 control-label">Category</label>
                                <div class="col-md-6 col-xs-12">
                                    <!-- <input type="text" class="tagsinput" value="First,Second,Third" /> -->
                                    <select class="industries form-control" name="industries[]" multiple="multiple" required>
                                        <?php foreach ($industries as $key => $industry) : ?>
                                        <option value="<?php echo $industry['iid'] ?>"><?php echo $industry['industryName'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="help-block"><?= form_error('industries') ?></span>
                                </div>
                            </div>
                         <input type="hidden" value="0" name="dealtype">
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Compaign Images</label>
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
                            <input type="hidden" class="form-control" name="minimumInvestment" value="0" required/>
                            <input type="hidden" class="form-control" name="maximumInvestments" value="0" required/>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Email</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="email" class="form-control" name="email" required/>
                                    <span class="help-block"><?= form_error('email') ?></span>
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
