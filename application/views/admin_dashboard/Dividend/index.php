<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="<?php echo base_url()?>">Home</a></li>
    <li><a href="#">Company</a></li>
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
                        <li><a href="<?php echo base_url()."#";?>" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Funding Goal</th>
                                <th>Minimum Reservation</th>
                                <th>E-mail</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=0;
                            foreach ($projects as $key => $project) :?>
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td><img class="img-thumbnail img-responsive" src="<?php echo base_url()."assets/uploads/projects/".$project['logo'] ?>" width="120" height="100" /><?php echo $project['title'] ?></td>
                                    <td><?php echo $project['projectValue'] ?></td>
                                <td><?php echo $project['minimumInvestment'] ?></td>
                                <td><?php echo $project['email'] ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>Dividend/create/<?php echo $project['pid'] ?>" class="btn btn-primary" target="_blank">View</a>
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