<?= $this->extend('admin/layout/template.php') ?>


<?= $this->section('content') ?>
<h3 class="text-center">Halaman Kelola Museum </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Museum</th>
      <th>Foto</th>
      <th scope="col">Harga</th>
      <th scope="col">Proses</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($museum as $data):
    ?>
        <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $data->nama_museum; ?></td>
            <td> <img src=" <?= base_url ('foto/' . $data->foto); ?>" style="width:100px; height:100px;" alt=""></td>
            <td><?= $data->harga; ?></td>
            <td>
                <a href="<?= base_url ('admin/museum/edit/' . $data->id_museum); ?>" class="btn btn-sm btn-info">Edit</a>
                <a href="<?= base_url ('admin/museum/delete/' . $data->id_museum); ?>" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    <?php
        $no++;
    endforeach;
    ?>
  </tbody>
</table>
<div class="d-grid">
    <a href="<?= base_url('admin/museum/add'); ?>" class="btn btn-primary">Add</a> 
</div>

<?= $this->endSection() ?>