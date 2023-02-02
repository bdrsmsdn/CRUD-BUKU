
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PENGADAAN</title>
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
                    Data Pengadaan
                </div>
                <div class="card-body">       
                    <table class="table">
                        <thead>
                            <th>Nama Buku</th>
                            <th>Penerbit</th>
                            <th>Stok</th>
                        </thead>
                        <tbody>
                        <?php
            include 'config.php';
                $query = "SELECT * FROM buku AS b INNER JOIN penerbit AS p ON b.id_penerbit = p.id_penerbit ORDER BY b.stok ASC";
                $result = mysqli_query($conn, $query);            
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['penerbit']; ?></td>
                    <td><?= $row['stok']; ?></td>
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