<?php
/* 
 * Added By Fahad
 */
?><!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                <li><a href="#">Offer</a></li>
                <li><a href="#"><?php echo $project["title"]; ?></a></li>
                <li class="active">Bank Info [Edit]</li>
</ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                
                <div class="row">
                    <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <?php echo $nav_tabs;?>

                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        
                                         <!--project info-->
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Title</th><td><?php echo $project["title"];?></td>
                                                <th></th><td></td>
                                            </tr>
                                            <tr>
                                                <th>Current Status</th>
                                                <td><?php if ($project["status"]=="1") { ?>
                                                    <span class="label label-success label-form">Active</span>
                                                <?php }else{ ?>
                                                    <span class="label label-danger label-form">Inactive</span>
                                                <?php };?></td>
                                                <th></th><td></td>
                                            </tr>
                                            </thead>
                                        </table>
                                        
                                        <form method="post" id="bankForm" action="<?php echo base_url(); ?>bank/update" >  
                                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $Item["id"] ?>" />
                                            <input type="hidden" name="project" value="<?php echo $project["pid"];?>" >
                                        
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">Account Title</label>
                                                    <div class="col-md-3 col-xs-12">
                                                        <input type="text" class="form-control" name="title" id="title" title=" Account Title" value="<?php echo $Item["title"] ?>" required/>
                                                        <span class="help-block"><?= form_error('title') ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                                    
                                                    
                                            <div class="row">
                                                <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Paypal Bussiness Email</label>
                                                    <div class="col-md-3 col-xs-12">
                                                        <input type="email" class="form-control" name="email" title=""  value="<?php echo $Item["email"] ?>" />
                                                        <span class="help-block"><?= form_error('email') ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                             <div class="row">
                                                <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Card No</label>
                                                    <div class="col-md-3 col-xs-12">
                                                        <input type="text" class="form-control" name="card_no" title=""  value="<?php echo $Item["card_no"] ?>" />
                                                        <span class="help-block"><?= form_error('card_no') ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                    
                                            <div class="row">
                                                <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Description</label>
                                                    <div class="col-md-3 col-xs-12">
                                                        <textarea class="form-control" name="description" title=""><?php echo $Item["description"] ?></textarea>
                                                        <span class="help-block"><?= form_error('description') ?></span>
                                                    </div>
                                         
                                        </div>
                                            </div>
                                            <div class="row">
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