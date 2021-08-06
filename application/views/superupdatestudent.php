      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">EDIT STUDENT</h3>
                  
                </div>
                <div class="card-body">
				 <?php
                    foreach($records as $r)
                    {
                    ?>
                  <form action="<?php echo base_url();?>Home/superupdatedostudent" method="post">
                   <div class="row">
                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Student_id</label>
                          <input type="hidden" name="student_id" value="<?php echo $r->student_id ;?>" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name</label>
                          <input type="text" name="name" value="<?php echo $r->student_name ;?>" class="form-control" required>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" value="<?php echo $r->student_email ;?>"  class="form-control" required>
                        </div>
                      </div>
                    </div>
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone</label>
                          <input type="number" name="phone" value="<?php echo $r->student_phone ;?>" class="form-control" required>
                        </div>
                      </div>
                    </div>
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name="city" value="<?php echo $r->city ;?>" class="form-control">
                        </div>
                      </div>
                    </div>
					
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">State</label>
                          <input type="text" name="state" value="<?php echo $r->state ;?>" class="form-control">
                        </div>
                      </div>
                    </div>
					
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" name="country" value="<?php echo $r->country ;?>" class="form-control">
                        </div>
                      </div>
                    </div>
					
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Zip</label>
                          <input type="text" name="zip" value="<?php echo $r->zip ;?>" class="form-control">
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