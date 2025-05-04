<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <?php
                        if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php
                        }
                        ?>
                        <h3 class="text-center">Login Admin</h3>
                        <?php $validation = \Config\Services::validation(); ?>
                            <form action="<?= base_url('admin/login/cek'); ?>" method="POST">
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="<?= set_value('email'); ?>">  <!-- set_value itu berhubungan dengan 'helper' di (controller/admin/login.php) -->
                                    <small class="text-center text-danger"><?= $validation->getError('email'); ?></small>
                                </div>
                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" class="form-control" value="<?= set_value('password'); ?>">
                                    <small class="text-center text-danger"><?= $validation->getError('password'); ?></small>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>