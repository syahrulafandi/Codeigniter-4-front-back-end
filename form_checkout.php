<form class="form" method="post" action="#">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
											<label>Nama Pertama<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nama Terakhir<span>*</span></label>
											<input type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Alamat Email<span>*</span></label>
											<input type="email" name="email" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Nomor Telepon<span>*</span></label>
											<input type="number" name="number" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Negara<span>*</span></label>
											<select name="country_name" id="country">
												<option value="IN">Indonesia</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Desa/Kota<span>*</span></label>
											<select name="state-province" id="state-province">
												<option value="divition" selected="selected">Surabaya</option>
												<option>Malang</option>
												<option>Semarang</option>
												<option>Bandung</option>
												<option>Jakarta</option>
												<option>Denpasar</option>
												<option>Serang</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 1<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address Line 2<span>*</span></label>
											<input type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Postal Code<span>*</span></label>
											<input type="text" name="post" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Perusahaany<span>*</span></label>
											<select name="company_name" id="company">
												<option value="company" selected="selected">Microsoft</option>
												<option>Apple</option>
												<option>Xaiomi</option>
												<option>Huawei</option>
												<option>Lenovo</option>
												<option>Samsung</option>
												<option>Motorola</option>
											</select>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group create-account">
											<input id="cbox" type="checkbox">
											<label>Buat Akun?</label>
										</div>
									</div>
								</div>
							</form>
<?= $this->renderSection('form_checkout') ?>