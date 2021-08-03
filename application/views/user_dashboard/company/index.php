<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url()?>">Home</a></li>
    <li><a href="#"><?php // echo $project["pro_type"];?>Campain</a></li>
    <li class="active">My <?php // echo $project["pro_type"];?>Campains</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default tabs">
                <?php //echo $nav_tabs;?>
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="panel-controls">
                        <li><a href="<?php echo base_url()."company/create/".$project["pro_type"];?>" class=""><span class="fa fa-plus"></span></a></li>
                        <li><a href="<?php echo base_url()."#";?>" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Funding Goal</th>
                                <th>Donations Recived</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=0;
                            foreach ($projects as $key => $project) :?>
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $project['title'] ?></td>
                                    <td>
                                        <?php
                                        $fImg= explode(",",$project["images"]);
                                        ?>
                                        <img class="img-thumbnail img-responsive" src="<?php echo base_url().$fImg[0]; ?>" width="120" style="height: 100px;" /></td>
                                
                                <td><?php echo $project['projectValue'] ?></td>
                                <td><?php echo $project['currentInvestmentAmount'] ?></td>
                                <td>
                                   <!-- <a href="<?php echo base_url() . 'document/create/'.$project['pid'] ?>" class="btn btn-primary" title="Documents"><span class="fa fa-file-text"></span> Docs</a>
                                    <a href="<?php echo base_url() . 'member/create/' . $project['pid'] ?>" class="btn btn-primary" title="Team Members"><span class="fa fa-users"></span> Team</a>
                                    -->
                                    <a href="<?php echo base_url() . 'Bank/index/' . $project['pid'] ?>" class="btn btn-primary"  title="Bank Info"><span class="fa fa-credit-card"></span> Bank</a>
                                    
                                    <a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid'] ?>" class="btn btn-primary" target="_blank" title="View Detail"><span class="fa fa-eye"></span>View</a>
                                    <?php if ($project['status']==1) { ?>
                                    <a href="<?php echo base_url()."company/edit/".$project['pid'] ?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                                <?php }?>
                                    <a href="<?php echo base_url("company/deleteCampaign/").$project['pid']; ?>" class="btn btn-primary" 
                                         onclick="return confirm('Are you sure you want to delete?')" ><i class="fa fa-trash-o"></i></a>
                                    <?php if ($project['projectValue']<= $project['currentInvestmentAmount'] && $project["status"]==1) { ?>
                                    <a href="<?php echo base_url(); ?>Withdraw/request_mail/<?php echo $project['pid'] ?>" class="btn btn-primary" target="_blank" title="Withdraw"><span class="fa fa-money"></span>Withdraw</a>
                                <?php }?>
                                </td>
                            </tr>
                                                                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
            </div>
        </div>
    </div>
    <div class="panel-footer">
                <a href="<?php echo base_url().'#';?>" title="Don't Save" class="btn btn-primary pull-right left-gap" role="button">Next </a>
    </div>
</div>
<!-- PAGE CONTENT WRAPPER -->