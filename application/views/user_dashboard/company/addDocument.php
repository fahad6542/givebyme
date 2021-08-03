<?php

/* 
 * Added By Fahad
 */
?>

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Upload Documents</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" role="form" id="form_project" action="<?php echo base_url(); ?>company/savedoc" class="form-horizontal" enctype="multipart/form-data">
                            <div class="panel panel-default tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li><a href="#tab-first" role="tab" data-toggle="tab">Add Company</a></li>
                                    <li class="active"><a href="#tab-second" role="tab" data-toggle="tab">Upload Documents</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Add Team Members</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Add Project</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Add Installment Details</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Add Bank Account Info</a></li>
                                
                                </ul>
       <?php echo $this->session->flashdata('Success'); ?>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="file-row-container">
                                            <div class="row file-row" >
                                            <div class="form-group">
                                                <label class="col-md-1 col-xs-12 control-label">Upload Files</label>
                                                <div class="col-md-3 col-xs-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-body">
                                                             <div id="project-image"></div>
                                                            <div class="project-image-drag-drop"></div>
                                                            <div class="project-image-progress"></div>
                                                            <input type="file" class="form-control" name="documents[]" required accept="application/pdf,application/msword,
                                                                   application/vnd.openxmlformats-officedocument.wordprocessingml.document" multiple="multiple" title="Use Ctrl to select multiple documents"/>
                                                            <span class="help-block"><?= form_error('documents') ?></span>
                                                                            </div>
                                                                        </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                <div class="panel-footer">
                                    <button class="btn btn-primary pull-right">Save<span class="fa fa-floppy-o fa-right"></span></button>
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