<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/landingpage/images/bg_1.jpg');">
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
      <form action="<?php echo base_url(); ?>Store/transaksi" class="billing-form" method="POST">
        <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
							<h3 class="mb-4 billing-heading">Data Diri</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Nama Depan</label>
	                  <input type="text" name="nama_depan" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Nama Belakang</label>
	                  <input type="text" name="nama_belakang" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="provinsi">Provinsi</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="provinsi" id="" class="form-control">
		                  	<option value="banten">Banten</option>
		                    <option value="jakarta">Jakarta</option>
		                    <option value="jawa barat">Jawa Barat</option>
		                    <option value="jawa tengah">Jawa Tengah</option>
                        <option value="sulawesi selatan">Sulawesi Selatan</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Alamat Lengkap</label>
	                  <input type="text" name="alamat" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Kota</label>
	                  <input type="text" name="kota" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Kode Pos</label>
	                  <input type="text" name="kodepos" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Nomor Telepon</label>
	                  <input type="text" name="noTelp" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email</label>
	                  <input type="text" name="email" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
	            </div>
					</div>
          <div class="col-md-7">
            <div class="cart-detail p-3 p-md-4">
              <h3 class="billing-heading mb-4">Metode Pembayaran</h3>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="radio">
                    <label><input type="radio" name="metode_pembayaran" value="briva" class="mr-2">Briva</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="radio">
                     <label><input type="radio" name="transfer" class="mr-2"> Transfer Bank</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="radio">
                     <label><input type="radio" name="checkpayment" class="mr-2"> Alfamart</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="radio">
                     <label><input type="radio" name="checkpayment" value="indomaret" class="mr-2"> Indomaret</label>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary py-3 px-4">Place an Order</button>
            </div>
          </div>
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
