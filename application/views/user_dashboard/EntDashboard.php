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
        <div class="col-md-3">
            <div class="widget widget-default widget-item-icon" onclick="">
                <div class="widget-item-left">
                    <span class="fa fa-group"></span>
                </div>
                <div class="widget-data">
                    <div class="widget-int num-count" title="Total Donors"><?php echo $investment["Donors"];?></div>
                    <div class="widget-title">Donors</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget widget-default widget-item-icon" onclick="">
                <div class="widget-item-left">
                    <span class="fa fa-briefcase"></span>
                </div>
                <div class="widget-data">
                    <div class="widget-int num-count" title="Total Donations">$<?php echo $investment["tDonation"];?></div>
                    <div class="widget-title">Total Donations</div>
                </div>
            </div>
        </div>
       
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon">
                <div class="widget-item-left">
                    <span class="fa fa-rocket"></span>
                </div>
                <div class="widget-data">
                    <div class="widget-int num-count"><?php echo $pro["totalPro"];?></div>
                    <div class="widget-title">Total Campains</div>
                </div>

            </div>
            <!-- END WIDGET REGISTRED -->
        </div>
        
    </div>
    <!-- END WIDGETS -->

    <!-- START DASHBOARD CHART -->
    <div class="chart-holder" id="dashboard-area-1">
       
    </div>
    <div class="block-full-width">


    </div>
    <!-- END DASHBOARD CHART -->

</div>
<!-- END PAGE CONTENT WRAPPER -->
