<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <h3 class="text-center py-2" >Register Akun</h3>
            <div class="card-body">
              <form action="<?= base_url('login/save'); ?>" method="POST">
                  <?= csrf_field(); ?>
                  <?php $validation = \Config\Services::validation(); ?>
                  <div class="mb-3">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" value="<?= set_value('email'); ?>"> <!--value ini berfungsi saat form yang diisi sudah benar tidak terhapus isinya saat ada form lain yang kosong atau formatnya tidak benar -->
                      <small class="text-danger"><?= $validation->getError('nama'); ?></small>
                  </div>
                  <div class="mb-3">
                      <label>Jenis Kelamin</label>
                      <select name="kelamin" class="form-select">
                            <option value=">"></option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                      </select>
                      <small class="text-danger"><?= $validation->getError('kelamin'); ?></small>
                  </div>
                  <div class="mb-3">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" value="<?= set_value('email'); ?>">
                      <small class="text-danger"><?= $validation->getError('email'); ?></small>
                  </div>
                  <div class="mb-3">
                      <label>Ponsel</label>
                      <input type="text" name="ponsel" class="form-control" value="<?= set_value('ponsel'); ?>">
                      <small class="text-danger"><?= $validation->getError('ponsel'); ?></small>
                  </div>
                  <div class="mb-3">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" value="<?= set_value('password'); ?>">
                      <small class="text-danger"><?= $validation->getError('password'); ?></small>
                  </div>
                  <div>
                      <button type="submit" class="btn btn-primary">Register</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>