<?= $this->extend('template/header') ?>

<?= $this->section('header') ?>

<body class="js">

	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<?= $this->include('template/topbar') ?>
		<!-- End Topbar -->
		<?= $this->include('template/middle_inner') ?>
	</header>
	<!--/ End Header -->

	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<?php if ($count < 1) : ?>
				<div class="alert alert-warning" role="alert">
					Histori Belanja Anda masih kosong silahkan belanja di <a href="<?= base_url('homepage') ?>" class="alert-link">Beranda</a>
				</div>
			<?php else : ?>
				<div class="row">
					<div class="col-12">
						<!-- Shopping Summary -->

						<?= $this->include('histori/histori_data') ?>

						<!--/ End Shopping Summary -->
					</div>
				</div>
				<?php endif ?>
		</div>
	</div>
	<!--/ End Shopping Cart -->

	<!-- Start Shop Services Area  -->
	    <?= $this->include('template/shop_service') ?>
	<!-- End Shop Newsletter -->

	<?= $this->include('template/footer') ?>
	<?= $this->endSection() ?>