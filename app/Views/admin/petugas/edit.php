<?= $this->extend('admin/layout/template.php') ?>


<?= $this->section('content') ?>
<h3 class="text-center">Edit Data Petugas </h3>
<form action="<?= base_url('admin/petugas/update'); ?>" method="post">
    <?= csrf_field(); ?>
    <input type="hidden" name="kode" value="<?= $cari->id_admin; ?>">  <!-- ini untuk public function update(), yang terletak di (controller/admin/petugas.php) -->
    <?php $validation = \Config\Services::validation(); ?>
    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" value="<?= $cari->nama; ?>">
        <small class="text-danger"><?= $validation->getError('nama'); ?></small>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?= $cari->email; ?>">
        <small class="text-danger"><?= $validation->getError('email'); ?></small>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" value="<?= set_value('password'); ?>">
        <small class="text-danger"><?= $validation->getError('password'); ?></small>
    </div>
    <div class="mb-3">
        <label>Ulang Password</label>
        <input type="password" name="upass" class="form-control" value="<?= set_value('upass'); ?>">
        <small class="text-danger"><?= $validation->getError('upass'); ?></small>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<?= $this->endSection() ?>