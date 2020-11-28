<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<div class="col">
    <?php
        if (!empty(session()->getFlashdata('info'))) {
            echo '<div class="alert alert-danger" role="alert">';
            $error = session()->getFlashdata('info');
            foreach ($error as $key => $value) {
                echo $key."=>".$value;
                echo "<br>";
            } 
            echo '</div>';
        } 
    ?>
</div>

<div class="col">
    <h3>INSERT DATA</h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/menu/insert') ?>" method="post" enctype="multipart/form-data">
        <label for="Kategori">Kategori</label>
        <div class="form-group">
            <select class="form-control" name="idkategori" id="idkategori">
                <?php foreach($kategori as $key => $value): ?>
                <option value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="Menu">Menu</label>
            <input class="form-control" type="text" name="menu" required>
        </div>
        <div class="form-group">
            <label for="Harga">Harga</label>
            <input class="form-control" type="text" name="harga" required>
        </div>
        <div class="form-group">
            <label for="Gambar">Gambar</label>
            <input class="form-control" type="file" name="gambar" required>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="simpan" value="SIMPAN">
        </div>
    </form>
</div>

<?= $this->endSection() ?>