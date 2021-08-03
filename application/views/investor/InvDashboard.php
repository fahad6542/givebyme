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

                        <div class="col-md-3">
                            <div class="widget widget-default widget-item-icon" onclick="location.href='payment.php';">
                                <div class="widget-item-left">
                                    <span class="fa fa-flag"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">$<?php echo $accepted_inv["amount"]?></div>
                                    <div class="widget-title">Invested in <?php echo $accepted_inv["total"]?> Projects/Companies</div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3">

                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-flag-checkered"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">$<?php echo $pending_inv["amount"]; ?></div>
                                    <div class="widget-title">Pending Requests <?php echo $pending_inv["total"]; ?></div>
                                </div>

                            </div>
                            <!-- END WIDGET REGISTRED -->
                        </div>
                        <div class="col-md-3">

                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-ban"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">$<?php echo $rejec_Inv["amount"]; ?></div>
                                    <div class="widget-title">Rejected Requests<?php echo $rejec_Inv["total"];?></div>
                                </div>

                            </div>
                            <!-- END WIDGET REGISTRED -->
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">18<span>:</span>32</div>                            
                                <div class="widget-subtitle plugin-date">Tuesday, January 22, 2019</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
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
        <!--    
        </div>
            <!-- END PAGE CONTENT -->
        <!--</div>
        <!-- END PAGE CONTAINER -->