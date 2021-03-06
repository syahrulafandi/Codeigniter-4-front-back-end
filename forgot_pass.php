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
            <div style="color:#fff; background:rgba(255,255,255,0.8);" class="mx-auto col-sm-7 col-md-6 col-lg-5 col-12">
                <div class="m-5 login-form">
                    <h2 class="text-center mb-4">Forgot Password</h2>
                    <!-- Form -->
                    <form class="form" method="post" action="<?= base_url('/forgot/emailreset') ?>">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000; font-weight: bold;">Email</label>
                                    <input type="email" name="email" placeholder="Ketik email disini" required="required">
                                </div>
                            </div>
                            <div class="col-6 my-2 mx-auto">
                                <input style="background : #ffc107" class="btn btn-warning btn-block" type="submit" name="kirim" value="Kirim">
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Login -->

<?= $this->include('template/footer') ?>
<?= $this->endSection() ?>