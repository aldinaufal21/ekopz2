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
      <div class="container">
					<div class="col-xl-20">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h2 class="billing-heading mb-4">Info Pembayaran</h3>
	          			<p class="d-flex">
		    						<span>Nama</span>
		    						<span><?php echo $pembayaran->nama_depan; ?></span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Metode Pembayaran</span>
		    						<span><?php echo $transaksi->metode_pembayaran; ?></span>
		    					</p>
                  <p class="d-flex">
		    						<span>Nomor Briva</span>
		    						<span><?php echo $pembayaran->noTelp; ?></span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Alamat </span>
		    						<span><?php echo $pembayaran->alamat; ?></span>
		    					</p>
                  <p class="d-flex">
		    						<span>Total Pembayaran</span>
		    						<span><?php echo $pembayaran->total; ?></span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Status Pembayaran</span>
		    						<span><?php echo $pembayaran->status; ?></span>
		    					</p>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
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
