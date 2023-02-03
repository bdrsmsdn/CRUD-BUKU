<?php
    include 'config.php';

    //mendapatkan hasil POST dari create.php dan memasukan ke dalam variable yang kemudian dipakai untuk menulis query sql
    $no = $_POST['no_buku']; //no_buku disini diambil dari POST create.php pada input text dengan nama "no_buku"
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $id_penerbit = $_POST['penerbit'];

    //query sql
    $query = "INSERT INTO buku (no_buku, nama, kategori, harga, stok, id_penerbit) VALUES ('$no', '$nama', '$kategori', '$harga', '$stok', '$id_penerbit')";

    //jika berhasil maka akan dikembalikan ke admin.php
    if(mysqli_query($conn, $query)) {
        header("Location: admin.php");
    } else {
        echo "Gagal menambahkan data.";
    }
?>