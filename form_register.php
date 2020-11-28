<div class="col">
	<?php
	if (!empty(session()->getFlashdata('info'))) {
		echo '<div class="alert alert-danger" role="alert">';
		$error = session()->getFlashdata('info');
		foreach ($error as $key => $value) {
			echo $key . " => " . $value;
			echo "<br>";
		}
		echo '</div>';
	}
	?>
</div>
<form class="form" method="post" action="<?= base_url('registrasi/insert') ?>">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : blue; font-weight : bold;">Nama</label>
				<input type="text" name="pelanggan" placeholder="Type your name" required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : blue; font-weight : bold;">Alamat</label>
				<input type="text" name="alamat" placeholder="Your adress" required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : blue; font-weight : bold;">Nomer Telepon</label>
				<input type="text" name="telp" placeholder="input phone number" required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : blue; font-weight : bold;">Email</label>
				<input type="email" name="email" placeholder="Input email here" required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : blue; font-weight : bold;">Password</label>
				<input type="password" name="password" placeholder="Password" required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : blue; font-weight : bold;">Repeat Password</label>
				<input type="password" name="konfirmasi" placeholder="Repeat Password" required="required">
			</div>
		</div>
		<div class="col-6 my-4 mx-auto">
			<input style="background : #ffc107" class="btn btn-warning btn-block" type="submit" name="simpan" value="Register">
		</div>
	</div>
</form>
<?= $this->renderSection('form_register') ?>

<a href="<?= base_url('loginpelanggan') ?>">
	<p style="color : red; font-size: 18px">Sudah Punya akun? <span>Log In</span></p>
</a>