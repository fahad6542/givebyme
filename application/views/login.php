<?php include 'user_dashboard/header1.php'; ?>
<div class="login-container">
    <div class="overlay">
            <div class="login-box animated fadeInDown">
                <a href="<?php echo base_url(); ?>">
                    <div class="login-logo"></div>
                </a>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <form method="post" role="form" id="form_login" action="<?php echo base_url(); ?>login">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="email"  name="email" class="form-control" placeholder="Email Address" required value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="password" name="password" class="form-control" placeholder="Password" required value="">
                            </div>
                        </div>
                            <?php echo validation_errors(); ?>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <a href="<?php echo base_url() ?>forget" class="btn btn-link btn-block">Forgot your password?</a>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-info btn-block" name="login" value="Login">
                            </div>
                        </div>
                        <!--<div class="login-or">OR</div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block btn-linkedin"><span class="fa fa-linkedin"></span> Linkedin</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                    </div>-->
                        <br>
                        <hr>
                            <div class="login-subtitle">
                            Don't have an account yet? <a href="<?php echo base_url() ?>register">Create an account</a>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; <?php echo date("Y");?> Lavniworld
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo base_url('about-us') ?>">About</a> |
                        <a href="<?php echo base_url(); ?>terms">Privacy</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
<!--
<section class="popup-container">
    <div class="row">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="row popup">
                    <div class="row">
                        <h4>Login</h4>
                         <form method="post"> 
						<form >
                            <div class="row form-group">
                                
                            </div>
                            <div class="row form-group">
                                
                            </div>
							<?php echo validation_errors(); ?>
                            <div class="row form-group text-center">
                                <input type="submit" class="btn" name="login" value="Login">
                            </div>
                            <div class="row form-group text-center">
                                <h5>New here? <a href="<?php echo base_url() ?>register" class="login" >Join Now</a></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<?php include 'user_dashboard/footer.php'; ?>
