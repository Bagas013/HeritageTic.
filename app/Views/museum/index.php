<?= $this->extend('/layout/template.php') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('halaman_user_css/museum/index.css'); ?>">

<?php
    function buatRp($angka)
    {
        return "Rp " . number_format($angka, 2, ',', '.');
    }
?>

<div class="custom-container">
    <h2 class="title">Pilihan Museum</h2>
    <div class="museum-list">
        <?php foreach($museum as $data) : ?>
            <div class="museum-card">
                <img src="<?= base_url('foto/' . $data->foto ); ?>" alt="<?= $data->nama_museum; ?>" class="museum-img">
                <div class="museum-info">
                    <h3><?= $data->nama_museum; ?></h3>
                    <p><?= $data->deskripsi; ?></p>
                    <p class="harga"><?= buatRp($data->harga); ?>/Orang</p>
                    <a href="<?= base_url('museum/pesan/' . $data->id_museum) ?>" class="btn-pesan">Pesan</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>