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
            <div class="row justify-content-md-center">
                <div class="alert alert-success">
                    <p class="text-center align-middle">Selamat, Pesanan Anda telah Berhasil Diproses!!</p>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Checkout -->

    <!-- Start Shop Services Area  -->
    <?= $this->include('template/shop_service') ?>
    <!-- End Shop Services -->

    <?= $this->include('template/footer') ?>
    <?= $this->endSection() ?>