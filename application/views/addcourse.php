<html>
<head>
<style>

</style>
<link href="/assets/css/material-kit.min.css?v=2.2.0" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>
<body>  

  <section id="main-content" style="margin-top: 100px;">
      <section class="wrapper">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <h1>ADD COURSE</h1>
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="<?php echo base_url();?>Home/notunformesechay" enctype="multipart/form-data">
                    <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <strong><p style="color: green;"><?php echo  $error1; ?><p></strong>
                           <?php } ?>
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Course Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="course_name" type="text" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Description <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="description" type="text" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Duration <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="address" name="duration" type="text" required/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Price <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="username" name="course_price" type="text" required/>
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="username" class="control-label col-lg-2">Select a company <span class="required">*</span></label>
                      <div class="col-lg-10">
					 
                       <select name="city" class="form-control" name="company_id">
					   
					    <?php foreach($records as $r) { ?>
    
    <option value="<?php $r->name;?>"><?php echo $r->id;?></option>
   
 <?php } ?>
</select>

					 
                      </div>
                    </div>
                    <div class="form-group ">
                       <label for="apply"><input type="file" name="file" id="apply" accept="image/*,.pdf"><b>Click Here To Upload Thumbnail</b></label>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://tridentdigitech.com.com/">Trident Ventures</a>
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>

</body>

</html>
