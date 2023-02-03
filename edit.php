<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Buku</title>
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
                        Edit Buku
                    </div>
                    <div class="card-body">
                        <!-- LOKASI FORM UNTUK EDIT BUKU -->
                        <?php
                        //config.php untuk koneksi database
                            include 'config.php';

                            $id = $_GET['id'];
                            $query = "SELECT * FROM buku AS b INNER JOIN penerbit AS p ON b.id_penerbit = p.id_penerbit WHERE id_buku = '$id'";
                            //FUNGSI YANG DIGUNAKAN UNTUK MENGISI VALUE DARI FIELD YANG ADA
                            $result = mysqli_query($conn, $query);

                            $row = mysqli_fetch_array($result);
                        ?>
                        <!-- DISINI AKAN MENAMPILKAN FIELD YANG SUDAH DIISI SESUAI DENGAN DATA DI DATABASE  -->
                        <!-- BISA DILIHAT DI value="$row['']" -->
                        <!-- FORM UNTUK MELAKUKAN POST KE FILE update.php  -->
                        <form action="update.php" method="post">
                            <input type="hidden" name="id" value="<?= $row['id_buku']; ?>">
                            <div class="form-group">
                                <label for="nama">Nomor Buku</label>
                                <input type="text" class="form-control" id="no_buku" name="no_buku" value="<?= $row['no_buku']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Buku</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $row['nama']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="keilmuan">Keilmuan</option>
                                    <option value="bisnis">Bisnis</option>
                                    <option value="novel">Novel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" value="<?= $row['harga']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" class="form-control" id="stok" name="stok" value="<?=$row['stok']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <select class="form-control" id="penerbit" name="penerbit">
                                <?php 
                                     $query = "SELECT * FROM penerbit";
                                     $result = mysqli_query($conn, $query);
                                     //pengulangan untuk select option berdasar table penerbit                                     
                                     while($data = mysqli_fetch_array($result)) {
                                         if($data['id_penerbit'] == $row['id_penerbit']) {
                                             echo "<option value='$data[id_penerbit]' selected>$data[penerbit]</option>";
                                         } else {
                                             echo "<option value='$data[id_penerbit]'>$data[penerbit]</option>";
                                         }
                                     }
                                 ?>
                                </select>
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