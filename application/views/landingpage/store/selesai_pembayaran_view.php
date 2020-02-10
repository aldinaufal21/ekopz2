<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/landingpage/images/shopping.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Status Barang</span></p>
            <h1 class="mb-0 bread">Status Barang</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Status Barang</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div style="background-color: green;" class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon"><img src="<?php echo base_url(); ?>assets/landingpage/images/note.png" width="50"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">pesanan dibuat</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div style="background-color: green;" class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon"><img src="<?php echo base_url(); ?>assets/landingpage/images/transfer.png" width="50"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pesanan Dibayarkan</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div style="background-color: grey;" class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pesanan Dikirimkan</h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div style="background-color: grey;" class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon"><img src="<?php echo base_url(); ?>assets/landingpage/images/smart-cart.png" width="50"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Barang Sampai</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <center>
    <div class="col-xl-10">
      <div class="row mt-5 pt-3">
        <div class="col-md-12 d-flex mb-5">
          <div class="cart-detail cart-total p-3 p-md-7">
            <h1 class="billing-heading mb-4">Data Briva</h3>
            <p class="d-flex">
              <span>Nama</span>
              <span><?php echo $transaksi->nama_depan; ?> <?php echo $transaksi->nama_belakang; ?></span>
            </p>
            <hr>
            <p class="d-flex">
              <span>Nomor Briva</span>
              <span>7777<?php echo $transaksi->noTelp; ?></span>
            </p>
            <hr>
            <p class="d-flex">
              <span>Total Pembayaran</span>
              <span>Rp.<?php echo number_format($transaksi->total,0,',','.'); ?></span>
            </p>
            <hr>
            <p class="d-flex">
              <span>Status Pembayaran</span>
              <span><b><?php echo $transaksi->status; ?></b></span>
            </div>
            </p>
        </div>
      </div>
    </div>
  </center>
