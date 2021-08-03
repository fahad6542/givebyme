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
                                                    <td><?php echo $row['inv_amount'] ?></td>
                                                    <td><?php echo $row['Qty_installments'] ?></td>
                                                    <td>
                                                        <form method="post" action="<?php echo base_url()."installment/detail/";?>">
                                                            <div class="form-group">
                                                                <input type="hidden" name="inv_id" value="<?php echo $row['inv_id']; ?>"   />
                                                        <div class="btn btn-info">
                                                        <a href="<?php echo base_url()."invest/details/".$row['pid'];?>" class="" target="_blank"><span class="label label-info">View Project</span></a>
                                                        </div>
                                                            <?php 
                                                    if($row['status']==1){ ?>
                                                        <button type="submit" class="btn btn-primary">Payment Details</button>
                                                        <button type="submit" class="btn btn-info">Pay Now</button>
                                                        <?php } elseif($row['status']==2) {
                                                            echo '<button type="button" class="btn btn-warning" title="waiting for approval">Pending</button>';
                                                        }else{
                                                            echo '<button type="button" class="btn btn-danger">Rejected</button>';
                                                        } ?>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    
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