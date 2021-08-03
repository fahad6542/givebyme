 <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Installments</li>
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
                                                <th>Name</th>
                                                <th>Project / Company</th>
                                                <th>Funding Goal</th>
                                                <th>Investor</th>
                                                <th>Amount Invested</th>
                                                <th>No of Installments</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <?php 
                                            $i=0;
                                            foreach ($installmentList as $key => $row) :?>
                                            <tr>
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php echo $row['title']; ?></td>
                                                    <td><?php echo $row['pro_type'] ?></td>
                                                    <td><?php echo $row['projectValue'] ?></td>
                                                    <td><?php echo $row['firstname'] ?></td>
                                                    <td><?php echo $row['inv_amount'] ?></td>
                                                    <td><?php echo $row['Qty_installments'] ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url()."invest/details/".$row['pid'];?>" target="_blank"><span class="label label-info lable-form btn">View Project</span></a>
                                                        <a href="<?php echo base_url()."EInstallment/detail/".$row['inv_id'];?>"><span class="label label-info lable-form btn">Request Details</span></a>
                                                        <?php 
                                                    if($row['status']==1){ ?>
                                                        <a href="<?php echo base_url()."EInstallment/detail/".$row['inv_id'];?>"><span class="label label-success lable-form btn">Accepted</span></a>
                                                        <?php } elseif($row['status']==2) {?>
                                                            <span class="label label-warning lable-form btn" title="waiting for approval">Pending</span>
                                                            <a href="<?php echo base_url()."EInstallment/detail/".$row['inv_id'];?>"><span class="label label-danger lable-form btn">Accept Now</span></a>
                                                        <?php }else{
                                                            echo '<span class="label label-danger lable-form btn">Rejected</span>';
                                                        } ?></td>
                                                    
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