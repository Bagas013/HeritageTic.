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
        <div class="col-md-6 mx-auto px-2">
          <div class="card px-3">
            <h3 class="text-center py-2" >Login Akun</h3>

                    <!-- //ini untuk pemberitahuan berhasil REGISTER AKUN (terhubung dengan /contoller/Login.php) -->
                    <?php
                    if (session()->getFlashdata('success')) { ?>
                      <div class="alert alert-success" role="alert">
                          <?= session()->getFlashdata('success'); ?>
                      </div>
                    <?php
                    }

                    ?>
                     <!--  -->

                    <!-- //ini untuk pemberitahuan berhasil LOGIN AKUN (terhubung dengan /contoller/Login.php) -->
                    <?php
                    if (session()->getFlashdata('error')) { ?>
                      <div class="alert alert-danger" role="alert">
                          <?= session()->getFlashdata('error'); ?>
                      </div>
                    <?php
                    }

                    ?>
                     <!--  -->

            <div class="card-body">
              <form action="<?= base_url('login/proses'); ?>" method="post">
                  <?= csrf_field(); ?>
                  <?php $validation = \Config\Services::validation(); ?>
                  <div class="mb-3">
                      <label>Email</label><br>
                      <input type="email" name="email" class="form-control" value="<?= set_value('email'); ?>">
                      <small class="text-danger"><?= $validation->getError('email'); ?></small>
                  </div>
                  <div class="mb-3">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" value="<?= set_value('password'); ?>">
                      <small class="text-danger"><?= $validation->getError('password'); ?></small>
                  </div>
                  <div class="d-grid d-md-block">
                      <button type="submit" class="btn btn-primary">Masuk</button>
                      <a href="<?= base_url('login/register'); ?> " class="btn btn-outline-success">Registrasi Akun</a>
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