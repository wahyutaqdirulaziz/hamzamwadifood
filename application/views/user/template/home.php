<!DOCTYPE html>
<html lang="en">
 <?php $this->load->view('user/template/head')  ?>
  <body class="goto-here">
	
	<?php $this->load->view('user/template/navbar') ?>
<!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(<?= base_url() ?>assets/user/images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
	              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(<?= base_url() ?>assets/user/images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
	              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>
	<?php $this->load->view('user/template/conten')?>

	


    <hr>

		<section class="ftco-section ftco-partner">
			<h3><center>Bekerjasama Dengan:</center> </h3><br>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="<?php echo base_url() ?>assets/user/images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="<?php echo base_url() ?>assets/user/images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="<?php echo base_url() ?>assets/user/images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="<?php echo base_url() ?>assets/user/images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="<?php echo base_url() ?>assets/user/images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section>

<?php $this->load->view('user/template/footer') ?>

  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?= base_url()?>assets/user/js/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/user/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url()?>assets/user/js/popper.min.js"></script>
  <script src="<?= base_url()?>assets/user/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/user/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url()?>assets/user/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url()?>assets/user/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url()?>assets/user/js/owl.carousel.min.js"></script>
  <script src="<?= base_url()?>assets/user/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url()?>assets/user/js/aos.js"></script>
  <script src="<?= base_url()?>assets/user/js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url()?>assets/user/js/bootstrap-datepicker.js"></script>
  <script src="<?= base_url()?>assets/user/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?= base_url()?>assets/user/js/google-map.js"></script>
  <script src="<?= base_url()?>assets/user/js/main.js"></script>
    
  </body>
</html>
