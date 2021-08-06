<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
header {
  position: relative;
  background-color: black;
  height: 65vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}
header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}
header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}
header .container {
  position: absolute;
		top: 87%;
		display: flex;
           z-index: 2;
}
</style>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
 
  </head>
  <body>
   <header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo base_url();?>assets/video/newvid.mp4" type="video/mp4">
  </video>
 <div class="container h-100" >
 <div class="d-flex h-100 text-center ">
 <div class="w-100 text-white">
    
        <h1 class="display-3" style="color: white; font-size: 3rem; font-weight: 700;
letter-spacing: .2rem;
text-shadow: .1rem .1rem .8rem black; background-color: rgba(100, 149, 237, 0.6); " ><span class="animate"></span></h1>
       </div>
     </div> 
	</div>
</header>
<script>
  var typed = new Typed('.animate', {
  strings: [
  "SKILLX For Professionals",
  "SKILLX For Job Seekers",
  "SKILLX For Companies",
  "SKILLX For Skills",
  ],
  typeSpeed: 120,
  backSpeed: 110,
  loop: true 
  
});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>