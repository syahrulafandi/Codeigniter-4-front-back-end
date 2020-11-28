<form class="form" method="post" action="<?= base_url('/loginpelanggan/index') ?>">
	<?php
	if (!empty($info)) {
		echo '<div class="alert alert-danger" role="alert">';
		echo $info;
		echo '</div>';
	}
	?>
	<div class="row">
		<div class="col-12">
			<div class="form-group">
				<label style="color : blue; font-weight : bold;">EMAIL</label>
				<input type="email" name="email" placeholder="Masukkan Email" required="required">
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label style="color :blue; font-weight : bold;">PASSWORD</label>
				<input type="password" name="password" placeholder="Masukkan Password" required="required">
			</div>
		</div>
		<div class="col-6 my-2 mx-auto">
			<input style="background : blue; text-align : center;" class="btn btn-primary btn-block" type="submit" name="login" value="Login">
		</div>
	</div>
</form>
<?= $this->renderSection('form_login') ?>
    <div class="row row-cols-3">
		<div class="col">
		    <a href="<?= base_url('registrasi') ?>">
	            <p style="color: blue; font-weight : bold;">Bukan member? <span>Sign Up</span></p>
            </a>
		</div>
		<!-- <div class="col">
		    <a href="<?= base_url('forgot') ?>">
	            <p style="color: red; font-weight : bold;">Lupa Password? <span >Klik disini</span></p>
            </a>
		</div> -->
	</div>