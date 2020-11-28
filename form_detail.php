<div class="card mb-4">
    <h2 class="card-header text-center">Detail Menu</h2>
    <div class="card-body">

        <div class="row">
            <div class="col-md-4">
                <img style="width: 250px; height: auto;" src="<?= base_url('/upload/' . $menu['gambar'] . '') ?>" class="rounded mx-auto my-2 d-block">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td style="vertical-align: middle">Nama Produk</td>
                        <td style="vertical-align: middle"><strong><?= $menu['menu'] ?></strong></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle">Harga</td>
                        <td style="vertical-align: middle"><strong>Rp. <?= $menu['harga'] ?></strong></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle">Deskripsi</td>
                        <td style="vertical-align: middle"><strong>Rp. <?= $menu['keterangan'] ?></strong></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle" colspan="2">
                            <div class="btn btn-sm btn-danger"><a href="<?= base_url('cart/buy/' . $menu['idmenu']) ?>">Beli</a></div>
                            <div class="btn btn-sm btn-danger"><a href="<?= base_url('/') ?>">Kembali</a></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>