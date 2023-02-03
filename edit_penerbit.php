<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Penerbit</title>
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
                        Edit Penerbit
                    </div>
                    <div class="card-body">
                        <!-- LOKASI FORM UNTUK EDIT PENERBIT -->
                        <?php
                        //config.php untuk koneksi database
                            include 'config.php';

                            $id = $_GET['id'];
                            $query = "SELECT * FROM penerbit WHERE id_penerbit=$id";
                            //FUNGSI YANG DIGUNAKAN UNTUK MENGISI VALUE DARI FIELD YANG ADA
                            $result = mysqli_query($conn, $query);

                            $row = mysqli_fetch_array($result);
                        ?>
                        <!-- DISINI AKAN MENAMPILKAN FIELD YANG SUDAH DIISI SESUAI DENGAN DATA DI DATABASE  -->
                        <!-- BISA DILIHAT DI value="$row['']" -->
                        <!-- FORM UNTUK MELAKUKAN POST KE FILE update_penerbit.php  -->
                        <form action="update_penerbit.php" method="post">
                            <input type="hidden" name="id" value="<?= $row['id_penerbit']; ?>">
                            <div class="form-group">
                                <label for="nama">ID Penerbit</label>
                                <input type="text" class="form-control" id="no_penerbit" name="no_penerbit" value="<?= $row['no_penerbit']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Penerbit</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['penerbit']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $row['alamat']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" value="<?=$row['kota']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="telp">Telepon</label>
                                <input type="text" class="form-control" id="telp" name="telp" value="<?=$row['telepon']; ?>" required>
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