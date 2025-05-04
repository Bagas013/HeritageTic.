<?= $this->extend('admin/layout/template.php') ?>


<?= $this->section('content') ?>
<h3 class="text-center">Edit Museum </h3>
<form action="<?= base_url('admin/museum/update'); ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="kode" value="<?= $cari->id_museum; ?>"> <!-- ini digunakan sebagai kunci proses simpan updatenya -->
    <div class="mb-3">
        <label>Nama Museum</label>
        <input type="text" name="nama" class="form-control" value="<?= $cari->nama_museum; ?>">
    </div>
    <div class="mb-3">
        <label>Deskripsi Museum</label>
        <input type="text" name="des" class="form-control" value="<?= $cari->deskripsi; ?>">
    </div>
    <div class="mb-3">
        <label>Foto Museum</label>
        <input type="file" name="foto" class="form-control" value="<?= $cari->foto; ?>">
    </div>
    <div class="mb-3">
        <label>Harga Tiket Museum</label>
        <input type="text" name="harga" class="form-control" value="<?= $cari->harga; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<?= $this->endSection() ?>