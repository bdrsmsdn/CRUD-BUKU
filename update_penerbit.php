<?php
    include 'config.php';

    //mendapatkan hasil POST dari edit_penerbit.php dan memasukan ke dalam variable yang kemudian dipakai untuk menulis query sql
    $id = $_POST['id']; //id disini diambil dari input yang dihidden kan
    $no = $_POST['no_penerbit'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telp = $_POST['telp'];

    $query = "UPDATE penerbit SET no_penerbit='$no', penerbit='$nama', alamat='$alamat', kota='$kota', telepon='$telp' WHERE id_penerbit='$id'";

    if(mysqli_query($conn, $query)) {
        header("Location: admin.php");
    } else {
        echo "Gagal mengupdate data.";
    }
?>
