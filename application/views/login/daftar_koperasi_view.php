<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>Daftar/input_koperasi">
					<span class="login100-form-title p-b-59">
						Daftar Koperasi
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Nama Koperasi</span>
						<input class="input100" type="text" name="nama" placeholder="Ekopz">
						<span class="focus-input100"></span>
					</div>
          <div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Alamat</span>
            <textarea name="alamat" class="input100" type="text"></textarea>
						<span class="focus-input100"></span>
					</div>
					<span>koordinat Alamat</span>
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">lat</span>
            <textarea name="lat" class="input100" type="text"></textarea>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">long</span>
            <textarea name="long" class="input100" type="text"></textarea>
						<span class="focus-input100"></span>
					</div>
          <div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Tahun Berdiri</span>
						<input class="input100" type="text" name="tahun_berdiri" placeholder="2012">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="ekopz@admin.com">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="repeat_password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Upload Foto Koperasi</span>
						<input type="file" name="foto">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Saya Menyetujui
									<a href="#" class="txt2 hov1">
										ketentuan pengguna
									</a>
								</span>
							</label>
						</div>
					</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Daftar
						</button>
					</div>

					<a href="<?php echo base_url(); ?>Login/koperasi" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
						Login
						<i class="fa fa-long-arrow-right m-l-5"></i>
					</a>
				</div>
			</form>
		</div>
