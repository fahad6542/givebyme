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
                        <form method="post" role="form" id="form_project" action="<?php echo base_url(); ?>installment/save" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" name="pid" value="<?php echo $pid;?>" />
                            <input type="hidden" name="cid" value="<?php echo $cid;?>" />
                            <div class="panel panel-default tabs">
                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Ivestment Amount</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="investAmount" value="<?php echo $investAmount;?>" required/>
                                                <span class="help-block"><?= form_error('investAmount') ?></span>
                                            </div>
                                        </div>
                                          
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">No of Installments</label>
                                            <div class="col-md-6 col-xs-12">
                                                <select class="form-control select" name="Qty_installments" >
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    
                                                </select>
                                                <span class="help-block"><?= form_error('Qty_installments') ?></span>
                                            </div>
                                        </div>
                                                                       <div class="panel-footer">
                                    <button class="btn btn-primary pull-right">Save<span class="fa fa-floppy-o fa-right"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
