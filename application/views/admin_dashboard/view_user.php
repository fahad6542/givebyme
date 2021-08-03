
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>                    
                    <li><a href="<?php echo base_url(); ?>/users">Users</a></li>
                    <li class="active">User Details</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><?php echo $user['firstname']; ?>'s Details</h2>
                </div>
                <!-- END PAGE TITLE -->                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <td>#<?php echo $user['uid']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td><?php echo $user['firstname']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email Address</th>
                                                <td><a href="mailto:<?php echo $user['email']; ?>" ><?php echo $user['email']; ?></a></td>
                                            </tr>
                                            <!-- <tr>
                                                <th>Contact Number</th>
                                                <td><?php echo $user['uid']; ?></td>
                                            </tr> -->
                                            <tr>
                                                <th>Address</th>
                                                <td><?php echo $user['streetaddress']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>City</th>
                                                <td><?php echo $user['city']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Birth Country</th>
                                                <td><?php echo $user['birthcountry']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Resident Country</th>
                                                <td><?php echo $user['residentcountry']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Profile Image</th>
                                                <td><?php echo $user['image']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Passport / ID card </th>
                                                <td><?php echo $user['idCard']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Bank statement proof</th>
                                                <td><?php echo $user['bankStatement']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td><?php 
                                                    if ($user['status'] == 0) {
                                                        echo '<span class="label label-danger label-form">Inactive</span>';
                                                        echo ' | <a href="'. base_url().'/user/activate/'.$user['uid'].'" > Click to Activate</a>';
                                                    } else if ($user['status'] == 1) {
                                                        echo '<span class="label label-success label-form">Active</span>';
                                                    } ?></td>
                                            </tr>
                                        </thead>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <?php if ($user['status'] == 0) : ?>
                                        <a href="<?php echo base_url(); ?>user/active/<?php echo $user['uid'] ?>" class="btn btn-primary pull-right">Verify User</a>
                                    <?php endif; ?>
                                    <!-- <?php if ($user['status'] == 1) : ?>
                                        <a href="<?php echo base_url(); ?>user/remove/<?php echo $user['uid'] ?>" class="btn btn-danger pull-right">Delete User</a>
                                    <?php endif; ?> -->
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                        </div>
                    </div>
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->