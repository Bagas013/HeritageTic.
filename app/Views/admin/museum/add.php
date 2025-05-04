<?= $this->extend('admin/layout/template.php') ?>


<?= $this->section('content') ?>
<h3 class="text-center">Tambah Museum </h3>
<form action="<?= base_url('admin/museum/save'); ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <?php $validation = \Config\Services::validation(); ?>
    <div class="mb-3">
        <label>Nama Museum</label>
        <input type="text" name="nama" class="form-control" value="<?= old('nama'); ?>">
        <small class="text-danger"><?= $validation->getError('nama'); ?></small>
    </div>
    <div class="mb-3">
        <label>Deskripsi Museum</label>
        <input type="text" name="des" class="form-control" value="<?= old('des'); ?>">
        <small class="text-danger"><?= $validation->getError('des'); ?></small>
    </div>
    <div class="mb-3">
        <label>Foto Museum</label>
        <input type="file" name="foto" class="form-control" value="<?= old('foto'); ?>">
        <small class="text-danger"><?= $validation->getError('foto'); ?></small>
    </div>
    <div class="mb-3">
        <label>Harga Tiket Museum</label>
        <input type="text" name="harga" class="form-control" value="<?= old('harga'); ?>">
        <small class="text-danger"><?= $validation->getError('harga'); ?></small>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<?= $this->endSection() ?>