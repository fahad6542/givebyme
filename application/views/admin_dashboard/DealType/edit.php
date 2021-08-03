<?php if($this->session->flashdata('success')) :?>
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
<?php if($this->session->flashdata('error')) :?>
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

<?php if($this->session->flashdata('info')) :?>
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
                    <li><a href="#">Deal Types</a></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit Deal Types</strong></h3>
                                </div>
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <form method="post" role="form" id="form_industry" action="<?php echo base_url(); ?>DealType/update" class="form-horizontal">
                                                    <input type="hidden" name="id" value="<?php echo $dealType["id"]; ?>" />
                                                    <input type="hidden" name="image" value="<?php echo $dealType["image"]; ?>" />
                                                    <input type="hidden" name="ddval" value="<?php echo $dealType["ddval"]; ?>" />
                                                    <input type="hidden" name="name" value="<?php echo $dealType["status"]; ?>" />
                                                    <input type="hidden" name="name" value="<?php echo $dealType["isDeleteAble"]; ?>" />
                                                    <input type="hidden" name="name" value="<?php echo $dealType["position"]; ?>" />
                                                   
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Type Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="name" value="<?php echo $dealType["name"]; ?>" class="form-control" required=""/>
                                                                <span class="help-block"><?= form_error('name') ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Description</label>
                                                            <div class="col-md-9 col-xs-12">
                                                                <textarea class="form-control" rows="5" name="description"><?php echo $dealType["description"]; ?></textarea>
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
                                                <h3 class="panel-title">Deal Type List</h3>
                                            </div>
                                            <div class="panel-body panel-body-table">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                <th width="50">id</th>
                                                                <th>Name</th>
                                                                <th>Desription</th>
                                                                <th width="120">actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <!-- industries-->
                                                            <?php foreach ($dealLst as $key => $deal) :?>
                                                                <tr id="trow_1">
                                                                    <td class="text-center"><?php echo $deal['id'] ?></td>
                                                                    <td><strong><?php echo $deal['name'] ?></strong></td>
                                                                    <td><?php echo $deal['description'] ?></td>
                                                                    <td>
                                                                      <a href="<?php echo base_url(); ?>DealType/edit/<?php echo $deal['id'] ?>" class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></a>
                                                                        <a href="<?php echo base_url(); ?>DealType/delete/<?php echo $deal['id'] ?>" class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></a>
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
