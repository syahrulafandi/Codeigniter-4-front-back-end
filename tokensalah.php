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
            <div style="color:#fff; background:rgba(255,255,255,0.55);" class="mx-auto col-sm-5 col-12">
                <div class="m-5 login-form">
                    <h2 class="text-center mb-4">Token Kadaluarsa Silahkan Kirim Email Lagi !</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Login -->

<?= $this->include('template/footer') ?>
<?= $this->endSection() ?>