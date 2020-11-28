<!-- Start Checkout -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-12 col-12">
						<div class="checkout-form">
							<h2>Ubah profil anda</h2>
							<!-- Form -->
							<form class="form" method="post" action="<?= base_url('profile/update') ?>" enctype="multipart/form-data" >
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nama<span>*</span></label>
											<input type="text" name="pelanggan" value="<?= $pelanggan['pelanggan'] ?>" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Alamat<span>*</span></label>
											<input type="text" name="alamat" value="<?= $pelanggan['alamat'] ?>" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email<span>*</span></label>
											<input type="email" name="email" value="<?= $pelanggan['email'] ?>" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nomer Telepon<span>*</span></label>
											<input type="text" name="telp" value="<?= $pelanggan['telp'] ?>" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Password<span>*</span></label>
											<input type="text" name="password" value="<?= $pelanggan['password'] ?>" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Gambar<span>*</span></label>
                                            <input type="file" name="foto" placeholder="">
										</div>
									</div>
								</div>
							
                                <input type="hidden" name="idpelanggan" value="<?= $pelanggan['idpelanggan'] ?>">
                                <button class="btn mt-2 ml-3" type="submit" name="simpan">Ubah</button>
							</form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->