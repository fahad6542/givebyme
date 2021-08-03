<?php
/* 
 * Added By Fahad
 */
?><!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Offer</a></li>
                <li class="active">Upload Documents</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <?php echo $nav_tabs;?>
            <?php echo $this->session->flashdata('Success'); ?>
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Title</th><td><?php echo $project["title"];?></td>
                                                <th>Deal Type</th><td><?php echo $project["pro_type"];?> equity</td>
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
                                        
                                        
                                        <!--document list starts-->
                                        <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                <th width="50">Sr. No</th>
                                                <th width="100">Title</th>
                                                <th width="100">File</th>
                                                <th width="100">Action</th>
                                                </tr>
                                                </thead>
                                            <tbody>              
                                        <?php $i=0; foreach ($documentList as $key => $row) :?>
                                                <tr>
                                                    <td><?php echo ++$i; ?></td>
                                                    <td><strong><?php echo $row["title"]; ?></strong></td>
                                                    <td><a href="<?php echo base_url()."uploads/document/".$row["file_name"]; ?>" download><span class="fa fa-download"></span></a></td>
                                                    <td><a href="<?php echo base_url()."document/delete/".$row["id"]; ?>"><span class="fa fa-trash-o fa-right"></span></a></td>
                                        </tr>
                                                <?php endforeach; ?>
                                        
                                            </tbody>
                                        </table>
                                    </div>
                                        </div>
                                        <!--document list ends--->
                                        <div class="row">
                                         <form method="post" role="form" id="form_project" action="<?php echo base_url(); ?>document/save" class="form-horizontal" enctype="multipart/form-data">
                                             <input type="hidden" name="project" value="<?php echo $project["pid"];?>" >
                                        
                                            <div class="row" >
                                                <label class="col-md-1 col-xs-12 control-label">Title</label>
                                                <div class="col-md-3 col-xs-12">
                                                    <input type="text" class="form-control" name="title" title="Will be displayed on download link" required/>
                                                    <span class="help-block"><?= form_error('title') ?></span>
                                                </div>
                                                
                                            <div class="form-group">
                                                <label class="col-md-1 col-xs-12 control-label">Upload File</label>
                                                <div class="col-md-3 col-xs-12">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-body">
                                                             <input type="file" class="form-control" name="file_name" required accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document"/>
                                                            <span class="help-block"><?= form_error('file_name') ?></span>
                                                                            </div>
                                                                        </div>
                                                </div>
                                            </div>
                                            </div>
                                             
                                        
                                <div class="panel-footer">
                                    <a href="<?php echo base_url().'company/index';?>" title="Company" class="btn btn-primary " role="button">Back </a>
                                    <a href="<?php echo base_url().'member/create/'.$project["pid"];?>" title="Don't Save" class="btn btn-primary pull-right left-gap" role="button">Next </a>
                                    <button class="btn btn-primary pull-right">Save<span class="fa fa-floppy-o fa-right"></span></button>
                                </div>
                                             </form>
                                        </div>
                            </div>
                        
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->