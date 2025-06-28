<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<<<<<<< HEAD
=======
<?php
if (session()->getFlashData('success')) {
?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php
}
?>
>>>>>>> 29b0c264b76cb88e7ef17cc5e16a46edbeb31f92
<!-- Table with stripped rows -->
<div class="row">
  <?php foreach ($product as $key => $item) : ?>
    <div class="col-lg-6">
<<<<<<< HEAD
      <div class="card">
        <div class="card-body">
          <img src="<?php echo base_url() . "NiceAdmin/assets//img/" . $item['foto'] ?>" alt="..." width="100%">
          <h5 class="card-title"><?php echo $item['nama'] ?><br><?php echo $item['harga'] ?></h5>
        </div>
      </div>
=======
      <?= form_open('keranjang') ?>
      <?php
      echo form_hidden('id', $item['id']);
      echo form_hidden('nama', $item['nama']);
      echo form_hidden('harga', $item['harga']);
      echo form_hidden('foto', $item['foto']);
      ?>
      <div class="card">
        <div class="card-body">
          <img src="<?php echo base_url() . "NiceAdmin/assets/img/" . $item['foto'] ?>" alt="..." width="300px">
          <h5 class="card-title"><?php echo $item['nama'] ?><br><?php echo number_to_currency($item['harga'], 'IDR') ?></h5>
          <button type="submit" class="btn btn-info rounded-pill">Beli</button>
        </div>
      </div>
      <?= form_close() ?>
>>>>>>> 29b0c264b76cb88e7ef17cc5e16a46edbeb31f92
    </div>
  <?php endforeach ?>
</div>
<!-- End Table with stripped rows -->
<?= $this->endSection() ?>