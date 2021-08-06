 <html>
 <head>
 <style>
 body {
  font-size: 62.5%;
  background: #dadada;
  font-family: 'Open Sans', sans-serif;
  line-height: 2;
  padding: 5em;
}

.accordion {
  font-size: 1rem;
  width: 30vw;
  margin: 0 auto;
  border-radius: 5px;
}

.accordion-header,
.accordion-body {
  background: white;
}

.accordion-header {
  padding: 1.5em 1.5em;
  background: #3F51B5;
  color: white;
  cursor: pointer;
  font-size: .7em;
  letter-spacing: .1em;
  transition: all .3s;
  text-transform: uppercase;
}

.accordion__item {
    border-bottom: 1px solid #3a4ba4;
}

.accordion__item .accordion__item {
  border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}

.accordion-header:hover {
  background: #2D3D99;
  position: relative;
  z-index: 5;
}

.accordion-body {
  background: #fcfcfc;
  color: #353535;
  display: none;
}

.accordion-body__contents {
  padding: 1.5em 1.5em;
  font-size: .85em;
}

.accordion__item.active:last-child .accordion-header {
  border-radius: none;
}

.accordion:first-child > .accordion__item > .accordion-header {
  border-bottom: 1px solid transparent;
}

.accordion__item > .accordion-header:after {
  content: "\f3d0";
  font-family: IonIcons;
  font-size: 1.2em;
  float: right;
  position: relative;
  top: -2px;
  transition: .3s all;
  transform: rotate(0deg);
}

.accordion__item.active > .accordion-header:after {
  transform: rotate(-180deg);
}

.accordion__item.active .accordion-header {
  background: #2D3D99;
}

.accordion__item .accordion__item .accordion-header {
  background: #f1f1f1;
  color: #353535;
}

@media screen and (max-width: 1000px) {
  body {
    padding: 1em;
  }
  
  .accordion {
    width: 100%;
  }
}

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
 
 <div class="accordion js-accordion" style="margin-top: 80px;">
 <?php
              foreach($records2 as $r1)
              {
             ?>
  <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header" href="#<?php echo $r1->module_id;?>"><?= $r1->module_name ?> <i class="menu-arrow arrow_carrot-right"></i><a style="margin-left: 50px; float: right; padding-bottom: 10px;" href="<?php echo base_url();?>Home/instructordeletemodule/<?php echo $r1->module_id;?>/<?php echo $r1->course_id;?>" class="btn btn-danger" onclick='return checkdelete()'>Delete</a></div> 
  <div class="accordion-body js-accordion-body" id="<?php echo $r1->module_id;?>">
    <div class="accordion-body__contents">
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
                              <a href='<?php echo base_url();?>Home/instructorfetchcontent/<?php echo $r2->content_id;?>'><h6><?php echo $r2->file_name;?></h6></a>
                            </td>
                            <td>
                              <a class="btn btn-danger" href="<?php echo base_url();?>Home/instructordeletecontent/<?php echo $r2->content_id;?>/<?php echo $r2->course_id;?>"><i class="icon_close_alt2"></i></a>
                            </td>
                        <?php 
                          }
                          elseif($r2->status==0)
                          { 
                        ?> 
                          
                            
                            <td>
                              <a href='<?php echo base_url();?>Home/instructorfetchcontent/<?php echo $r2->content_id;?>'><h6><?php echo $title;?></h6></a>
                            </td>
                            <td>
                              <a class="btn btn-danger" href="<?php echo base_url();?>Home/instructordeletecontent/<?php echo $r2->content_id;?>/<?php echo $r2->course_id;?>"><i class="icon_close_alt2"></i></a>
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
 
  
			  <?php } ?>
  


</div><!-- end of accordion -->




<script>
var accordion = (function(){
  
  var $accordion = $('.js-accordion');
  var $accordion_header = $accordion.find('.js-accordion-header');
  var $accordion_item = $('.js-accordion-item');
 
  // default settings 
  var settings = {
    // animation speed
    speed: 400,
    
    // close all other accordion items if true
    oneOpen: false
  };
    
  return {
    // pass configurable object literal
    init: function($settings) {
      $accordion_header.on('click', function() {
        accordion.toggle($(this));
      });
      
      $.extend(settings, $settings); 
      
      // ensure only one accordion is active if oneOpen is true
      if(settings.oneOpen && $('.js-accordion-item.active').length > 1) {
        $('.js-accordion-item.active:not(:first)').removeClass('active');
      }
      
      // reveal the active accordion bodies
      $('.js-accordion-item.active').find('> .js-accordion-body').show();
    },
    toggle: function($this) {
            
      if(settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
        $this.closest('.js-accordion')
               .find('> .js-accordion-item') 
               .removeClass('active')
               .find('.js-accordion-body')
               .slideUp()
      }
      
      // show/hide the clicked accordion item
      $this.closest('.js-accordion-item').toggleClass('active');
      $this.next().stop().slideToggle(settings.speed);
    }
  }
})();

$(document).ready(function(){
  accordion.init({ speed: 300, oneOpen: true });
});

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