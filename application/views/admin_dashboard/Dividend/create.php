<?php

/* 
 * Added by Fahad
 * fields must match the database  * 
 */
//echo "<pre>";
//print_r($project);
?>
<div class="page-content-wrap">
    <div class="row">
    <div class="col-md-12">

        <!-- START ACCORDION -->        
        <div class="panel-group accordion accordion-dc">
            <div class="panel panel-primary">
                <div class="panel-heading ui-draggable-handle">
                    <h4 class="panel-title">
                        <a href="#accOne" style=" text-transform: capitalize;"><?php echo $project["pro_type"]; ?> Info</a>
                    </h4>
                </div>                                
                <div class="panel-body panel-body-open" id="accOne">
                    <table class="table">
                        <tr>
                            <th>Title</th><td><?php echo $project["title"]; ?></td>
                            <th>Funding Goal</th><td><?php echo $project["projectValue"]; ?></td>
                        </tr>
                         <tr>
                            <th>Maximum Reservation</th><td><?php echo $project["maximumInvestments"]; ?></td>
                            <th>Minimum Reservation</th><td><?php echo $project["minimumInvestment"]; ?></td>
                        </tr>
                    </table>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo base_url()."invest/details/".$project["pid"];?>" target="_blank"><span class="label label-info">View</span></a>
                        </div>
                    </div>

                </div>                                
            </div>
            <div class="panel panel-info">
                <div class="panel-heading ui-draggable-handle">
                    <h4 class="panel-title">
                        <a href="#accTwoColTwo">
                            Dividend Payment Info
                        </a>
                    </h4>
                </div>                                
                <div class="panel-body panel-body-open panel-body " id="accTwoColTwo">
                    <table class="table table-bordered">
                        <thead>
                        <tr>        
                            <th>Sr No#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Amount Invested</th>
                            <th>1% platform Fee</th>
                        </tr>    
                        </thead>    
                        <tbody>
                            <?php $i=0;
                            $ttlPlatFormFee=0;
                            foreach ($investors as $row){ ?>
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $row["firstname"] ;?> (Investor)</td>
                                <td><?php echo $row["email"] ;?></td>
                                <td><?php echo $row["inv_amount"] ;?></td>
                                <td><?php echo $row["platFormFee"] ;
                                $ttlPlatFormFee +=$row["platFormFee"];
                                ?></td>
                            </tr>
                            <?php }?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Platfrom Fee</td><td><?php echo $ttlPlatFormFee;?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php 
                    //main calculation area
                    $cfe=(10/100)*$project["projectValue"]; //comission from entrapenurer
                    //platform erning=1% from each investor + 10% from Entrapenure 
                    $platformEarning=$ttlPlatFormFee+$cfe;
                    $payToEntra=$project["projectValue"]-$platformEarning;
                            
                    ?>
                        <table class="table table-bordered">
                        <thead>
                        <tr>        
                            <th> Total 1% platform fee from each investor</th>
                            <th><?php echo $ttlPlatFormFee;?></th>
                        </tr>
                        <tr>        
                            <th> 10% Comission from Entrapenurer</th>
                            <th><?php echo $cfe;?></th>
                        </tr>
                        <tr>        
                            <th> Total earning of Lavnifunder</th>
                            <th><?php echo $platformEarning;?></th>
                        </tr>
                        </thead>
                        </table>
                    
                    <form method="post" action="<?php echo base_url();?>Dividend/save">
                        <table class="table table-bordered">
                        <thead>
                        <tr>        
                            <th>Sr No#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Account Title</th>
                            <th>Account Email</th>
                            <th>Credit Card #</th>
                            <th>Amount</th>
                            <th>Transaction Id</th>
                            <th>Transfered On</th>
                        </tr>    
                        </thead>
                        <?php $i=0;?>
                        <tbody>
                            <tr>
                        <input type="hidden" name="pid" value="<?php echo $project["pid"] ;?>" />
                        <input type="hidden" name="paid_to" value="<?php echo $project["uid"] ;?>" />
                        <input type="hidden" value="<?php echo $payToEntra;?>" name="amount" readonly="readonly" required="required">
                        
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $project["firstname"] ;?> (Entrapenure)</td>
                                <td><?php echo $project["email"] ;?></td>
                                <td><?php echo $project["title"] ;?></td>
                                <td><?php echo $project["email"] ;?></td>
                                <td><?php echo $project["card_no"] ;?></td>
                                <td><strong><?php echo $payToEntra;?></strong></td>
                                <td><input type="text" class="form-control" name="tansaction_id" required="required"></td>
                                <td><input type="date" class="form-control" name="date" required="required"></td>
                        </tr>
                            
                        </tbody>
                    </table>
                        <div class="panel-footer">
                                    <button class="btn btn-primary pull-right">Add Payment<span class="fa fa-floppy-o fa-right"></span></button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>