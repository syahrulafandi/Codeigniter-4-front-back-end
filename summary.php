<table class="table shopping-summery">
	<thead>
		<tr class="main-hading">
			<th>GAMBAR</th>
			<th>NAMA PRODUK</th>
			<th class="text-center">HARGA PRODUK</th>
			<th class="text-center">JUMLAH</th>
			<th class="text-center">TOTAL</th>
			<th class="text-center">HAPUS</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($cart->contents() as $item) : ?>
			<tr>
				<td class="image" data-title="No"><img src="<?= base_url('/upload/' . $item['gambar'] . '') ?>" alt="#"></td>
				<td class="product-des" data-title="Description">
					<p class="product-name"><a href="<?= base_url('productdetail/index/' . $item['id']) ?>"><?= $item['name']; ?></a></p>
				</td>
				<td class="price" data-title="Price"><span>Rp. <?php echo number_format($item['price'], 0, 0, '.'); ?></span></td>
				<td class="qty" data-title="Qty">
					<div class="row justify-content-md-center">
						<?php echo anchor('/cart/kurang/' . $item['qty'] . '/' . $item['rowid'], '<span style="padding: 12px 20px;" class="btn btn-primary">-</span>') ?>
						<input style="width: 50px; padding: 0px; margin: 0 10px;" type="text" name="quantity[]" class="input-number" data-min="1" data-max="100" value="<?= $item['qty']; ?>">
						<?php echo anchor('/cart/tambah/' . $item['qty'] . '/' . $item['rowid'], '<span style="padding: 12px 20px;" class="btn btn-success">+</span>') ?>
					</div>
				</td>
				<td class="total-amount" data-title="Total"><span>Rp. <?php echo number_format($item['qty'] * $item['price'], 0, 0, '.'); ?></span></td>
				<td class="action" data-title="Remove"><a href="<?= base_url('/cart/remove/' . $item['rowid']) ?>"><i class="ti-trash remove-icon"></i></a></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<?= $this->renderSection('summary') ?>