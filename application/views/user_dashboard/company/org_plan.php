  <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url("Company/index/organization");?>">Campaigns</a></li>
                <li><a href="<?php echo base_url("campaign/detail/".$project["pid"]);?>"><?php echo $project["title"];?></a></li>
                <li class="active">Plans</li>
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
                                                <th>Nick Name</th>
                                                <th>Amount</th>
                                                <th>Interval</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <?php 
                                            $i=0;
                                            foreach ($stripePlans as $key => $row) :?>
                                            <tr>
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php echo $row['nickname']; ?></td>
                                                    <td>$ <?php echo ($row['amount']/100); ?>/-</td>
                                                    <td>per <?php echo $row['interval'] ?></td>
                                                    <td><?php 
                                                            if ($row['active']==1) {
                                                                echo "Active";
                                                            }else{
                                                                echo "Disabled";
                                                            }
                                                     ?></td>
                <td><a href="<?php echo base_url("campaign/subscribers/".$row['id']); ?>" target="_blank">View Subscribers</a></td>
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