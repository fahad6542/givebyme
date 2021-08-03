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

                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <!-- START WIDGETS -->
                    <div class="row">
                       <!-- <div class="col-md-3">
                            <div class="widget widget-default widget-item-icon" onclick="location.href='payment.php';">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">$1250</div>
                                    <div class="widget-title">Wallet Ballance</div>
                                </div>
                            </div>

                        </div> -->
                        <div class="col-md-3">

                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php echo $project_count; ?></div>
                                    <div class="widget-title">Invested Project</div>
                                </div>

                            </div>
                            <!-- END WIDGET REGISTRED -->
                        </div>
                        <div class="col-md-3">

                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-usd"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">$<?php echo $total_investment ?></div>
                                    <div class="widget-title">Total Investment Amount</div>
                                </div>

                            </div>
                            <!-- END WIDGET REGISTRED -->
                        </div>
                        <div class="col-md-3">

                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-usd"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">$<?php echo $last_investment['total']; ?></div>
                                    <div class="widget-title">Last paid Dividend</div>
                                </div>

                            </div>
                            <!-- END WIDGET REGISTRED -->
                        </div>
                    </div>
                    <!-- END WIDGETS -->

                    <!-- START DASHBOARD CHART -->
					<div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
					<div class="block-full-width">

                    </div>
                    <!-- END DASHBOARD CHART -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <!-- <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url() ?>logout" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- END MESSAGE BOX -->
