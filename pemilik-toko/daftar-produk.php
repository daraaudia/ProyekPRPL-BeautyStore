<?php

    require '../koneksinya.php'; // Memanggil koneksi database
    require '../functions.php'; // Memanggil koneksi database
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
        <table class="table table-striped border">
            <thead class="bg-warning text-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Stok Produk</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php

                    $no = 1;
                    $query    = "SELECT * FROM produk ORDER BY id_produk DESC";
                    $mysqlQuery   = mysqli_query($koneksinya, $query);
                    while ($result   = mysqli_fetch_assoc($mysqlQuery)) {

                ?>

                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><u><?php echo $result['nama']; ?></u></td>
                    <td>Rp<?php echo rp($result['harga']); ?></td>
                    <td>
                        <?php
                            if ($result['stock']<=0) {
                                echo "<b class='text-danger'>Habis</b>";
                            }elseif ($result['stock']>0) {
                                echo $result['stock'];
                            }
                        ?>
                    </td>
                    <td>
                        <a href="edit-produk.php?id_produk=<?php echo $result['id_produk']; ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> EDIT</a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')" href="memproses-hapus-produk.php?id_produk=<?php echo $result['id_produk']; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> HAPUS</a>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
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