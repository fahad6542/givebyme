                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="update">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Profile Settings</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Name</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="">
                                                    <input type="text" class="form-control" name="name" value="<?php echo $user['firstname'];?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($user['usertype'] == "user") : ?>
                                        <!-- <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Contact number</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="">
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Address</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="">
                                                    <input type="text" class="form-control" name="streetaddress" value="<?php echo $user['streetaddress'];?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Birth Country</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="">
                                                    <select class="form-control select" name="countryBirth" required>    
                                                        <?php foreach ($countries as $key => $country) : ?>
                                                        <option value="<?php echo $country; ?>" 
                                                            <?php 
                                                                if($user['birthcountry'] == $country){
                                                                    echo "selected";
                                                                }
                                                            ?> >
                                                            <?php echo $country; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Resident Country</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="">
                                                <select class="form-control select" name="countryResident" required>
                                                    <?php foreach ($countries as $key => $country) : ?>
                                                        <option value="<?php echo $country; ?>" 
                                                            <?php 
                                                                if($user['residentcountry'] == $country){
                                                                    echo "selected";
                                                                }
                                                            ?> >
                                                            <?php echo $country; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Profile image</label>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="file" class="fileinput btn-primary" title="Browse file" name="userImages" />
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="submit" class="btn btn-primary pull-right">Update</button>
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