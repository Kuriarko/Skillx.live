      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">EDIT COMPANY</h3>
                  
                </div>
                <div class="card-body">
				 <?php
                    foreach($records as $r)
                    {
                    ?>
                  <form action="<?php echo base_url();?>Home/updatedocompany" method="post">
                   <div class="row">
                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company_id</label>
                          <input type="hidden" name="id" value="<?php echo $r->id ;?>" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Name</label>
                          <input type="text" name="name" value="<?php echo $r->name ;?>" class="form-control" required>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" value="<?php echo $r->email ;?>"  class="form-control" required>
                        </div>
                      </div>
                    </div>
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone</label>
                          <input type="number" name="phone" value="<?php echo $r->phone ;?>" class="form-control" required>
                        </div>
                      </div>
                    </div>
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="address" value="<?php echo $r->address ;?>" class="form-control">
                        </div>
                      </div>
                    </div>
				
               
                    <button type="submit" class="btn btn-primary pull-right">Update </button>
                    <div class="clearfix"></div>
                  </form>
				   <?php
                    }
                    ?>
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>