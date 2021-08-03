<?php //include '.../header1.php'; ?>
<div class="login-container">
    <div class="overlay">
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Select your Account Type</strong></div>
                    <?php
                        foreach ($accTypes as $key => $value) {
                            
                    ?>
                    <div class="row form-group">
                            <div class="col-md-12">
                                <a href="<?php echo base_url()."accountType/set/".$value['id']; ?>" class="label label-info label-form btn choose-acct" title="<?php echo $value['description'];?>">
<i class="fa fa-certificate"></i> <?php echo $value['title'];?></a>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2019 Lavniworld
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="<?php echo base_url(); ?>terms">Privacy</a>
                    </div>
                </div>
            </div>
            </div>
        </div>

