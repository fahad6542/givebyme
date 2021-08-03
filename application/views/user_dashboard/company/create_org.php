<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Add Organization</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <form method="post" role="form" id="form_project" action="<?php echo base_url(); ?>company/save" class="form-horizontal campaignFrm" enctype="multipart/form-data">
                <input type="hidden" name="pro_type" value="organization">
                <div class="panel panel-default tabs">
                    <?php echo $nav_tabs;?>
                    <div class="panel-body tab-content">
                        <div class="tab-pane active" id="tab-first">
                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Organization Name</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="text" class="form-control" name="title" required/>
                                    <span class="help-block"><?= form_error('title') ?></span>
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Add Logo</label>
                                <div class="col-md-6 col-xs-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                            <input type="file" class="form-control" name="logo" required/>
                                            <span class="help-block"><?= form_error('logo') ?></span>
                                                            </div>
                                                        </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Add Image</label>
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
                                <label class="col-md-3 col-xs-12 control-label">Description about your organization</label>
                                <div class="col-md-6 col-xs-12">
                                    <textarea class="form-control" name="description" rows="5" cols="150" id="desTinyc" ></textarea>
                                    <span class="help-block"><?= form_error('description') ?></span>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Type</label>
                                <div class="col-md-6 col-xs-12">
                                    <select class="form-control" name="industries[]"  required>
                                        <?php foreach ($industries as $key => $industry) : ?>
                                        <option value="<?php echo $industry['iid'] ?>"><?php echo $industry['industryName'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="help-block"><?= form_error('industries') ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Cause / Awerancess</label>
                                <div class="col-md-6 col-xs-12">
                                    <select class="form-control" name="cid" required>
                                        <?php foreach ($causes as $key => $cause) : ?>
                                        <option value="<?php echo $cause['cid'] ?>"><?php echo $cause['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="help-block"><?= form_error('cid') ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Donation Amount</label>
                                <div class="col-md-4">
                                <ul class="plan-amount">
                                    <li><span class="currency-lable">Plan I $</span><input type="number" name="plan[]" class="form-control required-field" required="required" value="10"><span class="interval">/month</span></li>
                                    <li><span class="currency-lable">Plan II $</span><input type="number" name="plan[]" class="form-control required-field" required="required" value="25"><span class="interval">/month</span></li>
                                    <li><span class="currency-lable">Plan III $</span><input type="number" name="plan[]" class="form-control required-field" required="required" value="50"><span class="interval">/month</span></li>
                                    <li><span class="currency-lable">Plan IV $</span><input type="number" name="plan[]" class="form-control required-field" required="required" value="100"><span class="interval">/month</span></li>
                                </ul>
                               </div>
                            </div>

                         
                            <input type="hidden" value="0" name="dealtype">
                            <input type="hidden" name="projectValue" value="0"/>
                            <input type="hidden" name="minimumInvestment" value="0" required/>
                            <input type="hidden" name="maximumInvestments" value="0" required/>
                            <input type="hidden" name="email" value="nomail@nomail.com" />
                            <input type="hidden" name="location" value="NA" />
                            <input type="hidden" name="country" value="NA" />
                            <input type="hidden" name="city" value="NA" />
                            <input type="hidden" name="pstate" value="NA" />
                <div class="panel-footer">
                        <button class="btn btn-primary pull-right save-org">Save<span class="fa fa-floppy-o fa-right"></span></button>
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