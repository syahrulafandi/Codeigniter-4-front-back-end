<?= $this->extend('template/header') ?>

<?= $this->section('header') ?>

<body class="js">

	<!-- Preloader -->
	<?= $this->include('template/preloader') ?>
	<!-- End Preloader -->

	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<?= $this->include('template/topbar') ?>
		<!-- End Topbar -->
		<?= $this->include('template/middle_inner') ?>
	</header>
	<!--/ End Header -->

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?= base_url('/') ?>">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="<?= base_url('checkout') ?>">Checkout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Checkout -->
	<section class="shop checkout section">
		<div class="container">
			<?php if ($cart->totalItems() === 0) : ?>
				<div class="alert alert-warning" role="alert">
					Keranjang Anda masih kosong silahkan belanja di <a href="<?= base_url('homepage') ?>" class="alert-link">Beranda</a>
				</div>
			<?php else : ?>
			<div class="row justify-content-md-center">
				<?= $this->include('checkout/total') ?>
			</div>
			<?php endif ?>
		</div>
	</section>
	<!--/ End Checkout -->

	<!-- Start Shop Services Area  -->
	<?= $this->include('template/shop_service') ?>
	<!-- End Shop Services -->

	<?= $this->include('template/footer') ?>
	<?= $this->endSection() ?>