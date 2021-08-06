      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h2 class="card-title">Add Module To Course</h2>
                  
                </div>
                <div class="card-body">
				 
                  <form action="<?= base_url(); ?>Home/compaddmoduledo" method="post">
                   <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <strong><p style="color: green;"><?php echo  $error1; ?><p></strong>
                           <?php } ?>
				     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        
                          <select name="cat_id" class="form-control" required>
						  <option value="select a city">select a course</option>
						   <?php
                  foreach($records2 as $r2)
                  {
                  ?>
                  <option value="<?php echo $r2->course_id;?>"><?php echo $r2->course_name;?></option>
                   <?php
                  }
                  ?>
</select>
                        </div>
                      </div>
                    </div>
                 
					 <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Module Name</label>
                          <input type="text" name="module_name"  class="form-control" required>
                        </div>
                      </div>
                    </div>
               
                    <button type="submit" class="btn btn-primary pull-right">Add Module </button>
                    <div class="clearfix"></div>
                  </form>
				 
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>