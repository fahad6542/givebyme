<?php include 'user_dashboard/header1.php'; ?>
<style>
    .no-left{
        padding-left: 0 !important;
    }
    .no-right{
        padding-right: 0 !important;
    }
    .login-container .login-box .login-body .form-control {
        border: 0px;
        background: #ddd;
        padding: 10px 15px;
        color: #000;
        line-height: 20px;
        height: auto;
    }
</style>
<div class="login-container">
    <div class="overlay">
            <div class="login-box animated fadeInDown">
                <a href="<?php echo base_url(); ?>">
                    <div class="login-logo"></div>
                </a>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong> Create a new acount</div>
                    <form method="post" role="form" id="form_register" action="<?php echo base_url(); ?>register">
                            <div class="row form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" >
                            </div>
                            <div class="row form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" >
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6 col-sm-6 col-xs-12 no-left">
                                    <input type="password" class="form-control" name="password" placeholder="Password" >
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12 no-right">
                                    <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" >
                                </div>
                            </div>
                            
                            <input type="hidden" name="streetAddress" value="NA">
                            <input type="hidden" name="city" value="NA">
                            <input type="hidden" name="countryBirth" value="NA">
                            <input type="hidden" name="countryResident" value="NA">
                            <input type="hidden" name="income" value="NA">
                                   
                            <?php echo validation_errors(); ?>
                            <div class="row form-group text-center">
                                <input type="submit" class="btn btn-info btn-block" name="save" value="Join Now">
                            </div>
                        <div class="login-or">OR</div>
                            <div class="login-subtitle">
                                Already have an account? <a href="<?php echo base_url() ?>auth">Login</a>
                            </div>
                        </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2019 Lavniworld
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo base_url('about-us');?>">About</a> |
                        <a href="<?php echo base_url(); ?>terms">Privacy</a>
                    </div>
                </div>
            </div>
    </div>
        </div>
<?php include 'user_dashboard/footer.php'; ?>