<?php
    include 'config.php';

    //mendapatkan hasil POST dari edit.php dan memasukan ke dalam variable yang kemudian dipakai untuk menulis query sql
    $id = $_POST['id']; //id disini diambil dari input yang dihidden kan
    $no = $_POST['no_buku'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $id_penerbit = $_POST['penerbit'];

    $query = "UPDATE buku SET no_buku='$no', nama='$nama', kategori='$kategori', harga='$harga', stok='$stok', id_penerbit='$id_penerbit' WHERE id_buku='$id'";

    if(mysqli_query($conn, $query)) {
        header("Location: admin.php");
    } else {
        echo "Gagal mengupdate data.";
    }
?>
