<?php
    include 'config.php';

    $no = $_POST['no_buku'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $id_penerbit = $_POST['penerbit'];

    $query = "INSERT INTO buku (no_buku, nama, kategori, harga, stok, id_penerbit) VALUES ('$no', '$nama', '$kategori', '$harga', '$stok', '$id_penerbit')";

    if(mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data.";
    }
?>