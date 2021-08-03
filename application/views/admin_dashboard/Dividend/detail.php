<?php

/*
 * Added by Fahad
 * fields must match the database  *
 */
// echo "<pre>";
// print_r($project); die();
?>
<div class="page-content-wrap">
    <div class="row">
    <div class="col-md-12">
        <!-- START ACCORDION -->        
        <div class="panel-group accordion accordion-dc">
            <div class="panel panel-primary">
                <div class="panel-heading ui-draggable-handle">
                    <h4 class="panel-title">
                        <a href="#accOne" style=" text-transform: capitalize;">Campaign Info</a>
                    </h4>
                </div>                                
                <div class="panel-body panel-body-open" id="accOne">
                    <table class="table">
                        <tr>
                            <th>Title</th><td><?php echo $project["title"]; ?></td>
                            <th>Funding Goal</th><td> $<?php echo $project["projectValue"]; ?></td>
                        </tr>
                         <tr>
                            <th>Location </th><td><?php echo $project["location"]; ?></td>
                            <th>Current Status</th><td><?php if ($project['status']==0) {
    echo "Disabled/Complete";
} elseif ($project['status']==1) {
    echo 'Active';
} elseif ($project['status']==2) {
    echo 'Wihdrawn Requested';
} elseif ($project['status']==3) {
    echo 'Donation Transfered / Paid';
} else {
    echo "Unknown";
} ?></td>
                        </tr>
                        <tr>
                            <th>Uploaded On </th><td><?php echo $project["insertedOn"]; ?></td>
                            <th>Last Edited On</th><td><?php echo $project["lastEditedOn"]; ?></td>
                        </tr>
                    </table>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo base_url()."campaign/detail/".$project["pid"];?>" target="_blank"><span class="label label-info">View</span></a>
                        </div>
                    </div>

                </div>                                
            </div>

            <div class="panel panel-info">
                <div class="panel-heading ui-draggable-handle">
                    <h4 class="panel-title">
                        <a href="#accTwoColTwo">
                            Uploaded By
                        </a>
                    </h4>
                </div>                                
                <div class="panel-body panel-body-open panel-body " id="accTwoColTwo">
                 
                        <table class="table">
                        <tr>
                            <th>Image </th><td><img src="<?php echo base_url($project["image"]); ?>" style="height:150px;" alt="Image Not Uploaded"></td>
                            <th>Name</th><td><?php echo $project["firstname"]; ?></td>
                            
                        </tr>
                         <tr>
                            <th>Street Address</th><td><?php echo $project["streetaddress"]; ?></td>
                            <th>City</th><td><?php echo $project["city"]; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th><td><?php echo $project["email"]; ?></td>
                            <th>Registered On</th><td><?php echo $project["registeredOn"]; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

                        <div class="panel panel-info">
                <div class="panel-heading ui-draggable-handle">
                    <h4 class="panel-title">
                        <a href="#accTwoColTwo">Bank Info</a>
                    </h4>
                </div>                                
                <div class="panel-body panel-body-open panel-body " id="accTwoColTwo">
                 
                        <table class="table">
                        <tr>
                            <th>Account Title / Name </th><td><?php echo $project["btitle"]; ?></td>
                            <th>Email</th><td><?php echo $project["email"]; ?></td>
                            
                        </tr>
                         <tr>
                            <th>Card No</th><td><?php echo $project["card_no"]; ?></td>
                            <th>Description </th><td><?php echo $project["description"]; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
                    
            
                        <table class="table table-bordered">
                        <thead>
                        <tr>        
                            <th>Sr No#</th>
                            <th>Transaction ID</th>
                            <th>Payment Method</th>
                            <th>Donor Name</th>
                            <th>Email</th>
                            <th>Amount</th>
                            <th>Why I donated.</th>
                            <th>Date</th>
                        </tr>    
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            $amount=0;

                             foreach ($donations as $value) {
                                 $amount+=$value["total"]; ?>
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td><?php echo $value["transectionId"] ; ?></td>
                                <td><?php echo $value["paymentMethod"] ; ?></td>
                                <td><?php echo $value["dName"] ; ?></td>
                                <td><?php echo $value["payerMail"] ; ?></td>
                                <td>$<?php echo $value["total"] ; ?></td>
                                <td><?php echo $value["description"] ; ?></td>
                                <td><?php echo $value["createTime"] ; ?></td>
                                
                        </tr>
                             <?php
                             }?>
                             <tr>
                                 <td></td>
                                 <th colspan="4">Total</th>
                                 <th><b>$<?php echo $amount;?></b></th>
                             </tr>
                        </tbody>
                    </table>
                        
            
                </div>
            </div>
        </div>
    </div>
    </div>
</div>