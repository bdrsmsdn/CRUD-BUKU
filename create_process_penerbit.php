<?php
    include 'config.php';

    //mendapatkan hasil POST dari create_penerbit.php dan memasukan ke dalam variable yang kemudian dipakai untuk menulis query sql
    $no = $_POST['no_penerbit']; //no_penerbit disini diambil dari POST create.php pada input text dengan nama "no_penerbit"
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telp = $_POST['telp'];

    //query sql
    $query = "INSERT INTO penerbit (no_penerbit, penerbit, alamat, kota, telepon) VALUES ('$no', '$nama', '$alamat', '$kota', '$telp')";

    //jika berhasil maka akan dikembalikan ke admin.php
    if(mysqli_query($conn, $query)) {
        header("Location: admin.php");
    } else {
        echo "Gagal menambahkan data.";
    }
?>