  <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url("Company/index/organization");?>">Campaigns</a></li>
                <li><a href="#">Plans</a></li>
                <li class="active">Subscribers</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                
                <div class="row">
                    <div class="col-md-12">
                            <div class="panel panel-default tabs">
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <table class="table datatable">
                                        <thead>
                                          <tr>
                                                <th>Sr No.</th>
                                                <th>Subscription Code</th>
                                                <th>Amount</th>
                                                <th>Interval</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <?php 
                                            $i=0;
                                            foreach ($stripeSubscribers as $key => $row) :?>
                                            <tr>
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php //echo "<pre>"; print_r($row); die();
                                                echo $row['id']; ?></td>
                                                    <td></td>
                                                    <td>per month </td>
                                                    <td>Active</td>
                                                    <td></td>
                                                    </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                               
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->