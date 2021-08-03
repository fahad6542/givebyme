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
                    <li class="active">Transactions</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Payments</h3>
                                    <ul class="panel-controls">
<!--                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>-->
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Transection Id</th>
                                                <th>Property Name</th>
                                                <th>Invest Amount</th>
                                                <th>Tax</th>
                                                <th>Payment Status</th>
												<!-- <th>Actions</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
					<?php 
                                        $i=0;
                                        foreach ($transactions as $key => $transaction) : ?>
				<tr>
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php echo $transaction['transectionId']; ?></td>
												<!-- <td class="capitalize"><?php echo $transaction['pid'] ?></td> -->
                                                <td class="capitalize">
													<?php
												foreach ($projects as $key => $project) {
													if ($transaction['pid'] == $project['pid']) {
														echo $project['title'];
													}
												}
												?>
												</td>
                                                <td>$<?php echo $transaction['total'] ?></td>
                                                <td>$<?php echo $transaction['tax'] ?></td>
                                                <td class="capitalize"><?php echo $transaction['paymentStatus'] ?></td>
												<!-- <td>
													<a href="<?php echo base_url(); ?>projects/edit/<?php echo $project['pid'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
													<a href="<?php echo base_url(); ?>projects/remove/<?php echo $project['pid'] ?>" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
												</td> -->
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
