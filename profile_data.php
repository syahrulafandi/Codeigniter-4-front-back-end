<div class="card mb-4">
    <h2 class="card-header text-center">Detail Pelanggan</h2>
    <div class="card-body">

        <div class="row">
            <div class="col-md-3">
               
            </div>
            <div class="col-md-9">
                <table class="table">
                    <tr>
                        <td style="vertical-align: middle">Nama</td>
                        <td style="vertical-align: middle"><strong><?= $pelanggan['pelanggan'] ?></strong></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle">Alamat</td>
                        <td style="vertical-align: middle"><strong><?= $pelanggan['alamat'] ?></strong></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle">Nomor Telepon</td>
                        <td style="vertical-align: middle"><strong><?= $pelanggan['telp'] ?></strong></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle">E-mail</td>
                        <td style="vertical-align: middle"><strong><?= $pelanggan['email'] ?></strong></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle">Password</td>
                        <td style="vertical-align: middle"><strong><?= $pelanggan['password'] ?></strong></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle" colspan="3">
                            <div class="btn btn-sm btn-danger"><a href="<?= base_url('profile/edit/' . $pelanggan['idpelanggan']) ?>">Edit Profil</a></div>
                            <div class="btn btn-sm btn-danger"><a href="<?= base_url('histori/index/' . $pelanggan['idpelanggan']) ?>">Histori Belanja</a></div>
                            <div class="btn btn-sm btn-danger"><a href="<?= base_url('/') ?>">Kembali</a></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>