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
	
	<!-- Slider Area -->
	    <?= $this->include('template/slider') ?>
	<!--/ End Slider Area -->
	
	<!-- Start Product Area -->
        <?= $this->include('home/product_area') ?>
	<!-- End Product Area -->
	
	<!-- Start Shop Services Area -->
	    <?= $this->include('template/shop_service') ?>
	<!-- End Shop Services Area -->
	
    <?= $this->include('template/footer') ?>
<?= $this->endSection() ?>