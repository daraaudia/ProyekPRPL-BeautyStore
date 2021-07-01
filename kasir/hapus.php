<?php

	require '../koneksinya.php'; // Memanggil koneksi database

    $id_produk      = $_GET['id_produk'];
    $id_penjualan   = $_GET['id_penjualan'];
    $stock          = $_GET['stock']+$_GET['jumlah'];

    $queryDel  = "DELETE FROM penjualan WHERE id_penjualan='$id_penjualan'";
    $resultDel = mysqli_query($koneksinya, $queryDel);

    if (!empty($resultDel)) {
        $queryUpdate  = "UPDATE produk SET stock='$stock' WHERE id_produk='$id_produk'";
        $resultUpdate = mysqli_query($koneksinya, $queryUpdate);

        if (!empty($resultUpdate)) {
            header('location:index.php');
        }else{
            // jika inputan gagal
            echo "<script>window.alert('Gagal!'); window.location = 'index.php'</script>";
        }
    }else{
        // jika inputan gagal
        echo "<script>window.alert('Gagal!'); window.location = 'index.php'</script>";
    }

?>