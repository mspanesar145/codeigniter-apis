<div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Add New User</strong> Form
                        <?php if($this->session->flashdata('message')){ ?>
                          <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('message'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>                          </div>
                        <?php } ?>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">User Member Id</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static"><?php echo $member_id; ?></p>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-name" name="username" placeholder="Enter Name" class="form-control" autocomplete="off" required><small class="form-text text-muted"></small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Address</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="text-email" name="email" placeholder="Enter Email" class="form-control" autocomplete="off" required><small class="help-block form-text"></small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="text-password" name="password" placeholder="Password" class="form-control" autocomplete="off" required minlength=8><small class="help-block form-text"></small></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pin</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-pin" name="pin" placeholder="Enter Pin" class="form-control" required><small class="form-text text-muted"></small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Company Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-company" name="company" placeholder="Enter Company Name" class="form-control" required><small class="form-text text-muted"></small></div>
                          </div>
                          
                          
                        
                          
                          
                         
                        
                      </div>

                      <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>

                      </div>
                      </form>
                    </div>
</div>