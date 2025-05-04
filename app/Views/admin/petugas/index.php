<?= $this->extend('admin/layout/template.php') ?>


<?= $this->section('content') ?>
<h3 class="text-center">Halaman Kelola Petugas </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Proses</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($petugas as $data):
    ?>
        <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $data->nama; ?></td>
           
            <td><?= $data->email; ?></td>
            <td>
                <a href="<?= base_url ('admin/petugas/edit/' . $data->id_admin); ?>" class="btn btn-sm btn-info">Edit</a>
                <a href="<?= base_url ('admin/petugas/delete/' . $data->id_admin); ?>" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    <?php
        $no++;
    endforeach;
    ?>
  </tbody>
</table>
<div class="d-grid">
    <a href="<?= base_url('admin/petugas/add'); ?>" class="btn btn-primary">Add</a> 
</div>

<?= $this->endSection() ?>