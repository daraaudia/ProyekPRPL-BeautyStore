<?php

    require '../koneksinya.php'; // Memanggil koneksi database

    // Mengambil id produk
    $id  = $_GET['id_produk'];

	$queryDell	= "DELETE FROM produk WHERE id_produk='$id'";
	$resultDell	= mysqli_query($koneksinya, $queryDell);

	if (!empty($resultDell)) {
            // Jika inputan berhasil, redirect ke halaman ini
            header('location:daftar-produk.php');
        }else{
            // jika inputan gagal, maka akan muncul informasi gagal
            echo "<script>window.alert('Gagal!'); window.location = 'daftar-produk.php'</script>";
        }

?>