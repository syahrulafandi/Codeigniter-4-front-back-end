<?= $this->extend('template/header') ?>

<?= $this->section('header') ?>

<!-- Header -->
<header class="header shop">
	<!-- Topbar -->
	<?= $this->include('template/topbar') ?>
	<!-- End Topbar -->
	<?= $this->include('template/middle_inner') ?>
</header>
<!--/ End Header -->

<!-- Start Login -->
<div style="background-image: url(<?= base_url('/img/hero/' . $identitas['hero'] . '') ?>); margin: 0;" class="shop login">
	<div class="container">
		<div class="row">
			<div style="color:#fff; background:rgba(255,255,255,0.8);" class="mx-auto col-sm-8 col-md-7 col-lg-6 col-12">
				<div class="mx-2 mt-5 login-form">
					<h2 class="text-center mb-4">Register</h2>
					<!-- Form -->
					<?= $this->include('login/form_register') ?>
					<!--/ End Form -->
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ End Login -->

<?= $this->include('template/footer') ?>
<?= $this->endSection() ?>