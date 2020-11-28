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
			<?php if ($cart->totalItems() === 0) : ?>
				<div class="alert alert-warning" role="alert">
					Keranjang Anda masih kosong silahkan belanja di <a href="<?= base_url('homepage') ?>" class="alert-link">Beranda</a>
				</div>
			<?php else : ?>
				<div class="row">
					<div class="col-12">
						<!-- Shopping Summary -->

						<?= $this->include('cart/summary') ?>

						<!--/ End Shopping Summary -->
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- Total Amount -->
						<div class="total-amount">
							<div class="row">
								<div class="col-lg-8 col-md-5 col-12">
								</div>
								<div class="col-lg-4 col-md-7 col-12">
									<div class="right">
										<ul>
											<li>Cart Subtotal<span>Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></span></li>
											<li>Shipping<span>Free</span></li>
											<li class="last">You Pay<span>Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></span></li>
										</ul>
										<div class="button5">
											<a href="<?= base_url('/checkout/index') ?>" class="btn">Checkout</a>
											<a href="<?= base_url('homepage') ?>" class="btn">Continue shopping</a>
											<a href="<?= base_url('/cart/removeall/') ?>" class="btn">Delete All Cart</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/ End Total Amount -->
					</div>
				<?php endif ?>
				</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->

	<!-- Start Shop Services Area  -->
	    <?= $this->include('template/shop_service') ?>
	<!-- End Shop Newsletter -->

	<?= $this->include('template/footer') ?>
	<?= $this->endSection() ?>