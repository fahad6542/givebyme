<div id="overlay">
  <div id="text">Connecting to the secure path. <div class="loader"></div></div>
</div>
<!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url(); ?>assets/user-dashboard/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url(); ?>assets/user-dashboard/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <!--<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>

        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>

        <script type="text/javascript" src="js/plugins/moment.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/daterangepicker/daterangepicker.js"></script>
 		<script type='text/javascript' src='<?php echo base_url(); ?>assets/user-dashboard/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/datatables/jquery.dataTables.min.js"></script>

		<script type='text/javascript' src='<?php echo base_url(); ?>assets/user-dashboard/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->
		<!--<script type="text/javascript" src="js/settings.js"></script>-->

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/actions.js"></script>
		
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/demo_dashboard.js"></script>

        <!-- END TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" charset="utf-8"></script>
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
                // "positionClass": "toast-right-center",
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
                // "positionClass": "toast-right-center",
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
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

 var myCallback = function(data) {
        console.log(JSON.stringify(data));
         document.getElementById("overlay").style.display = "none";
        // Example callback data
        // {"event_type":"checkout_loaded"}
        // {"event_type":"checkout_closed"}
    };
     (function() {
         inline_2Checkout.subscribe('checkout_loaded', myCallback);
         inline_2Checkout.subscribe('checkout_closed', myCallback);
     }());
</script>
    <!-- END SCRIPTS -->
    </body>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137179143-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137179143-1');
</script>

</html>
