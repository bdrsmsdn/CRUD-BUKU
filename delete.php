<?php
    include 'config.php';

    //mendapatkan id dari variable id yang akan dihapus
    $id = $_GET['id'];

    $query = "DELETE FROM buku WHERE id_buku='$id'";

    if(mysqli_query($conn, $query)) {
        header("Location: admin.php");
    } else {
        echo "Gagal menghapus data.";
    }
?>