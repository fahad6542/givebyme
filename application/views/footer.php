<section class="footer">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <h4>More Info</h4>
                            <ul>
                               <li><a href="<?php echo base_url('Page/category/26'); ?>">Community</a></li>
                                <li><a href="<?php echo base_url('Page/category/31'); ?>">School</a></li>
                                <li><a href="<?php echo base_url('Page/category/25'); ?>">Homeless Shelter</a></li>
                                <li><a href="<?php echo base_url('Page/category/28'); ?>">Women empowerment</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <h4>More Info</h4>
                            <ul>
                                
                                <li><a href="<?php echo base_url('Page/category/36'); ?>">Church</a></li>
                                <li><a href="<?php echo base_url('Page/category/30'); ?>">Politics</a></li>
                                <li><a href="<?php echo base_url('Page/category/27'); ?>">Refugees</a></li>
                                <li><a href="<?php echo base_url('Page/category/32'); ?>">Animal</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <h4>Learn more</h4>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>about-us">About Company</a></li>
                                <li><a href="<?php echo base_url(); ?>how-it-works">How it works</a></li>
                                <li><a href="<?php echo base_url(); ?>refund">Refund</a></li>
                                <li><a href="<?php echo base_url(); ?>#">Career</a></li>
                                <li><a href="<?php echo base_url(); ?>contact-us">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <h4>Community</h4>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>#">Global community</a></li>
                                <li><a href="<?php echo base_url(); ?>#">Join our Volunteer team</a></li>
                                <li><a href="<?php echo base_url(); ?>#">Make a difference</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copy">
            <div class="row">
                <div class="container text-center">
                    <p>&copy; <?php echo date("Y");?> Copyright. All rights reserved. A Website by <a href="http://www.webcom-technologies.com/" target="_blank">Webcom Technologies</a></p>
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
        
<script>
    //subscription amount
    $(".sub-amount").click(function(){
         var amount=$(this).attr("amount");
         var planId=$(this).attr("id");
         $(".sub-amount").removeClass("selected");
         $(this).addClass("selected");
         $("#invetAmount").val(amount);
         $("#plnId").val(planId);
      //alert("The paragraph was clicked."+amount);
    });        
    //subscription end
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
        <?php endif; 
        if ($this->session->flashdata('error')) : ?>
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
            <style>
                #footer-pg p{
     font-size: 9px;
     line-height: 1.25em;
     text-align: justify;
 }
 .carousel-content{
     min-height: 300px;
 }
                </style>
                
    </body>

<?php if ($this->uri->segment(1, 0)=="campaign" && $this->uri->segment(2, 0)=="detail") { ?>
    

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
     
<script type="text/javascript">
    function validateForm() {
        var isValid = true;
        $('.required-field').each(function() {
            if ( $(this).val() === '' )
                isValid = false;
        });

      return isValid;
    }

    $(".org-sub").click(function(e){
        //alert("Submitted"+validateForm());
        if ($("#plnId").val()=="" || $("#plnId").val()==null || $("#plnId").val().length === 0) {
            e.preventDefault();
            alert("Please select amount.");
        }else if (validateForm()==false) {
            e.preventDefault();
        }
    });

$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
   
    document.getElementById("overlay").style.display = "block";
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        
        document.getElementById("overlay").style.display = "none";
        $('#form-part').collapse('show');
        removeDummy(); //button
        
        e.preventDefault();
      }
    });
     
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
    
  });
      
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
                document.getElementById("overlay").style.display = "none";
        } else {
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
<?php }

 if ($this->session->flashdata('amount')) {
    ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#modal-success").modal('show');
    });
</script>

<?php }
?>

<?php 

 if ($this->session->flashdata('modalError')) {
    ?>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#modal-danger").modal('show');
    });
</script>

<?php }
?>


	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137179143-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137179143-1');
</script>

</html>
