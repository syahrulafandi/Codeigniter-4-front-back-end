<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<div class="row">
<div class="col">
   <h1>Data order</h1>
</div>
</div>

<?php
    if (isset($_GET['page'])) {
       $page = $_GET['page'];
       $jumlah = 2;
       $no =  ($jumlah * $page) - $jumlah + 1;
    }
    else{
            $no= 1;
    }

?>

<div class="row">
<div class="col">
<table class="table">
      <tr>
<th>No</th>
        <th>idorder</th>
        <th>pelanggan</th>
        <th>tanggal</th>
        <th>total</th>
        <th>bayar</th>
        <th>kembali</th>
        <th>status</th>
</tr>

<?php $no ?>
<?php foreach($order as $value): ?>
<tr>
       <td><?= $no++ ?></td>
       <td><?= $value['idorder'] ?></td>
       <td><?= $value['pelanggan']?></td>
       <td><?= $value['tglorder']?></td>
       <td><?= $value['total']?></td>
       <td><?= $value['bayar']?></td>
       <td><?= $value['kembali']?></td>

       <?php 
           if ($value['status']==1) {
              $status="lunas";
           } else {
               $status= "<a href='".base_url("/admin/order/find")."/".$value['idorder'] ."'>bayar</a>";
           }
           
       ?>
       <td><?= $status?></td>
       </tr>


<?php endforeach; ?>






</table>

<?= $pager->makeLinks(1, $perPage, $total, 'bootstrap') ?>


</div>

</div>

<?= $this->endSection() ?>

