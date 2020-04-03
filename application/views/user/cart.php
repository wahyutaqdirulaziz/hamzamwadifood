
<?php $this->load->view('user/template/head') ?>
<?php $this->load->view('user/template/navbar') ?>
<div class="hero-wrap hero-bread" style="background-image: url(<?= base_url() ?>assets/user/images/bg_1.jpg">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Nama Barang</th>
						        <th>Harga</th>
						        <th>Jumlah</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Nama Barang</h3>
						        </td>
						        
						        <td class="price">$4.90</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">RP.100.000</td>
						      </tr><!-- END TR-->

</tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    					
	            		</div>
    		</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    			
    				<p><a href="<?= base_url()?>user/home/cekout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>
		<?php $this->load->view('user/template/footer') ?>
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
</form>

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
  