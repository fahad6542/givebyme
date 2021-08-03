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
        <!-- <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script> -->

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->
<!--        <script type="text/javascript" src="js/settings.js"></script>-->

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/actions.js"></script>
        
        <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/demo_dashboard.js"></script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" charset="utf-8"></script>
        <script>
            $(document).ready(function() {
                $('.industries').select2();
            });
        </script>
        <script type="text/javascript">
            function minmax(value, min, max) 
            {
                if(parseInt(value) < min || isNaN(parseInt(value))) 
                    return min; 
                else if(parseInt(value) > max) 
                    return max; 
                else return value;
            }
        </script>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=4onmfk35o2e0pksvzo7i80m6u4srb8b95yuitv45xpm8sd3f"></script>
         <script>
            tinymce.init({
                selector: '#desTinyc',
                height:"300px",
                plugins: 'image code',
                toolbar: 'undo redo | link image | code',
                
                // enable title field in the Image dialog
                image_title: true, 
                // enable automatic uploads of images represented by blob or data URIs
                automatic_uploads: true,
                // add custom filepicker only to Image dialog
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                  var input = document.createElement('input');
                  input.setAttribute('type', 'file');
                  input.setAttribute('accept', 'image/*');

                  input.onchange = function() {
                    var file = this.files[0];
                    var reader = new FileReader();

                    reader.onload = function () {
                      var id = 'blobid' + (new Date()).getTime();
                      var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                      var base64 = reader.result.split(',')[1];
                      var blobInfo = blobCache.create(id, file, base64);
                      blobCache.add(blobInfo);

                      // call the callback and populate the Title field with the file name
                      cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                  };

                  input.click();
                }
              });
            </script>
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
    </body>
</html>
