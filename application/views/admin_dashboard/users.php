<?php if ($this->session->flashdata('success')) : ?>
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
<?php if ($this->session->flashdata('error')) : ?>
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

<?php if ($this->session->flashdata('info')) : ?>
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
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li><a href="#">Users</a></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Users</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
												<th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
												<th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php foreach ($users as $key => $user) : ?>
											<tr>
												<td>#<?php echo $user['uid'] ?></td>
												<td><?php echo $user['firstname'] ?></td>
                                                <td><?php echo $user['email'] ?></td>
                                                <td><?php echo $user['streetaddress'] . ', ' . $user['city'] . ', ' . $user['birthcountry'] ?></td>
												<td>
													<a href="<?php echo base_url(); ?>user/view/<?php echo $user['uid'] ?>" class="btn btn-primary" title="View User Details"><i class="fa fa-eye"></i></a>
													<?php
                                                    if ($user['status'] == 0) {
                                                        echo '<span class="label label-danger label-form">Inactive</span>';
                                                    } elseif ($user['status'] == 1) {
                                                        //echo '<span class="label label-success label-form">Active</span>';?>
                                                        <a href="<?php echo base_url(); ?>user/remove/<?php echo $user['uid'] ?>" class="btn btn-primary" title="Delete User"><i class="mdi mdi-delete"></i></a>
                                                    <?php
                                                    } ?>
                                                                                                        
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
