<?php
/* 
 * Added By Fahad
 */
$user = $this->session->userdata('userdata');
?>
<?php if($this->session->flashdata('success')) :?>
	<script type="text/javascript">
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		toastr.success('<?php echo $this->session->flashdata('success'); ?>')
	</script>
<?php endif; ?>
<?php if($this->session->flashdata('error')) :?>
	<script type="text/javascript">
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		toastr.error('<?php echo $this->session->flashdata('error'); ?>')
	</script>
<?php endif; ?>
<?php if($this->session->flashdata('info')) :?>
	<script type="text/javascript">
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		toastr.info('<?php echo $this->session->flashdata('info'); ?>')
	</script>
<?php endif; ?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Offer</a></li>
                <li><a href="#"><?php echo $project["title"]; ?></a></li>
                <li class="active">Team</li>
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
                                        <!--project info ends-->
                                        <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Email</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($memberList as $key => $row) :?>
                                            <tr>
                                                <td><img class="img-thumbnail img-responsive" src="<?php echo base_url()."uploads/members/".$row['photo'] ?>" width="120" height="100" /><?php echo $row['mname'] ?></td>
                                                    <td><?php echo $row['designation'] ?></td>
                                                    <td><?php echo $row['email_address'] ?></td>
                                                    <td><?php echo $row['description'] ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>member/remove/<?php echo $row['id'] ?>" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
                                                    </td>
</tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <form method="post" id="teamForm" enctype="multipart/form-data" action="<?php echo base_url(); ?>Member/save" >  
                                            <input type="hidden" name="project" value="<?php echo $project["pid"];?>" >
                                        
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-1 col-xs-12 control-label">Name</label>
                                                    <div class="col-md-3 col-xs-12">
                                                        <input type="text" class="form-control" name="mname" id="mname" title="" required/>
                                                        <span class="help-block"><?= form_error('mname') ?></span>
                                                    </div>
                                                    
                                                    
                                            
                                            <label class="col-md-1 col-xs-12 control-label">Position</label>
                                            <div class="col-md-3 col-xs-12">
                                                <select class="form-control" id="exampleFormControlSelect1" name="designation">
                                                    <option>CEO</option>
                                                    <option>Team Lead</option>
                                                    <option>Supervisor</option>
                                                    <option>Technical Expert</option>
                                                    <option>Financial Advisor</option>
                                                    <option>Other</option>
                                                  </select>
                                                <span class="help-block"><?= form_error('designation') ?></span>
                                            </div>
                                            
                                            <label class="col-md-1 col-xs-12 control-label">Email</label>
                                                    <div class="col-md-3 col-xs-12">
                                                        <input type="email" class="form-control" name="email_address" title="" required/>
                                                        <span class="help-block"><?= form_error('email_address') ?></span>
                                                    </div>
                                            
                                            <label class="col-md-1 col-xs-12 control-label">Description</label>
                                                    <div class="col-md-3 col-xs-12">
                                                        <textarea class="form-control" name="description" title=""></textarea>
                                                        <span class="help-block"><?= form_error('description') ?></span>
                                                    </div>
                                        
                                            <label class="col-md-1 col-xs-12 control-label">Upload Photo</label>
                                            <div class="col-md-3 col-xs-12">
					                            <div class="panel panel-default">
					                                <div class="panel-body">
                                                        <input type="file" class="form-control" name="photo" id="photo" required/>
                                                        <span class="help-block"><?= form_error('photo') ?></span>
					                                </div>
					                            </div>
                                            </div>
                                        </div>
                                         
                                        </div>
                                            <div class="panel-footer">
                                                <a href="<?php echo base_url().'document/create/'.$project["pid"];?>" title="Document" class="btn btn-primary " role="button">Back </a>
                                                <a href="<?php echo base_url().'bank/index/'.$project["pid"];?>" title="Don't Save" class="btn btn-primary pull-right left-gap" role="button">Next </a>
                                                <button class="btn btn-primary pull-right">Save<span class="fa fa-floppy-o fa-right"></span></button>
                                </div>
                                        </form>
                                    </div>
                        
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->

