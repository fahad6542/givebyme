<?php

/* 
 * Added by Fahad
 * fields must match the database  * 
 */
//echo "<pre>";
//print_r($installmentInfo);
?>
<div class="page-content-wrap">
    <div class="row">
    <div class="col-md-12">

        <!-- START ACCORDION -->        
        <div class="panel-group accordion accordion-dc">
            <div class="panel panel-primary">
                <div class="panel-heading ui-draggable-handle">
                    <h4 class="panel-title">
                        <a href="#accOne" style=" text-transform: capitalize;"><?php echo $installmentInfo["pro_type"]; ?> Info</a>
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
            <div class="panel panel-info">
                <div class="panel-heading ui-draggable-handle">
                    <h4 class="panel-title">
                        <a href="#accTwoColTwo">
                            Investor Detail
                        </a>
                    </h4>
                </div>                                
                <div class="panel-body panel-body-open panel-body " id="accTwoColTwo">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                            <!-- CONTACT ITEM -->
                            <div class="">
                                <div class="">
                                    <div class="profile-image">
                                        <img src="<?php echo $installmentInfo["image"]; ?>" alt="<?php echo $installmentInfo["firstname"]; ?>">
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name"><?php echo $installmentInfo["firstname"]; ?></div>
                                        <div class="profile-data-title">Income <?php echo $installmentInfo["income"]; ?></div>
                                    </div>
                                    
                                </div>                                
                                <div class="">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br><?php echo $installmentInfo["projectValue"]; ?></p>
                                        <p><small>Email</small><br><?php echo $installmentInfo["email"]; ?></p>                                        
                                        <p><small>Address</small><br><?php echo $installmentInfo["streetaddress"]." ".$installmentInfo["city"] ?></p>   
                                        <p><small>Birth Country</small><br><?php echo $installmentInfo["birthcountry"]; ?></p>
                                        <p><small>Residense Country</small><br><?php echo $installmentInfo["residentcountry"]; ?></p> 
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
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
                                    <span class="label label-info">Accepted</span>
                                    <?php } elseif($installmentInfo['status']==2) {?>
                                        <span class="label label-warning" title="waiting for approval">Pending</span>
                                    <?php }elseif($installmentInfo['status']==0){?>
                                        <span class="label label-danger">Rejected</span>
                                    <?php } ?> </td>
                        </tr>
                        <tr>
                            <th>Note from Investor<th><td> <textarea readonly="readonly"><?php echo $installmentInfo["noteByInvestor"]; ?> </textarea></td>
                            <th>    
                        <form method="post" action="<?php echo base_url()."eInstallment/update";?>">
                                <input type="hidden" name="inv_id" value="<?php echo $installmentInfo["inv_id"]; ?>"/>
                                Change status to</th>
                             <td><select name="status">
                                        <option value="">Change Status</option>
                                        <option value="1">Accept</option>
                                        <option value="2">Pending</option>
                                        <option value="0">Reject</option>
                                    </select>
                             </td>
                             <th>Note for Investor</th>
                             <td><textarea name="noteByentra"><?php echo $installmentInfo["noteByentra"]; ?></textarea><td>
                                 </tr>
                             <tr>
                                 <td></td><td></td>
                                 
                                 <td></td><td><input type="submit" value="save" /></td>
                             
                            
                                </form>
                            </tr>
               </table>
                             <div class="row">
                                        <div class="col-md-12">
                                           <?php 
                              $instAmount=$installmentInfo["inv_amount"]/$installmentInfo["Qty_installments"];
                              ?>
                                             <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Installment No</th>
                                                <th>Amount</th>
                                                <th>Paid</th>
                                                <th>Date</th>
                                                <th>Transaction Id</th>
                                                <th>Payer Mail</th>
                                                <th>Status</th>
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
                                                <td>Pending</td>
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