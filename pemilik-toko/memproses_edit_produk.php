<?php

	require '../koneksinya.php'; // Memanggil koneksi database

    $id     = $_POST['idProduk'];
	$nama 	= $_POST['namaProduk'];
    $harga 	= $_POST['hargaProduk'];
    $stock 	= $_POST['stockProduk'];

    $queryEdit  =   "UPDATE produk SET nama='$nama', harga='$harga', stock='$stock' WHERE id_produk='$id' ";
    $resultEdit = mysqli_query($koneksinya, $queryEdit);

    if (!empty($resultEdit)) {
        // Jika inputan berhasil, redirect ke halaman ini
        header('location:daftar-produk.php');
    }else{
        // jika inputan gagal, maka harus input lagi
        header('location:edit-produk.php?id_produk=$id');
    }

?>