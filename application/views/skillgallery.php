
<!DOCTYPE html>
<html>
<head>
	<title>Skill Gallery</title>
	<link href="<?php echo base_url();?>assets/css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>	
	<!--//fonts-->
		<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Click On Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smooth-scrolling -->

</head>
<body>
<!-- banner -->

<!-- //banner -->
<!-- portfolio -->
<div id="portfolio" class="portfolio">
	<!-- Portfolio Starts Here -->
	<div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="project">
		<div class="container">
			<div class="portfolio-info">
				<h3>SKILLS GALLERY</h3>
				<p>Each of our prjects involve the following stages of creation process.
					Elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia 
					nisl. Curabitur tempus tellus et vulputate vestibulum. </p>
			</div>
		
					<ul id="filters" class="clearfix">
							<li><span class="filter active" data-filter="app card icon web">CATEGORY 1</span></li>
							<li><span class="filter" data-filter="app">CATEGORY 2</span></li>
							<li><span class="filter" data-filter="card">CATEGORY 3</span></li>
							<li><span class="filter" data-filter="web">CATEGORY 4</span></li>
					</ul>
		
					<div id="portfoliolist">
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-1.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-1.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/>
								</h2>
								
								</div></a>
							</div>
						</div>				
						<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-2.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-2.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/></h2>
								
								</div></a>
							</div>
						</div>	
						
						<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-3.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-3.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/>
								</h2>
								
								</div></a>
							</div>
						</div>
						<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-4.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-4.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/></h2>
								
								</div></a>
							</div>
						</div>
						<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-5.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-5.jpg" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/>
									</h2>
								</div>
								</a>
							</div>
						</div>
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-6.jpg" alt=""/>
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/>
								</h2>
								</div></a>
							</div>
						</div>
						<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-7.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-7.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/></h2>
								
								</div></a>
							</div>
						</div>
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-8.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-8.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/>
								</h2>
								</div></a>
							</div>
						</div>
						<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-9.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-9.jpg" alt=""/>
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/>
								</h2>
								</div></a>
							</div>
						</div>
						<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-1.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-1.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/>
								</h2>
								
								</div></a>
							</div>
						</div>
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-2.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-2.jpg" alt=""/>
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/>
								</h2>
								</div></a>
							</div>
						</div>
						<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="<?php echo base_url();?>assets/img/portfolio/portfolio-3.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/portfolio-3.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="<?php echo base_url();?>assets/img/portfolio/e.png" class="zoom" alt=""/>
								</h2>								
								</div></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
		
	</div>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/css/swipebox.css">
				<script src="<?php echo base_url();?>assets/js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
				<!-- Portfolio Ends Here -->
				<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						var filterList = {
							init: function () {
								// MixItUp plugin
							// http://mixitup.io
							$('#portfoliolist').mixitup({
								targetSelector: '.portfolio',
								filterSelector: '.filter',
								effects: ['fade'],
								easing: 'snap',
								// call the hover effect
								onMixEnd: filterList.hoverEffect()
							});	
						},
						hoverEffect: function () {
							// Simple parallax effect
							$('#portfoliolist .portfolio').hover(
								function () {
									$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
									$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
								},
								function () {
									$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
									$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
								}		
							);				
						}
					};
					// Run the show!
						filterList.init();
					});	
					</script>
	</div>
</div>
<!-- //portfolio -->
<!-- footer -->
<?php include("footer.php");?>
<!-- //footer -->
</body>
</html>