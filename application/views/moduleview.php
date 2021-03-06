<style>
  .panel-heading{
    color:white;
    background-color: #8B008B;
    text-align:center;
  }
  .panel-heading h1{
    position:relative;
    margin-left: 120px;
  }
  html,body{overflow-y: scroll; }

  #accordionEx{
    width:31%;
  }
  /*#myCanvas {
    cursor: crosshair;
    position: relative;
    width:30%;
  }*/
  #containertab{
    position: relative;
    top:-612px;
    right:-790px;
  }
  .nav-tabs{
    width:31%;
  } 
  .card-body{
    width:31%;
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
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  padding: 6px 12px;
  margin-left: 720px;
  margin-top:-75px;
}



</style>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<!--Tab-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--End of Tab-->

 <section id="main-content">
  <section class="wrapper">     
      <header class="panel-heading">
        <h1 style="padding-right: 120px;">Modules</h1>
      </header>
       <?php
        foreach($records1 as $r)
         {    
       ?>
      <!--Iframe starts-->
      <div class="iframecontainer"  style="position:relative; top:10px;">
        <iframe class="responsive-iframe" src="<?php echo base_url();?>uploads/courses/<?php echo $r->thumbnail;?>" name="iframe_a" height="600px" width="70%" title="Iframe Example">   
        </iframe>
      </div>
      <!--Iframe ends-->
       <?php
         }
       ?>
      <!--Dynamic Tab Starts-->
      <div class="container" id="containertab">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Contents</a></li>
          <li><a data-toggle="tab" href="#menu2">Live Class</a></li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
             <?php
              foreach($records2 as $r1)
              {
             ?> 
              <!-- Accordion card -->
              <div class="card">
                        
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo2">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#<?php echo $r1->module_id;?>"
                    aria-expanded="false" aria-controls="collapseTwo2">
                    <h1 class="mb-0">
                      <?= $r1->module_name ?> <i class="menu-arrow arrow_carrot-right"></i><a href="<?php echo base_url();?>Home/deletemodule/<?php echo $r1->module_id;?>/<?php echo $r1->course_id;?>" class="btn btn-danger" onclick='return checkdelete()'>Delete</a>
                    </h1>
                  </a>
                </div>
                 
                <!-- Card body -->
                <div id="<?php echo $r1->module_id;?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                  data-parent="#accordionEx">
                  <div class="card-body">
                   <?php
                   
                   echo "<table>";
                      foreach($records3 as $r2)
                      {
                        $title = ellipsize($r2->file_name,50);
                        if($r1->module_id == $r2->module_id)
                        {
                            echo "<tr>";
                          if($r2->status == 1)
                          { 
                   ?>
                            <td>
                              <a href='<?php echo base_url();?>uploads/images/<?php echo $r2->file_name;?>' target="iframe_a"><h6><?php echo $r2->file_name;?></h6></a>
                            </td>
                            <td>
                              <a class="btn btn-danger" href="<?php echo base_url();?>Home/deletecontent/<?php echo $r2->content_id;?>/<?php echo $r2->course_id;?>"><i class="icon_close_alt2"></i></a>
                            </td>
                        <?php 
                          }
                          elseif($r2->status==0)
                          { 
                        ?> 
                          
                            
                            <td>
                              <a href='<?php echo base_url();?>uploads/images/<?php echo $r2->file_name;?>' target="iframe_a"><h6><?php echo $title;?></h6></a>
                            </td>
                            <td>
                              <a class="btn btn-danger" href="<?php echo base_url();?>Home/deletecontent/<?php echo $r2->content_id;?>/<?php echo $r2->course_id;?>"><i class="icon_close_alt2"></i></a>
                            </td>
                          
                        <?php
                          }
                          echo "</tr>";
                        
                        }
                      }
                      echo "</table>";
                   ?> 
                     
                  </div>
                </div> 
              </div>
              <!-- Accordion card -->
            <?php
            }
            ?>
            </div>
			
            <!-- Accordion wrapper -->
          </div>
            <!-- White Board -->
          <!-- <div id="menu1" class="tab-pane fade">
            <canvas id="myCanvas">
              Sorry, your browser does not support HTML5 canvas technology.
            </canvas>
          </div> -->
            <!-- End of White Board -->

            <!-- Live Class -->
          <div id="menu2" class="tab-pane fade">
            <div>
              <button class="button" target="iframe_a">Click me to fullscreen the iframe</button>
            </div>
          </div>
          <!-- End of Live Class -->
        </div>
      </div>
      <!--Dynamic Tab Ends-->
  </section>
 </section>
<script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
<script>
  window.onload = function() {
  var myCanvas = document.getElementById("myCanvas");
  var ctx = myCanvas.getContext("2d");
    
    // Fill Window Width and Height
    myCanvas.width = window.innerWidth;
  myCanvas.height = window.innerHeight;
  
  // Set Background Color
    ctx.fillStyle="#D1F2EB";
    ctx.fillRect(0,0,myCanvas.width,myCanvas.height);
  
    // Mouse Event Handlers
  if(myCanvas){
    var isDown = false;
    var canvasX, canvasY;
    ctx.lineWidth = 5;
    
    $(myCanvas)
    .mousedown(function(e){
      isDown = true;
      ctx.beginPath();
      canvasX = e.pageX - myCanvas.offsetLeft;
      canvasY = e.pageY - myCanvas.offsetTop;
      ctx.moveTo(canvasX, canvasY);
    })
    .mousemove(function(e){
      if(isDown !== false) {
        canvasX = e.pageX - myCanvas.offsetLeft;
        canvasY = e.pageY - myCanvas.offsetTop;
        ctx.lineTo(canvasX, canvasY);
        ctx.strokeStyle = "#000";
        ctx.stroke();
      }
    })
    .mouseup(function(e){
      isDown = false;
      ctx.closePath();
    });
  }
  
  // Touch Events Handlers
  draw = {
    started: false,
    start: function(evt) {

      ctx.beginPath();
      ctx.moveTo(
        evt.touches[0].pageX,
        evt.touches[0].pageY
      );

      this.started = true;

    },
    move: function(evt) {

      if (this.started) {
        ctx.lineTo(
          evt.touches[0].pageX,
          evt.touches[0].pageY
        );

        ctx.strokeStyle = "#000";
        ctx.lineWidth = 5;
        ctx.stroke();
      }

    },
    end: function(evt) {
      this.started = false;
    }
  };
  
  // Touch Events
  myCanvas.addEventListener('touchstart', draw.start, false);
  myCanvas.addEventListener('touchend', draw.end, false);
  myCanvas.addEventListener('touchmove', draw.move, false);
  
  // Disable Page Move
  document.body.addEventListener('touchmove',function(evt){
    evt.preventDefault();
  },false);
};

//API Full Screen
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

  function checkdelete(){
    return confirm('Do you want to delete this?');
  }
</script>

