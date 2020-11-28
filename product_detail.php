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
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="<?= base_url('/') ?>">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="<?= base_url('product_detail') ?>">Product Detail</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Product Detail -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="mx-auto col-lg-8 col-12">
						<div class="checkout-form">
							<h2 class="mb-4">Product Detail</h2>
							<!-- Form -->
							<?= $this->include('product_detail/form_detail') ?>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Detail -->
		
		<!-- Start Shop Services Area  -->
		    <?= $this->include('template/shop_service') ?>
		<!-- End Shop Services -->
	<?= $this->include('template/footer') ?>
<?= $this->endSection() ?>