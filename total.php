<div class="col-lg-4 col-12">
	<div class="order-details">
		<!-- Order Widget -->
		<div class="single-widget">
			<h2>CART TOTALS</h2>
			<div class="content">
				<ul>
					<li>Sub Total<span>Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></span></li>
					<li>(+) Shipping<span>$0.00</span></li>
					<li class="last">Total<span>Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></span></li>
				</ul>
			</div>
		</div>
		<!--/ End Order Widget -->
		<!-- Order Widget -->
		<!-- <div class="single-widget">
			<h2>Payments</h2>
			<div class="content">
				<div class="checkbox">
					<label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label>
					<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Cash On Delivery</label>
					<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox"> PayPal</label>
				</div>
			</div>
		</div> -->
		<!--/ End Order Widget -->
		<!-- Payment Method Widget -->
		<div class="single-widget payement">
			<div class="content">
				<img src="<?= base_url('template/images/payment-method.png') ?>" alt="#">
			</div>
		</div>
		<!--/ End Payment Method Widget -->
		<!-- Button Widget -->
		<div class="single-widget get-button">
			<div class="content">
				<div class="button">
					<form action="<?= base_url('/checkout/proceed') ?>" method="post">
						<button type="submit" class="btn">Proceed to checkout</button>
					</form>
				</div>
			</div>
		</div>
		<!--/ End Button Widget -->
	</div>
</div>
<?= $this->renderSection('total') ?>