<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
        <!-- MENGAMBIL NAVBAR  -->
        <?php include('navbar.php') ?>
        <div class="row">
            <div class="col-8 mx-auto mt-4">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        Tambah Penerbit
                    </div>
                    <div class="card-body">
                        <!-- LOKASI FORM UNTUK TAMBAH PENERBIT -->
                        <!-- FORM YANG MELAKUKAN POST KE FILE create_process_penerbit.php  -->
                        <form action="create_process_penerbit.php" method="post">
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label for="nama">ID Penerbit</label>
                                <input type="text" class="form-control" id="no_penerbit" name="no_penerbit" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Penerbit</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="stok">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" required>
                            </div>
                            <div class="form-group">
                                <label for="stok">Telepon</label>
                                <input type="text" class="form-control" id="telp" name="telp" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>