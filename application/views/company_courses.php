<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SKILLX </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">  
  
  <style>
  *{
	  font-family: 'Lato', sans-serif;
	  
  }
  
  .navbar {
  text-transform: uppercase;
  font-weight: 700;
  font-size: .9rem;
  letter-spacing: .1rem;
  
}

.navbar-brand img {
  height: 3rem;
  

}

.navbar-nav li {
  padding-right: .7rem;
}
.navbar-dark .navbar-nav .nav-link {
  color: white;
  padding-top: .8rem;
}

  </style>
  
  
  </head>	
  
  <body>
	
	
	
	<section class="ftco-section ftco-no-pt" id="courses">
    	<div class="container-fluid px-md-4">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 style="margin-top: 40px;">Trending Courses</h2>
          </div>
        </div>
        <div class="container">
    		<div class="row">
			<?php
	foreach($records as $row)
			 { ?>
             <div class="col-md-3 col-sm-6 d-flex align-items-stretch" style="margin-top: 30px;"> 
			 <div class="card text-center" >
  
  <div class="card-block card-inverse card-primary text-xs-center">
  <img class="img-fluid" src="<?php echo base_url(); ?>uploads/courses/<?php echo $row->thumbnail;?>" alt="Card image cap">
    <h5 class="card-title" style="font-family: 'Roboto', sans-serif; font-weight: bold; padding-top: 10px;"><?php echo $row->course_name;?></h5>
	    <p class="card-text" style="font-family: 'Lora', serif;">Rs. <?php echo $row->course_price;?>/-</p>
		<p class="card-text" style="font-family: 'Lora', serif;">Duration: <?php echo $row->duration;?></p>
   

    <a href="<?php echo base_url();?>Home/coursecheckout/<?php echo $row->course_id;?>" ><button type="button"  style="background-color: #4169E1; color: white; border-color: white; ">ENROLL NOW</button></a>
  </div>
</div>

			 </div>
			 <?php } ?>
	

			  </div>
    		</div>
		
       
    	</div>
    </section>
	  <script src="<?php echo base_url(); ?>assets/js/jquery.min1.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url(); ?>assets/js/google-map.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/main2.js"></script>
    
  </body>
</html>