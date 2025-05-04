<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Back End Tiket Museum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">HeritageTic.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('admin'); ?>">Home</a>
                    <a class="nav-link" href="<?= base_url('admin/museum'); ?>">Wisata</a>
                    <a class="nav-link" href="<?= base_url('admin/petugas'); ?>">Admin</a>
                    <!-- <a class="nav-link" href="<?= base_url('admin/member'); ?>">Member</a>
                    <a class="nav-link" href="<?= base_url('admin/order'); ?>">Order Tiket</a>
                    <a class="nav-link" href="<?= base_url('admin/laporan'); ?>">Laporan Tiket</a> -->
                    <a class="nav-link" href="<?= base_url('admin/login/keluar'); ?>">Logout</a>
                </div>
                </div>
            </div>
        </nav>
        <div class="container py-3">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <?= $this->renderSection('content'); ?>

                </div>
                <div class="col-md-4">
                    <!-- <h5>List Museum</h5> -->
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul> -->
                </div>  
            </div>
        </div>
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-12 bg-dark text-white py-4">
                    <p class="text-center my-auto">2025 &copy;HeritageTic.</p>
                </div>
             </div> 
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>