
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD + SEARCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="row">
    <?php include('navbar.php') ?>
    <div class="row">
        <div class="col-8 mx-auto mt-4">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Data Buku
                </div>                
                <div class="card-body">                    
                    <!-- LOKASI TEXT PENCARIAN -->
                    <form action="index.php" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="" name="katakunci" placeholder="Masukkan Kata Kunci" aria-label="Masukkan Kata Kunci" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                        </div>
                    </form>
                    <a href="create.php" type="button" class="btn btn-primary btn-sm" >
                        + Tambah Data Buku
                    </a>
                    <table class="table">
                        <thead class="text-center">
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                        <?php
            include 'config.php';
            if(isset($_POST['katakunci'])){
                $katakunci = $_POST['katakunci'];
                $query = "SELECT * FROM buku AS b INNER JOIN penerbit AS p ON b.id_penerbit = p.id_penerbit 
                WHERE b.kategori LIKE '%$katakunci%' OR b.nama LIKE '%$katakunci%' OR p.penerbit LIKE '%$katakunci%'";
                $result = mysqli_query($conn, $query);
            } else {
                $query = "SELECT * FROM buku AS b INNER JOIN penerbit AS p ON b.id_penerbit = p.id_penerbit";
                $result = mysqli_query($conn, $query);
            }
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?= $row['no_buku']; ?></td>
                    <td><?= ucfirst($row['kategori']); ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['harga']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><?= $row['penerbit']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id_buku']; ?>" type="button" id="buku" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="delete.php?id=<?= $row['id_buku']; ?>" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill text-light"></i></a>
                    </td>   
                </tr>
                <?php } ?>
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>