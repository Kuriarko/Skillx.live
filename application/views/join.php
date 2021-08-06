<?php
include("header.php");
?>
<!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <br><br>
        <div class="section-title" data-aos="fade-up">
          <h2>OPEN AN ACCOUNT</h2>
		  <h5>Join World's fastest growing Skill Community!</h5>
		  <p style="text-align:justify;font-family:helvetica, arial;">Welcome to the largest, fastest-growing Skill community in the world.   Skillx is the premier online marketplace for buying and selling your skills.   We're also the easiest way to network with other skilled professionals and stay in touch with the leaders !   Our interactive website is designed to bring together skilled professionals and service buyers by providing power online tools to all three groups.</p>
        </div>

        <div class="row content">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
            <a href="<?php echo base_url();?>index.php/Home/skilledprof" class="btn btn-warning btn-lg btn-block" style="align:center">SKILLX FOR <br>Skilled Professionals</a>
			<br>
			<p style="font-family:arial;">
              I am a skilled professional who is interested in creating an online portfolio, selling print-on-demand skils or services, networking with other members, and more!
            </p>
          </div>
          <div class="col-lg-4 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <a href="<?php echo base_url();?>index.php/Home/study" class="btn btn-danger btn-lg btn-block" style="align:center">SKILLX FOR <br>Job Seekers & Learners</a>
			<br>
			<p style="font-family:arial;">
              I am a learner who is interested to learn print-on-demand skills from top leaders, networking with other members, and more!
            </p>
            
          </div>
		  <div class="col-lg-4 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <a href="<?php echo base_url();?>index.php/Home/skillbuy" class="btn btn-primary btn-lg btn-block" style="align:center">SKILLX FOR <br> Companies</a>
			<br>
			<p style="font-family:arial;">
              I am interested in purchasing skills or service offerings, browsing latest events or newly joined skilled professionals of my choice, and interacting with members.
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
<?php	
include("footer.php");
?>