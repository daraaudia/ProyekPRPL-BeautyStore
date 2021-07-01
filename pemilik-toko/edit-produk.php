<?php

    require '../koneksinya.php'; // Memanggil koneksi database
    session_start();
    if (empty($_SESSION['nama']) AND empty($_SESSION['kode'])) {
        header("Location: logout.php");
    }else{
        $getId      = $_GET['id_produk'];

        $query      = "SELECT * FROM produk WHERE id_produk='$getId'";
        $mysqlQuery = mysqli_query($koneksinya, $query);
        $result     = mysqli_fetch_assoc($mysqlQuery);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <meta name="googlebot" content="index,follow">
    <meta name="googlebot-news" content="index,follow">
    <meta name="robots" content="index,follow">
    <meta name="Slurp" content="all">

    <title><?= $_SESSION['nama']; ?> - Kasir Minimarket</title>

    <link rel="stylesheet" href="../plugins/css/bootstrap.css">

    <link rel="stylesheet" href="../plugins/css/font-awesome.min.css">
</head>

<body>

    <div class="container-fluid bg-warning">
        <div class="container">

            <nav class="navbar navbar-expand-md bg-warning navbar-dark">
                <div class="container">
                    <!-- Brand/logo -->
                    <a class="navbar-brand text-uppercase" href="home.php"><i class="fa fa-user-circle"></i> <?= $_SESSION['nama']; ?></a>

                    <div class="justify-content-end d-block d-lg-none">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdownMenu" aria-controls="navbarNavDropdownMenu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <!-- Links -->
                    <div class="collapse navbar-collapse font-weight-semi-bold justify-content-end" id="navbarNavDropdownMenu">
                        <ul class="navbar-nav">
                            <li class="nav-item p-2">
                                <a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="rekap-data-penjualan.php"><i class="fa fa-files-o" aria-hidden="true"></i> Rekap Data Penjualan</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link btn btn-primary" href="daftar-produk.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> Daftar Produk</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="tambah-produk.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Produk</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link text-primary border-bottom" href="logout.php">LOGOUT <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <!-- ISINYA -->

    <div class="container my-4 text-center">
        <div class="row justify-content-center">
            <div class="col-8 bg-warning py-4 shadow">
                <h3 class="text-warning border bg-primary py-4">Edit Produk <?php echo $result['nama']; ?></h3>
                <hr />
                <form method="POST" action="memproses_edit_produk.php" class="text-left">
                    <div class="form-group">
                        <label for="idProduk">ID Produk</label>
                        <input type="text" class="form-control" id="idProduk" name="idProduk" value="<?php echo $result['id_produk']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="namaProduk">Nama Produk</label>
                        <input type="text" class="form-control" id="namaProduk" name="namaProduk" value="<?php echo $result['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="hargaProduk">Harga Produk</label>
                        <input type="number" class="form-control" id="hargaProduk" name="hargaProduk" value="<?php echo $result['harga']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="stockProduk">Stock Produk</label>
                        <input type="number" class="form-control" id="stockProduk" name="stockProduk" value="<?php echo $result['stock']; ?>">
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-primary"><i class="fa fa-check-square-o"></i> SELESAI</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ISINYA -->

    <?php require 'footer.php'; ?>

    <script src="../plugins/js/jquery.min.js"></script>
    <script src="../plugins/js/popper.js"></script> 
    <script src="../plugins/js/bootstrap.min.js"></script>
    <script src="../plugins/js/aos.js"></script>

    <script type="text/javascript">

        // Popover
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
        });
        // Popover

    </script>

</body>
</html>