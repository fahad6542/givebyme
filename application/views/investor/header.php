<?php $user_data = $this->session->userdata('userdata'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcom <?php echo $user_data['firstname']; ?> to Lavniworld</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="<?php echo base_url(); ?>assets/user-dashboard/img/favicon.png" type="image/png" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/user-dashboard/css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/user-dashboard/Style.css"/>
        <!-- EOF CSS INCLUDE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                        <a href="#" class="profile-mini">
                            <img src="<?php echo $user_data['image']; ?>" alt="<?php echo $user_data['firstname']; ?>" onerror="this.src='<?php echo base_url(); ?>assets/user-dashboard/assets/images/users/no-image.jpg'"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo $user_data['image']; ?>" onerror="this.src='<?php echo base_url(); ?>assets/user-dashboard/assets/images/users/no-image.jpg'" alt="<?php echo $user_data['firstname']; ?>"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $user_data['firstname']; ?></div>

                            </div>
                            <div class="profile-controls">
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>InvDashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Installment/index"><span class="fa fa-road"></span> <span class="xn-text">Investments</span></a>
                    </li>
                    
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
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <!--
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>
                    -->
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout" style="width: auto;">Logout <span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <!--
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="<?php echo base_url(); ?>assets/user-dashboard/assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="<?php echo base_url(); ?>assets/user-dashboard/assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="<?php echo base_url(); ?>assets/user-dashboard/assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="<?php echo base_url(); ?>assets/user-dashboard/assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="#">Show all messages</a>
                            </div>
                        </div>
                    </li>
                    -->
                    <!-- END MESSAGES -->
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