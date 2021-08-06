<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  
 
</head>

<body class="">
  <div class="wrapper " style="margin-top: 80px;">
 
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    
  
    <div class="main-panel">
      <!-- Navbar -->
     
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">Add New Course</h3>
                 
                </div>
                <div class="card-body">
                  <form method="post" action="<?php echo base_url();?>Home/notunformesechay2" enctype="multipart/form-data">
				  <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <strong><p style="color: green;"><?php echo  $error1; ?><p></strong>
                           <?php } ?>
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course Name</label>
                          <input type="text" name="course_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Duration</label>
                          <input type="text" name="duration" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="text" name="course_price" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company id</label>
                          <input type="text" id="company_id" name="company_id" class="form-control" value="<?php echo $records->id;?>" required readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" name="description" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12">
					<label class="bmd-label-floating">Upload Course logo</label>  
		
    <input type="file" name="userfile" class="inputFileHidden" required>

       
                      </div>
                    </div>
                  
                    <button type="submit" class="btn btn-primary pull-right">ADD COURSE</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>


  </div>



</body>

</html>