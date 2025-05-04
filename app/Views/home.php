<?= $this->extend('/layout/template.php') ?>

<?= $this->section('content') ?>


<link rel="stylesheet" href="<?= base_url('halaman_user_css/home.css'); ?>">


<div class="carousel-container">
  <div class="carousel-slide">
    <?php foreach ($museum as $data): ?>
      <img src="<?= base_url('foto/' . $data->foto); ?>" alt="<?= $data->nama_museum; ?>">
    <?php endforeach; ?>
  </div>
</div>

<!-- Intro -->
<div class="intro">
  <h3>Selamat Datang di Website Pemesanan Tiket Museum (HeritageTic.)</h3>
  <p>Disini Kami menyediakan Pembelian Tiket Museum di seluruh Indonesia secara Online.</p>
</div>

<!-- Kartu Museum -->
<div class="museum-list">
  <?php foreach($museum as $data): ?>
    <div class="museum-card">
      <img src="<?= base_url('foto/' . $data->foto); ?>" alt="<?= $data->nama_museum; ?>">
      <div class="museum-card-body">
        <h5><?= $data->nama_museum; ?></h5>
        <p><?= $data->deskripsi; ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<?= $this->endSection() ?>
