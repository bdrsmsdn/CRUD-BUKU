
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
      <?php include('navbar.php') ?>
    <div class="row-6">
        <div class="col-8 mx-auto mt-4">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Data Buku
                </div>                
                <div class="card-body"> 
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
                $query = "SELECT * FROM buku AS b INNER JOIN penerbit AS p ON b.id_penerbit = p.id_penerbit";
                $result = mysqli_query($conn, $query);
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
                        <!-- BUTTON EDIT YANG MENGARAH KE FILE edit.php YANG MEMBAWA PARAMS ID DARI ID_BUKU  -->
                        <a href="edit.php?id=<?= $row['id_buku']; ?>" type="button" id="buku" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <!-- BUTTON YANG MEMUNCULKAN CONFIRM BOX YANG AKAN MENGHAPUS DATA LEWAT delete.php  -->
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
    <div class="row-6">
        <div class="col-8 mx-auto mt-4">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Data Penerbit
                </div>                
                <div class="card-body">
                    <a href="create_penerbit.php" type="button" class="btn btn-primary btn-sm" >
                        + Tambah Data Penerbit
                    </a>
                    <table class="table">
                        <thead class="text-center">
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                        <?php
            include 'config.php';
                $query = "SELECT * FROM penerbit";
                $result = mysqli_query($conn, $query);            
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?= $row['no_penerbit']; ?></td>
                    <td><?= $row['penerbit']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['kota']; ?></td>
                    <td><?= $row['telepon']; ?></td>
                    <td>
                        <!-- BUTTON EDIT YANG MENGARAH KE FILE edit_penerbit.php YANG MEMBAWA PARAMS ID DARI ID_PENERBIT  -->
                        <a href="edit_penerbit.php?id=<?= $row['id_penerbit']; ?>" type="button" id="id_penerbit" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <!-- BUTTON YANG MEMUNCULKAN CONFIRM BOX YANG AKAN MENGHAPUS DATA LEWAT delete_penerbit.php  -->
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="delete_penerbit.php?id=<?= $row['id_penerbit']; ?>" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill text-light"></i></a>
                    </td>   
                </tr>
                <?php } ?>
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>