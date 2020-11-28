<?php
if (isset($_GET['page_page'])) {
	$page = $_GET['page_page'];
	$jumlah = 3;
	$no = ($jumlah * $page) - $jumlah + 1;
} else {
	$no = 1;
}

?>
<div class="product-area section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Daftar Menu</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="product-info">
					<div class="nav-main">
						<?= $this->renderSection('header_inner') ?>
						<?php if (session()->getFlashdata('success') != null) { ?>
							<div class="alert alert-success">
								<?php echo session()->getFlashdata('success'); ?>
							</div>
						<?php } ?>
						<?php if (session()->getFlashdata('error') != null) { ?>
							<div class="alert alert-danger">
								<?php echo session()->getFlashdata('error'); ?>
							</div>
						<?php } ?>
						<!-- Tab Nav -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#all" role="tab">All Category</a></li>
							<?php foreach ($kategori as $key => $value) : ?>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href=".kategori<?php echo $value['idkategori'] ?>" role="tab"><?= $value['kategori'] ?></a></li>
							<?php endforeach ?>
						</ul>
						<!--/ End Tab Nav -->
					</div>
					<div class="tab-content" id="myTabContent">

						<!-- Start Single Tab -->
						<div class="tab-pane fade show active" id="all" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									<?php foreach ($menu as $key => $value) : ?>
										<div class="col-xl-3 col-lg-4 col-md-4 col-6">
											<div class="single-product">
												<div class="product-img">
													<a href="<?= base_url('productdetail/index/' . $value['idmenu']) ?>">
														<img class="default-img" style="width: 250px; height: 250px;" src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt="#">
														<img class="hover-img" style="width: 250px; height: 250px;" src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a title="Lihat Produk" href="<?= base_url('productdetail/index/' . $value['idmenu']) ?>"><i class=" ti-eye"></i><span>Lihat Detail Produk</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="<?= base_url('cart/buy/' . $value['idmenu']) ?>">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="<?= base_url('productdetail/index/' . $value['idmenu']) ?>"><?= $value['menu'] ?></a></h3>
													<div class="product-price">
														<span><?= $value['keterangan'] ?></span>
													</div>
													<div class="product-price">
														<span><?= $value['harga'] ?></span>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>
						<!--/ End Single Tab -->
						<!-- Start Single Tab -->
						<?php foreach ($kategori as $key => $value) : ?>
							<div class="tab-pane fade kategori<?= $value['idkategori'] ?>" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<?php foreach ($menu as $key => $data) : ?>
											<?php if ($data['idkategori'] === $value['idkategori']) : ?>
												<div class="col-xl-3 col-lg-4 col-md-4 col-6">
													<div class="single-product">
														<div class="product-img">
															<a href="<?= base_url('productdetail/index' . $data['idmenu']) ?>">
																<img class="default-img" style="width: 250px; height: 250px;" src="<?= base_url('/upload/' . $data['gambar'] . '') ?>" alt="#">
																<img class="hover-img" style="width: 250px; height: 250px;" src="<?= base_url('/upload/' . $data['gambar'] . '') ?>" alt="#">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a title="Lihat Produk" href="<?= base_url('productdetail/index/' . $data['idmenu']) ?>"><i class=" ti-eye"></i><span>Lihat Detail Produk</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="<?= base_url('cart/buy/' . $data['idmenu']) ?>">Add to cart</a>
																</div>
															</div>
														</div>
														<div class="product-content">
															<h3><a href="<?= base_url('productdetail/index' . $data['idmenu']) ?>"><?= $data['menu'] ?></a></h3>
															<div class="product-price">
																<span><?= $data['harga'] ?></span>
															</div>
														</div>
													</div>
												</div>
											<?php endif ?>
										<?php endforeach ?>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->renderSection('product_area') ?>