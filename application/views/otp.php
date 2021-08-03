<?php include'user_dashboard/header1.php'; ?>
<div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please Enter otp for change password</div>
                    <form method="post" role="form" id="">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text"  name="" class="form-control" placeholder="Enter OTP" required value="">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-info btn-block" name="" value="Submit">
                        </div>
                    </div>
                        <div class="login-subtitle">
                        Don't have an account yet? <a href="<?php echo base_url() ?>login">Login</a>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2018 Lavniworld
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
<?php include'user_dashboard/footer.php'; ?>

