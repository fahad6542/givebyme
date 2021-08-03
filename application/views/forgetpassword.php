<?php include'user_dashboard/header1.php'; ?>
<div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title">Please enter registered email</div>
                    <form method="post" role="form" id="">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="email" name="" class="form-control" placeholder="Enter Email Address" required value="">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-info btn-block" name="" value="Send Link">
                        </div>
                    </div>
                        <div class="login-subtitle">
                        Already have an account yet? <a href="<?php echo base_url() ?>login">Login</a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2019 Lavniworld
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo base_url('about-us'); ?>">About</a> |
                        <a href="<?php echo base_url('terms'); ?>">Privacy</a> |
                        <a href="<?php echo base_url('contact-us'); ?>">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
<?php include'user_dashboard/footer.php'; ?>

