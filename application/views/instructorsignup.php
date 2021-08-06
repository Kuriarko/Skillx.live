<!DOCTYPE html>
<html lang="en">

<head>
<style>
  .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
.move{
    float:left;
    margin-right: 265px;
    position:fixed;
  }
  .mr-auto{
    color:black;
  }
  .chokh{
	  position: absolute;
	  right: 15px;
	  transform: translate(0,-50%);
	  top: 50%;
	  cursor: pointer;
  }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
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
</head>

<body class="login-img3-body">
  <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
     <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?= base_url(); ?>" class="logo1 mr-auto"><img src="<?= base_url(); ?>assets/img/SkillX_final.png" style="width: 150px;" alt="" class="img-fluid"></a>

      <h1 style="float:left;"><a href="#" class="logo mr-auto"></a></h1>
    </div>
  </header>
  <!-- End Header -->

<div style="margin-top:100px;" class="container">






<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Instructor Registration</h4>
  <form method="post" action="<?= base_url(); ?>Home/instructorsignupdo">
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
      </div>
        <input name="name" class="form-control" placeholder="Full name" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
      </div>
        <input name="email" id="email" class="form-control" placeholder="Email address" type="email" required>
    </div><div id="msg1"></div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
      </div>
      
      <input name="phone" id="phone" class="form-control" placeholder="Phone number" type="text" required>
    </div><div id="msg"></div> <!-- form-group// -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
      </div>
      <input class="form-control" placeholder="Create password" id="password" name="password" minlength="5" type="password" required><span class="chokh"><i class="fa fa-eye" id="eye"></i></span>
    </div> <!-- form-group// --> 

	 <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
      </div>
	  
      <select class="form-control" name="company">
    <option value="select a city">select a company</option>
	<?php foreach($records as $r) { ?>
    <option value="<?php echo $r->name;?>"><?php echo $r->name;?></option>
    
	  <?php } ?>
</select>
	
    </div>
	
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="<?= base_url(); ?>Home/instructorlogin">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->
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
<script>
$(document).ready(function() 
{
$("#phone").blur(function() 
{
var phone = $('#phone').val();

  if(phone!="")
  {
    jQuery.ajax({
    type: "POST",
    url: "<?php echo base_url('/Home/checkInstructor'); ?>",
    dataType: 'html',
    data: {phone: phone},
    success: function(res) 
    {
      if(res==1)
      {
      $('#phone').val('');  
      $("#msg").css({"color":"red"});
      $("#msg").html("This number already exists").fadeIn().delay(3000).fadeOut('slow');
           
      }
      else
      {
      $("#msg").css({"color":"green"});
      $("#msg").html("Congrates phone available !").fadeIn().delay(3000).fadeOut('slow'); 
      }
      
    }
   
    });
  }
  else
  {
  alert("pls enter Phone Number ");
  }

});
$("#email").blur(function() 
{
var email = $('#email').val();

  if(email!="")
  {
    jQuery.ajax({
    type: "POST",
    url: "<?php echo base_url('/Home/checkInstructoremail'); ?>",
    dataType: 'html',
    data: {email: email},
    success: function(res) 
    {
      if(res==1)
      {
      $('#email').val('');  
      $("#msg1").css({"color":"red"});
      $("#msg1").html("This email already exists").fadeIn().delay(3000).fadeOut('slow');
           
      }
      else
      {
      $("#msg1").css({"color":"green"});
      $("#msg1").html("Congrates email available !").fadeIn().delay(3000).fadeOut('slow'); 
      }
      
    },
    error:function()
    {
    alert('some error');  
    }
    });
  }
  else
  {
  alert("pls enter email Number ");
  }

});
});
</script>

  <script>
 $(document).ready(function(){
	 const password = $('#password');
	 $('#eye').click(function(){
		 if(password.prop('type')=='password'){
			 $(this).addClass('fa fa-eye-slash');
			 password.attr('type','text')
		 }
		 else{
			 $(this).removeClass('fa-eye-slash');
			 password.attr('type','password');
		 }
	 })
	 
 })
</script>
</body>

</html>
