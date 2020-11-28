<table class="table shopping-summery">
	<thead>
		<tr class="main-hading">
			<th>NAMA PRODUK</th>
			<th>HARGA PRODUK</th>
			<th>JUMLAH</th>
			<th>TANGGAL BELI</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($histori as $item) : ?>
			<tr>
			    <td><?= $item['menu']; ?></td>
				<td>Rp. <?= number_format($item['harga'], 0, 0, '.'); ?></td>
				<td><?= $item['jumlah']; ?></td>
				<td><?= $item['tglorder']; ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<?= $this->renderSection('histori') ?>