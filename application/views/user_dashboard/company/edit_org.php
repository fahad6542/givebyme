<!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Edit <?php echo $companyItem["pro_type"];?></li>
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
                                            <label class="col-md-3 col-xs-12 control-label">Organization Name</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="title" value="<?php echo $companyItem["title"];?>" min="40" max="50"  required/>
                                                <span class="help-block"><?= form_error('title') ?></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Company Logo</label>
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

                <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Organization Image</label>
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
                                    <span class="help-block"><?= form_error('projectImages') ?></span>
                                </div>
                            </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Description about your organization</label>
                                            <div class="col-md-6 col-xs-12">
                                                <textarea class="form-control" name="description" rows="5" cols="150" id="desTinyc"><?php echo $companyItem["description"];?></textarea>
                                                <span class="help-block"><?= form_error('description') ?></span>
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Type</label>
                                            <div class="col-md-6 col-xs-12">
                                                    <select class="form-control" name="industries[]" required>
                                        <?php foreach ($industries as $key => $industry) : ?>
                                        <option <?php if ($companyItem['industries']==$industry['iid']) {
                                            echo "selected='selected'";
                                        }?>value="<?php echo $industry['iid'] ?>"><?php echo $industry['industryName'] ?></option>
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
                                        <option <?php if ($companyItem['cid']==$cause['cid']) {
                                            echo "selected='selected'";
                                        }?> value="<?php echo $cause['cid'] ?>"><?php echo $cause['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="help-block"><?= form_error('cid') ?></span>
                                </div>
                            </div>

                                <input type="hidden" name="dealtype" value="0">         
                                
                                
                                        
                            <input type="hidden" class="form-control" name="projectValue"  value="<?php echo $companyItem["projectValue"];?>" required/>
                            
                            <input type="hidden" class="form-control" name="minimumInvestment" value="0" required/>
                            <input type="hidden" class="form-control" name="maximumInvestments" value="0" required/>
                            <input type="hidden" class="form-control" name="email" value="<?php echo $companyItem["email"];?>" required/>
                            <input type="hidden" class="form-control" name="location" value="<?php echo $companyItem["location"];?>" required/>
                            <input type="hidden" class="form-control" name="country" value="<?php echo $companyItem["country"];?>" required/>
                            <input type="hidden" class="form-control" name="pstate" value="<?php echo $companyItem["pstate"];?>" required/>
                            <input type="hidden" class="form-control" name="city" value="<?php echo $companyItem["city"];?>" required/>
                            <input type="hidden" class="form-control" name="video_url" value="<?php echo $companyItem["video_url"];?>" required />
                                        
                                <div class="panel-footer">
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