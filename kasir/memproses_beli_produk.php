<?php

	require '../koneksinya.php'; // Memanggil koneksi database

    session_start();

    $invoice    = "#IN".rand(000000,999999)."!";
	$id         = $_POST['id_produk'];
    $jumlah     = $_POST['jumlah'];
    $total      = $jumlah*$_POST['harga'];
	$waktu      = date("Y-m-d");

    if (empty($_SESSION['invoice'])) {
        $_SESSION['invoice'] = $invoice;
        $invoiceNya = $invoice;
    }else{
        $invoiceNya = $_SESSION['invoice'];
    }

    $queryAdd  = "INSERT INTO penjualan VALUES ('', '$invoiceNya', '$id', '$jumlah', '$total', '$waktu')";
    $resultAdd = mysqli_query($koneksinya, $queryAdd);

    if (!empty($resultAdd)) {
        $id_produk  = $_POST['id_produk'];
        $stockNya   = $_POST['stock']-$jumlah;
        $queryUpdate  = "UPDATE produk SET stock='$stockNya' WHERE id_produk='$id_produk'";
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