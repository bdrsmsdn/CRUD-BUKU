<!-- Made with <3 Badra S  -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
  <body>
    <div class="row">
        <!-- Mengambil navbar.php -->
    <?php include('navbar.php') ?>
    <div class="row">
        <div class="col-8 mx-auto mt-4">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Data Buku
                </div>
                <div class="card-body">                    
                    <!-- LOKASI TEXT PENCARIAN -->
                    <!-- Melakukan POST pencarian dengan variable katakunci -->
                    <form action="index.php" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="" name="katakunci" placeholder="Masukkan Kata Kunci" aria-label="Masukkan Kata Kunci" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                        </div>
                    </form>
                    <!-- READ DATA DARI DATABASE TABLE BUKU -->
                    <table class="table">
                        <thead class="text-center">
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                        </thead>
                        <tbody>
                        <?php
                        // Mengambil config.php sebagai perantara untuk konek ke database 
            include 'config.php';
            // Mengambil variable katakunci dari submit post pencarian di atas
            // Pengkondisian jika terdapat variable kata kunci maka akan menampilkan hasil pencarian
            if(isset($_POST['katakunci'])){
                $katakunci = $_POST['katakunci'];
                //query sql
                $query = "SELECT * FROM buku AS b INNER JOIN penerbit AS p ON b.id_penerbit = p.id_penerbit 
                WHERE b.kategori LIKE '%$katakunci%' OR b.nama LIKE '%$katakunci%' OR p.penerbit LIKE '%$katakunci%'";
                //melakukan pengambilan data ke database berdasar query di atas
                //$conn disini di ambil dari file config.php
                $result = mysqli_query($conn, $query);
                // Pengkondisian jika tidak terdapat variable kata kunci dan hanya menampilkan seluruh data table buku
            } else {
                $query = "SELECT * FROM buku AS b INNER JOIN penerbit AS p ON b.id_penerbit = p.id_penerbit";
                $result = mysqli_query($conn, $query);
            }
            //pengulangan jika terdapat respon maka akan diambil dan dimasukkan ke dalam array
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <!-- variable yang sama seperti di table buku di database  -->
                    <td><?= $row['no_buku']; ?></td>
                    <td><?= ucfirst($row['kategori']); ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['harga']; ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><?= $row['penerbit']; ?></td>
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