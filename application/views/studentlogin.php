<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/favicon.png">

  <title>SKILLX Student Login</title>

  <!-- Bootstrap CSS -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url();?>assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?= base_url(); ?>assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?= base_url(); ?>assets/css/notunstyle.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
  <!-- Homepage Links -->

 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets2/assets/css/style.css" rel="stylesheet">
  <style>
  .move{
    float:left;
    margin-right: 265px;
    position:fixed;
  }
  .mr-auto{
    color:black;
  }
  .login-img3-body{
	  background-image: url("<?php echo base_url();?>assets/img/image_6.jpg"); 
	  background-repeat: no-repeat;
  }
</style>

</head>

<body class="login-img3-body">
  <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" >
    <div class="container d-flex align-items-center">
     <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?= base_url(); ?>" class="logo1 mr-auto"><img src="<?= base_url(); ?>assets/img/SkillX_final.png" style="width: 140px; height: 180px;" alt="" class="img-fluid"></a>

      <h1 style="float:left;"><a href="#" class="logo mr-auto"></a></h1>
    </div>
  </header>
  
  <!-- End Header -->

  <div class="container">

    <form class="login-form" action="<?= base_url();?>Home/studentlogindo" method="post">
      <?php if($error1 = $this->session->flashdata('msg1')){ ?>
                           <strong><p style="color: red;"><?php echo  $error1; ?><p></strong>
                           <?php } ?>
      <div class="login-wrap">
	  <center><h2><b>STUDENT LOGIN</b></h2></center>
        <p class="login-img"><i class="icon_lock_alt"></i></p>
		
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="email" placeholder="Email" autofocus required>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <a href="<?= base_url();?>Home/studentsignup"class="btn btn-info btn-lg btn-block">New Student Signup</a>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          Designed by <a href="https://tridentdigitech.com/">Trident Digitech Service</a>
        </div>
    </div>
  </div>


</body>

</html>
