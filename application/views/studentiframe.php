   <html>
   <head>
   <style> 
   .container {
  position: relative;
  overflow: hidden;
  width: 100%;
   padding-top: 75%;
}

/* Then style the iframe to fit in the container div with full height and width */
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}

  .button {
  color: #fff;
  background-color: #111;
  border-color: #ccc;
  font-size: 14px;
  font-weight: 400;
  border: 1px solid transparent;
  border-radius: 4px;
  cursor: pointer;
  
  text-align: center;
  white-space: nowrap;
  
  padding: 6px 12px;
  
margin-top: 20px;
}

   
   </style>
   </head>
   
   <body>
   <div style="margin-top: 40px;">
	<button class="button" target="iframe_a" >Click to fullscreen</button>
	<button type="button" onclick="goBack()" class="btn btn-primary">Back</button>
	</div>
	
	<?php
        foreach($records4 as $r5)
         {    
       ?>

<div class="container" style="margin-top: 50px;">
  <iframe name="iframe_a" class="responsive-iframe" src="<?php echo base_url();?>uploads/images/<?php echo $r5->file_name;?>"></iframe>
</div>

		 <?php }?>
	
	<script>
	let btnBack = document.querySelector(".btn");
	
	btnBack.addEventListener('click', () => {
		window.history.back();
	});
	
	</script>
	<script>
	function goBack() {
  window.history.back();
}
	
	</script>
	<script>

var button = document.querySelector('.button');
button.addEventListener('click', fullscreen);
// when you are in fullscreen, ESC and F11 may not be trigger by keydown listener. 
// so don't use it to detect exit fullscreen
document.addEventListener('keydown', function (e) {
  console.log('key press' + e.keyCode);
});
// detect enter or exit fullscreen mode
document.addEventListener('webkitfullscreenchange', fullscreenChange);
document.addEventListener('mozfullscreenchange', fullscreenChange);
document.addEventListener('fullscreenchange', fullscreenChange);
document.addEventListener('MSFullscreenChange', fullscreenChange);

function fullscreen() {
  // check if fullscreen mode is available
  if (document.fullscreenEnabled || 
    document.webkitFullscreenEnabled || 
    document.mozFullScreenEnabled ||
    document.msFullscreenEnabled) {
    
    // which element will be fullscreen
    var iframe = document.querySelector('iframe');
    // Do fullscreen
    if (iframe.requestFullscreen) {
      iframe.requestFullscreen();
    } else if (iframe.webkitRequestFullscreen) {
      iframe.webkitRequestFullscreen();
    } else if (iframe.mozRequestFullScreen) {
      iframe.mozRequestFullScreen();
    } else if (iframe.msRequestFullscreen) {
      iframe.msRequestFullscreen();
    }
  }
  else {
    document.querySelector('.error').innerHTML = 'Your browser is not supported';
  }
}

function fullscreenChange() {
  if (document.fullscreenEnabled ||
       document.webkitIsFullScreen || 
       document.mozFullScreen ||
       document.msFullscreenElement) {
    console.log('enter fullscreen');
  }
  else {
    console.log('exit fullscreen');
  }
  // force to reload iframe once to prevent the iframe source didn't care about trying to resize the window
  // comment this line and you will see
  var iframe = document.querySelector('iframe');
  iframe.name = iframe.name;
}
</script>	 
	</body>	 
		  </html>