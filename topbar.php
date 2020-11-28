<!-- Topbar -->
<div class="topbar" style="background-color : #e8e8e8">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 col-12">
				<!-- Top Left -->
				<div class="top-left">
					<ul class="list-main">
						<li><i class="ti-headphone-alt"></i> <?= $identitas['nomortoko'] ?></li>
						<li><i class="ti-email"></i> <?= $identitas['emailtoko'] ?></li>
					</ul>
				</div>
				<!--/ End Top Left -->
			</div>
			<div class="col-lg-7 col-md-12 col-12">
				<!-- Top Right -->
				<div class="right-content">
					<ul class="list-main">
					    <?php if (!empty(session()->get('pelanggan'))) : ?>
					    <li><i class="ti-user"></i> <a href="<?= base_url('/profile/index/'.session()->get('idpelanggan')) ?>"><?= session()->get('pelanggan'); ?></a></li>
						<?php endif ?>
						<?php if (empty(session()->get('pelanggan'))) : ?>
							<li><i class="ti-power-off"></i><a href="<?= base_url('/loginpelanggan') ?>">Login</a></li>
						<?php else : ?>
							<li><i class="ti-power-off"></i><a href="<?= base_url('/loginpelanggan/logout') ?>">Logout</a></li>
						<?php endif ?>
					</ul>
				</div>
				<!-- End Top Right -->
			</div>
		</div>
	</div>
</div>
<!-- End Topbar -->
<?= $this->renderSection('topbar') ?>