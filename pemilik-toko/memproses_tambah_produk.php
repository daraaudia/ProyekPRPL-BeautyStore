<?php

	require '../koneksinya.php'; // Memanggil koneksi database

	$nama 	= $_POST['namaProduk'];
    $harga 	= $_POST['hargaProduk'];
    $stock 	= $_POST['stockProduk'];

    $queryAdd  =   "INSERT INTO produk VALUES ('', '$nama', '$harga', '$stock')";
    $resultAdd = mysqli_query($koneksinya, $queryAdd);

    if (!empty($resultAdd)) {
        // Jika inputan berhasil, redirect ke halaman ini
        header('location:daftar-produk.php');
    }else{
        // jika inputan gagal, maka harus input lagi
        header('location:tambah-produk.php');
    }

?>