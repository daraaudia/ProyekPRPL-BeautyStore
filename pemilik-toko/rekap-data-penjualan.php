<?php

    require '../koneksinya.php'; // Memanggil koneksi database
    require '../functions.php';
    session_start();
    if (empty($_SESSION['nama']) AND empty($_SESSION['kode'])) {
        header("Location: logout.php");
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

    <title><?= $_SESSION['nama']; ?></title>

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
                                <a class="nav-link btn btn-primary" href="rekap-data-penjualan.php"><i class="fa fa-files-o" aria-hidden="true"></i> Rekap Data Penjualan</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="daftar-produk.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> Daftar Produk</a>
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
        <?php

            // Menghitung banyaknya produk
            $query1    = "SELECT SUM(stock) AS stock FROM produk";
            $action1   = mysqli_query($koneksinya, $query1);
            $result1   = mysqli_fetch_assoc($action1);

            // Menghitung produk stock kosong
            $query2    = "SELECT COUNT(stock) AS stock_kosong FROM produk WHERE stock='0'";
            $action2   = mysqli_query($koneksinya, $query2);
            $result2   = mysqli_fetch_assoc($action2);

            // Menghitung produk terjual
            $query3    = "SELECT SUM(jumlah) AS produk_terjual FROM penjualan";
            $action3   = mysqli_query($koneksinya, $query3);
            $result3   = mysqli_fetch_assoc($action3);

            // Menghitung produk terjual
            $query4    = "SELECT SUM(total) AS total_penghasilan FROM penjualan";
            $action4   = mysqli_query($koneksinya, $query4);
            $result4   = mysqli_fetch_assoc($action4);

        ?>
        <div class="row">
            <div class="col-4 my-4 border py-2 text-warning border-warning shadow">
                <div class="btn btn-block btn-primary">
                    <h3>Stok Produk</h3>
                    <i class="fa fa-4x fa-file-text-o"></i>
                    <h1><?php echo $result1['stock']; ?></h1>
                </div>
            </div>
            <div class="col-4 my-4 border py-2 text-warning border-warning shadow">
                <div class="btn btn-block btn-primary">
                    <h3>Produk Kosong</h3>
                    <i class="fa fa-4x fa-search-minus"></i>
                    <h1><?php echo $result2['stock_kosong']; ?></h1>
                </div>
            </div>
            <div class="col-4 my-4 border py-2 text-warning border-warning shadow">
                <div class="btn btn-block btn-primary">
                    <h3>Total Produk Yang Terjual</h3>
                    <i class="fa fa-4x fa-check-square-o"></i>
                    <h1><?php echo $result3['produk_terjual']; ?></h1>
                </div>
            </div>
            <div class="col-12 my-4 border py-2 text-warning border-warning shadow">
                <div class="btn btn-block btn-primary">
                    <h3>Total Penghasilan</h3>
                    <i class="fa fa-4x fa-money"></i>
                    <h1>Rp<?php echo rp($result4['total_penghasilan']); ?></h1>
                </div>
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