<?php

/* 
 * Added by Fahad
 * fields must match the database  * 
 */

$user_data = $this->session->userdata('userdata');
?>
<div class="page-content-wrap">
    <div class="row">
    <div class="col-md-12">

        <!-- START ACCORDION -->        
        <div class="panel-group accordion accordion-dc">
            <div class="panel panel-primary">
                <div class="panel-heading ui-draggable-handle">
                    <h4 class="panel-title">
                        <a href="#accOne" class="i-detail-title"><?php echo $installmentInfo["pro_type"]; ?> Info</a>
                    </h4>
                </div>                                
                <div class="panel-body panel-body-open" id="accOne">
                    <table class="table">
                        <tr>
                            <th>Title</th><td><?php echo $installmentInfo["title"]; ?></td>
                            <th>Funding Goal</th><td><?php echo $installmentInfo["projectValue"]; ?></td>
                        </tr>
                         <tr>
                            <th>Maximum Reservation</th><td><?php echo $installmentInfo["maximumInvestments"]; ?></td>
                            <th>Minimum Reservation</th><td><?php echo $installmentInfo["minimumInvestment"]; ?></td>
                        </tr>
                    </table>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo base_url()."invest/details/".$installmentInfo["pid"];?>" target="_blank"><span class="label label-info">View</span></a>
                        </div>
                    </div>

                </div>                                
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading ui-draggable-handle">
                    <h4 class="panel-title">
                        <a href="#accTwoColThree">
                            Investment
                        </a>
                    </h4>
                </div>                                
                <div class="panel-body panel-body-open" id="accTwoColThree" style="display: block;">
                    <table class="table">
                        <tr>
                            <th>Amount Invested</th><td><?php echo $installmentInfo["inv_amount"]; ?></td>
                            <th>No of Installments</th><td><?php echo $installmentInfo["Qty_installments"]; ?> </td>
                        </tr>
                        <tr>
                            <th>Offered On</th><td><?php echo $installmentInfo["offer_date"]; ?> </td>
                            <th>Current Status : </th><td><?php 
                                if($installmentInfo['status']==1){ ?>
                                    <span class="label label-success label-form">Accepted</span>
                                    <?php } elseif($installmentInfo['status']==2) {?>
                                        <span class="label label-warning label-form" title="waiting for approval">Pending</span>
                                    <?php }elseif($installmentInfo['status']==0){?>
                                        <span class="label label-danger label-form">Rejected</span>
                                    <?php } ?> </td>
                        </tr>
                        <tr>
                            <th>Note for Entrapenure</th> <td><?php echo $installmentInfo["noteByInvestor"]; ?> </td>
                            <th>Note By Entrapenure</th><td><?php echo $installmentInfo["noteByentra"]; ?></td>
                        </tr>
                    </table>
                              
                                    <div class="row">
                                        <div class="col-md-12">
                                           <?php $instAmount=$installmentInfo["inv_amount"]/$installmentInfo["Qty_installments"];?>
                                             <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Installment No</th>
                                                <th>Amount</th>
                                                <th>Paid</th>
                                                <th>Date</th>
                                                <th>Transaction Id</th>
                                                <th>Payer Mail</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=0;
                                            $paid=0;
                                            foreach ($transactionLst as $key => $row) :
                                                $paid+=$row["total"];
                                                ?>
                                            <tr>
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php echo $instAmount;?></td>
                                                    <td><?php echo $row['total']; ?></td>
                                                    <td><?php echo $row['createTime'] ?></td>
                                                    <td><?php echo $row['transectionId'] ?></td>
                                                    <td><?php echo $row['payerMail'] ?></td>
                                                    <td>Paid</td>
                                            </tr>
                                          <?php endforeach; ?>
                                                    <?php for($j=($i+1);$j<=$installmentInfo["Qty_installments"];$j++){?>
                                            
                                                    
                                            <tr>
                                                <td><?php echo $j;?></td>
                                                <td><?php echo $instAmount;?></td>
                                                <td>Not Paid</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                        <td>
                                            <?php if($installmentInfo['status']==1){?>
                                            <form action='<?php echo $chkSettings["fURL"]; ?>' method='post'>
<input type='hidden' name='sid' value='<?php echo $chkSettings["sid"]; ?>' />
<input type='hidden' name='mode' value='<?php echo $chkSettings["mode"]; ?>' />
<input type='hidden' name='merchant_order_id' value='<?php echo $installmentInfo["inv_id"];?>' />
<input type='hidden' name='li_0_product_id' value='<?php echo $installmentInfo["pid"];?>' />
<input type='hidden' name='li_0_type' value='product' />
<input type='hidden' name='li_0_name' value='<?php echo "Investment in " . $installmentInfo["title"]; ?>' />
<input type='hidden' name='li_0_tangible' value='N' />
<input type='hidden' name='li_0_price' value='<?php echo $instAmount?>' />
<input type='hidden' name='card_holder_name' value='<?php echo $user_data['firstname']; ?>' />
<input type='hidden' name='street_address' value='<?php echo $user_data['streetaddress']; ?>' />
<input type='hidden' name='street_address2' value='<?php echo "Born in ".$user_data['birthcountry']; ?>' />
<input type='hidden' name='city' value='<?php echo $user_data['city']; ?>' />
<input type='hidden' name='country' value='<?php echo $user_data['residentcountry']; ?>' />
<input type='hidden' name='email' value='<?php echo $user_data['email']; ?>' />
<input name='submit' type='submit' class="btn-success" id="invest-now" onclick="on()" value='Pay Now' />

</form>
                                            
                                            <?php }?>
                                        </td>
                                                    
                                            </tr>
                                            <?php }?>
                                            <tr>
                                                <th>Total Invested</th>
                                                <td><?php echo $installmentInfo["inv_amount"];?></td>
                                                <th>Paid</th>
                                                <td><?php echo $paid;?></td>
                                                <th>Remaining</th>
                                                <td><?php echo $installmentInfo["inv_amount"]-$paid;?></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                    </table>
                                        </div>
                                    </div>
                </div>                                
            </div>
        </div>
        <!-- END ACCORDION -->

    </div>
</div>
</div>
<script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>
