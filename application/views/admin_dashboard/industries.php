<?php if ($this->session->flashdata('success')) :?>
	<script type="text/javascript">
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		toastr.success('<?php echo $this->session->flashdata('success'); ?>')
	</script>
<?php endif; ?>
<?php if ($this->session->flashdata('error')) :?>
	<script type="text/javascript">
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		toastr.error('<?php echo $this->session->flashdata('error'); ?>')
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('info')) :?>
	<script type="text/javascript">
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		toastr.info('<?php echo $this->session->flashdata('info'); ?>')
	</script>
<?php endif; ?>

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url()?>admin">Home</a></li>
                    <li><a href="#">Categories</a></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Manage Categories</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <form method="post" role="form" id="form_industry" action="<?php echo base_url(); ?>industries/add" class="form-horizontal">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label class="col-md-6 control-label">Category Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="industryName" class="form-control"/>
                                                                <span class="help-block"><?= form_error('industryName') ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-6 control-label">Category Description</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <textarea class="form-control" rows="5" name="description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <button class="btn btn-default">Clear Form</button>
                                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Categories List</h3>
                                            </div>
                                            <div class="panel-body panel-body-table">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                <th width="50">id</th>
                                                                <th>Name</th>
                                                                <!--<th>Desription</th>-->
                                                                <th width="120">actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <!-- industries-->
                                                            <?php foreach ($industries as $key => $industry) :?>
                                                                <tr id="trow_1">
                                                                    <td class="text-center"><?php echo $industry['iid'] ?></td>
                                                                    <td><strong><?php echo $industry['industryName'] ?></strong></td>
                                                                    <!--<td><?php //echo $industry['description']?></td>-->
                                                                    <td>
                                                                        <!-- <a href="<?php echo base_url(); ?>industries/edit/<?php echo $industry['iid'] ?>" class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></a> -->
                                                                        <a href="<?php echo base_url(); ?>industries/remove/<?php echo $industry['iid'] ?>" class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
