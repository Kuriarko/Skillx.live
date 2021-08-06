      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">EDIT COURSE</h3>
                  
                </div>
                <div class="card-body">
				 <?php
                    foreach($records as $r)
                    {
                    ?>
                  <form action="<?php echo base_url();?>Home/updatedocourse" method="post">
                   <div class="row">
                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course_id</label>
                          <input type="hidden" name="course_id" value="<?php echo $r->course_id ;?>" class="form-control" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Name</label>
                          <input type="text" name="name" value="<?php echo $r->course_name ;?>" class="form-control" required>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" name="description" value="<?php echo $r->description ;?>"  class="form-control" required>
                        </div>
                      </div>
                    </div>
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Duration</label>
                          <input type="text" name="duration" value="<?php echo $r->duration ;?>" class="form-control" required>
                        </div>
                      </div>
                    </div>
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course_price</label>
                          <input type="text" name="price" value="<?php echo $r->course_price ;?>" class="form-control">
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