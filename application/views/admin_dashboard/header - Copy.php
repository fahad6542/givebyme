<?php
$user_data = $this->session->userdata('userdata');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Welcom <?php echo $user_data['firstname']; ?> to Lavniworld</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="<?php echo base_url(); ?>assets/user-dashboard/img/favicon.png" type="image/png" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/user-dashboard/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/user-dashboard/js/plugins/dropzone/dropzone.min.js"></script>
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url(); ?>">Lavniworld</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="<?php echo base_url('admin');?>" class="profile-mini">
                            <img src="<?php echo base_url(); ?>assets/user-dashboard/assets/images/users/avatar.jpg" alt=""/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url().$user_data['image']; ?>" alt="<?php echo $user_data['firstname']; ?>"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $user_data['firstname']; ?></div>
                            </div>
                        </div>
                    </li>
                    <li class="menu">
                        <a href="index.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url() ?>industries"><span class="fa fa-tags"></span> <span class="xn-text">Category</span></a>
                    </li>
                    <li class="xn-openable menu">
                        <a href="#"><span class="fa fa-rocket"></span> <span class="xn-text">Upload Campaigns</span></a>
                        <ul>
                            <li class="menu"><a href="<?php echo base_url() ?>new-project"><span class="fa fa-image"></span> Add new Campaigns </a></li>
                            <li class="menu"><a href="<?php echo base_url() ?>projects"><span class="fa-check-circle"></span> View Campaigns </a></li>
                            <li class="menu"><a href="<?php echo base_url() ?>projects/viewProjects/0"><span class="fa fa-ban"></span> Disabled Campaigns </a></li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url() ?>transections"><span class="fa fa-money"></span> <span class="xn-text">Payments/Transactions</span></a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url() ?>users"><span class="fa fa-users"></span> <span class="xn-text">Manage Users</span></a>
                    </li>
                    <!--
                    <li class="menu">
                        <a href="<?php echo base_url() ?>Dividend"><span class="glyphicon glyphicon-tasks"></span> <span class="xn-text">Dividend</span></a>
                    </li>
                -->
                    <li class="xn-openable menu">
                        <a href="#"><span class="fa fa-cog"></span> <span class="xn-text">Settings</span></a>
                        <ul>
                            <li class="menu"><a href="<?php echo base_url(); ?>settings"><span class="fa fa-cog"></span> <span class="xn-text">Edit Profile</span></a></li>
                            <li class="menu"><a href="<?php echo base_url(); ?>change-password"><span class="fa fa-cog"></span> <span class="xn-text">Change Password</span></a></li>
                        </ul>
                    </li>


                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout" style="width:auto;">Logout <span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                </ul>

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url() ?>logout" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX -->