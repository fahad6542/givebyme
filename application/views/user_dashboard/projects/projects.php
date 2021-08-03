<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url()?>">Home</a></li>
    <li><a href="#">Projects</a></li>
    <li class="active">View Projects</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default tabs">
                <?php echo $nav_tabs;?>
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Projects</h3>
                    <ul class="panel-controls">
                        <li><a href="<?php echo base_url()."UserProjects/addNewProject";?>" class=""><span class="fa fa-plus"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Sr no.</th>
                                <th>Name</th>
                                <th>Industries</th>
                                <th>Project Value</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                        <?php 
                                                                        $i=0;
                                                                        foreach ($projects as $key => $project) :?>
                                                                        <tr>
                                                                                <td><?php echo ++$i; ?></td>
                                                                     <td <?php echo $project['title']; ?> ><?php
                                            if (strlen($project['title'])>50) {
                                                $wr=wordwrap($project['title'],50,':');
                                                $strs=explode(":",$wr);
                                                echo $strs[0]. " ...";
                                            }else{
                                              echo $project['title']; 
                                            } ?></td>
                                <td>
                                                                                        <?php
                                                                                                $projectIndustries = explode(",", $project['industries']);
                                                                                                foreach ($projectIndustries as $projectIndustry) {
                                                                                                        foreach ($industries as $industry) {
                                                                                                                if($industry['iid'] == $projectIndustry){
                                                                                                                        ?>
                                                                                                                        <span class="label label-success label-form"><?php echo $industry['industryName'];?></span>
                                                                                                                        <?php
                                                                                                                }
                                                                                                        }
                                                                                                }
                                                                                        ?>
                                                                                </td>
                                <td><?php echo $project['projectValue'] ?></td>
                                <td><!--
                                    <a href="<?php echo base_url() . 'document/create/'.$project['pid'] ?>" class="btn btn-primary" title="Documents"><span class="fa fa-file-text"></span> Docs</a>
                                    <a href="<?php echo base_url() . 'member/create/' . $project['pid'] ?>" class="btn btn-primary" title="Team Members"><span class="fa fa-users"></span> Team</a>
                                    -->
                                    <a href="<?php echo base_url() . 'Bank/index/' . $project['pid'] ?>" class="btn btn-primary"  title="Bank Info"><span class="fa fa-credit-card"></span> Bank</a>
                                    
                                    <a href="<?php echo base_url(); ?>campaign/detail/<?php echo $project['pid'] ?>" class="btn btn-primary" target="_blank" title="View Detail"><span class="fa fa-eye"></span>View</a>
                                    <a href="<?php echo base_url()."UserProjects/edit/".$project['pid'] ?>" class="btn btn-primary"><span class="fa fa-edit"></span> Edit</a>
                                    <!--<a href="<?php //echo base_url(); ?>company/remove/<?php //echo $project['pid'] ?>" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>-->
                                    <?php if ($project['projectValue']<= $project['currentInvestmentAmount']) { ?>
                                    <a href="<?php echo base_url(); ?>Dividend/detail/<?php echo $project['pid'] ?>" class="btn btn-primary" target="_blank" title="Commision Detail"><span class="fa fa-money"></span>Comission</a>
                                <?php }?>
                                </td>                           </tr>
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
                    <a href="<?php echo base_url().'member/create';?>" title="Company" class="btn btn-primary " role="button">Back </a>
                    <a href="<?php echo base_url().'#';?>" title="Don't Save" class="btn btn-primary pull-right left-gap" role="button">Next </a>
    </div>
</div>
<!-- PAGE CONTENT WRAPPER -->