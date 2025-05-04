<?= $this->extend('/layout/template.php') ?>


<?= $this->section('content') ?>


<!-- ini digunakan untuk membuat Format Rupiah pada bagian Harga -->
<?php
    function buatRp($angka)
    {
        $hasil = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil;
    }
 ?>


<div class="container py-3">
    
            <div class="row">
                 <div class="col-md-6 mx-auto">
                    <div class="card">
                      <img src="<?= base_url('foto/' . $museum->foto); ?>" style="height: 250px " class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title" text-center><?= $museum->nama_museum; ?></h5>
                          <p><?= $museum->deskripsi; ?></p>
                          <p><?= buatRp($museum->harga); ?></p>  <!--//ini berhubungan dengan keterangan harga pada form pesan (agar bisa memunculkan harga sesuai dengan id_museumnya)// -->
                          <?php $validation = \Config\Services::validation(); ?>
                          <form action="<?= base_url('museum/proses'); ?>" method="POST">

                                 <input type="hidden" name="harga" value="<?= $museum->harga; ?>">   <!--//ini berhubungan dengan keterangan harga pada form pesan (agar bisa memunculkan harga sesuai dengan id_museumnya)// -->
                                 <input type="hidden" name="id" value="<?= $museum->id_museum; ?>">

                                 <?= csrf_field(); ?>
                             

                                 <div class="mb-3">
                                        <label>Jumlah Pengunjung</label>
                                        <input type="text" name="pengunjung" class="form-control" value="<?= set_value('pengunjung'); ?>">
                                        <small class="text-danger"><?= $validation->getError('pengunjung'); ?></small> 
                                 </div>
                                 <div class="mb-3">
                                        <label>Tanggal Kedatangan</label>
                                        <input type="date" name="tanggal" class="form-control" value="<?= set_value('tanggal'); ?>">
                                        <small class="text-danger"><?= $validation->getError('tanggal'); ?></small>
                                 </div>
                                 <button type="submit" class="btn btn-primary" >Proses </button>
                            </form>
                      </div>
                    </div>
                 </div>
            </div>
        </div>
<?= $this->endSection() ?>