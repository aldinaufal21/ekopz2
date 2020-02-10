<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/landingpage/images/shopping.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <form action="<?php echo base_url(); ?>Store/status_pembayaran/<?php echo $transaksi->id_transaksi; ?>" class="billing-form" method="POST">
        <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
							<h3 class="mb-4 billing-heading">Data Transaksi</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Nama Depan</label>
	                  <input type="text" name="nama_depan" class="form-control" value="<?php echo $transaksi->nama_depan; ?> ">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" name="nama_belakang" class="form-control" value="<?php echo $transaksi->nama_belakang; ?>">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="provinsi">Provinsi</label>
		            		<input type="text" name="provinsi" class="form-control" value="<?php echo $transaksi->provinsi; ?>">
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" name="alamat" class="form-control" value="<?php echo $transaksi->alamat; ?>">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" name="kota" class="form-control" value="<?php echo $transaksi->kota; ?>">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" name="kodepos" class="form-control" value="<?php echo $transaksi->kodepos; ?>">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" name="noTelp" class="form-control" value="<?php echo $transaksi->noTelp; ?>">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" name="email" class="form-control" value="<?php echo $transaksi->email; ?>">
	                </div>
                </div>
                <div class="w-100"></div>
	            </div>
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Total Keranjang</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>Rp.<?php echo number_format($transaksi->total,0,',','.'); ?></span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span>Rp.<?php echo number_format($transaksi->total,0,',','.'); ?></span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Pembayaran</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="metode_pembayaran" value="briva" class="mr-2">Briva</label>
											</div>
										</div>
									</div>
                  
									<button type="submit" class="btn btn-primary py-3 px-4">Bayar</button>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
      </form>
    </section> <!-- .section -->

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
