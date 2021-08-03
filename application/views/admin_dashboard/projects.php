<?php if ($this->session->flashdata('success')) :?>
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
<?php if ($this->session->flashdata('error')) :?>
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

<?php if ($this->session->flashdata('info')) :?>
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
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="#">Campaigns</a></li>
                    <li class="active">View Campaigns</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Campaigns</h3>
                                    <ul class="panel-controls">
                                        <li><a href="<?php echo base_url()."company/create";?>" class="btn btn-success"><span class="fa fa-plus"></span></a></li>
                                        <li><a href="#" class=""><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                            	<th>Id</th>
                                                <th>Name</th>
                                                <th>Industries</th>
                                                <th>Funding Goal</th>
                                                <th>Fund Raised</th>
                                                <!--<th>Years Of Construction</th>-->
                                                <th>Current Status</th>
												<th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php foreach ($projects as $key => $project) :?>
											<tr>
												<td>#<?php echo $project['pid'] ?></td>
												<td><a href="<?php echo base_url("campaign/detail/").$project['pid'];?>"><?php echo $project['title']; ?></a></td>
                                                <td>
													<?php
                                                        $projectIndustries = explode(",", $project['industries']);
                                                        foreach ($projectIndustries as $projectIndustry) {
                                                            foreach ($industries as $industry) {
                                                                if ($industry['iid'] == $projectIndustry) {
                                                                    ?>
																	<span class="label label-success label-form"><?php echo $industry['industryName']; ?></span>
																	<?php
                                                                }
                                                            }
                                                        }
                                                    ?>
												</td>
                                                <td><?php echo $project['projectValue'] ?></td>
                                                <td><?php echo $project['currentInvestmentAmount'] ?></td>
                                                <td><?php if ($project['status']==0) {
                                                        echo "Disabled/Complete";
                                                    } elseif ($project['status']==1) {
                                                        echo 'Active';
                                                    } elseif ($project['status']==2) {
                                                        echo 'Wihdrawn Requested';
                                                    } elseif ($project['status']==3) {
                                                        echo 'Donation Transfered / Paid';
                                                    } else {
                                                        echo "Unknown";
                                                    } ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>campaign/edit/<?php echo $project['pid'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <?php if ($project['status']==0) {?>
                                                        <a href="<?php echo base_url(); ?>projects/enableStatus/<?php echo $project['pid'] ?>" class="btn btn-primary"><i class="fa fa-check-circle"></i></a>
                                                    <?php } else { ?>
                                                        <a href="<?php echo base_url(); ?>projects/disableStatus/<?php echo $project['pid'] ?>" class="btn btn-primary"><i class="fa fa-ban"></i></a>
                                                    <?php } ?>

                                                    <a href="<?php echo base_url(); ?>donation/detail/<?php echo $project['pid'] ?>" class="btn btn-primary"><i class="mdi mdi-credit-card"></i></a>
                                                </td>
                                            </tr>
											<?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                        </div>
                    </div>

                </div>
                <!-- PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
