<div class="middle-inner" style="background-color : #222021">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-12">
				<!-- Logo -->
				<div>
					<a href="<?= base_url('/homepage') ?>"><img style="width: 70px; height: 70px" src="<?= base_url('/img/logo/' . $identitas['logo'] . '') ?>" alt="logo"></a>
				</div>
				<!--/ End Logo -->
				<!-- Search Form -->
			 	<div class="search-top" style = "color:red">
					<div class="top-search"><a href="<?php echo base_url('cart'); ?>"><i class ="ti-bag" ></i></a></div>
				</div>
				<!--/ End Search Form -->
				<div class="mobile-nav"></div>
			</div>
			<div class="col-lg-10 col-md-10 col-12">
				<div class="right-bar">
					<!-- Search Form -->
					<div class="sinlge-bar shopping">
						<a href="<?php echo base_url('cart'); ?>" class="single-icon"><i style="color: white" class="ti-bag"></i> <span class="total-count"><?= $cart->totalItems() ?></span></a>
						<!-- Shopping Item -->
						<div class="shopping-item">
							<div class="dropdown-cart-header">
								<span><?= $cart->totalItems() ?> Item</span>
								<a href="<?php echo base_url('cart'); ?>">View Cart</a>
							</div>
							<ul class="shopping-list">
								<?php foreach ($cart->contents() as $item) : ?>
									<li>
										<a class="cart-img" href="<?= base_url('productdetail/index/' . $item['id']) ?>"><img src="<?= base_url('/upload/' . $item['gambar'] . '') ?>" alt="#"></a>
										<h4><a href="<?= base_url('productdetail/index/' . $item['id']) ?>"><?= $item['name']; ?></a></h4>
										<p class="quantity"><?= $item['qty'] ?>x - <span class="amount">Rp. <?php echo number_format($item['price'], 0, 0, '.'); ?></span></p>
									</li>
								<?php endforeach ?>
							</ul>
							<div class="bottom">
								<div class="total">
									<span>Total</span>
									<span class="total-amount">Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></span>
								</div>
								<a href="<?= base_url('checkout/index') ?>" class="btn animate">Checkout</a>
							</div>
						</div>
						<!--/ End Shopping Item -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->renderSection('middle_inner') ?>