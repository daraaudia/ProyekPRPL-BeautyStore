<?php

    require '../koneksinya.php'; // Memanggil koneksi database
    require '../functions.php';
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

    <title>BEAUTY STORE</title>

    <link rel="stylesheet" href="../plugins/css/bootstrap.css">

    <link rel="stylesheet" href="../plugins/css/font-awesome.min.css">
</head>

<body>

    <div class="container-fluid bg-warning">
        <div class="container p-0">

            <nav class="navbar px-0 navbar-expand-md bg-warning navbar-dark">
                <div class="container">
                    <!-- Brand/logo -->
                    <a class="navbar-brand" href="#">Beauty Store</a>

                    <div class="justify-content-end d-block d-lg-none">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdownMenu" aria-controls="navbarNavDropdownMenu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <!-- Links -->
                    <div class="collapse navbar-collapse font-weight-semi-bold justify-content-end" id="navbarNavDropdownMenu">
                        <ul class="navbar-nav">
                            <li class="nav-item p-2">
                                <a class="nav-link" href="index.php"><i class="fa fa-cart-plus"></i> Kasir</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link btn btn-primary" href="data-penjualan.php"><i class="fa fa-file-text-o"></i> Data Penjualan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <!-- ISINYA -->

    <div class="container my-4 text-center">

        <table class="table table-striped border mt-4">
            <thead class="bg-warning text-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">INVOICE</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                    <th scope="col">Waktu Transaksi</th>
                </tr>
            </thead>
            <tbody>

                <?php

                    $no = 1;
                    $query    = "SELECT * FROM penjualan INNER JOIN produk ON penjualan.id_produk = produk.id_produk ORDER BY id_penjualan DESC";
                    $mysqlQuery   = mysqli_query($koneksinya, $query);
                    while ($result   = mysqli_fetch_assoc($mysqlQuery)) {

                ?>

                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><strong><a href="#"><?php echo $result['invoice']; ?></a></strong></td>
                    <td><?php echo $result['nama']; ?></td>
                    <td><?php echo $result['jumlah']; ?></td>
                    <td><strong>Rp<?php echo rp($result['total']); ?></strong></td>
                    <td><?php echo $result['waktu_transaksi']; ?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- ISINYA -->

    <div class="container-fluid text-center py-2 bg-warning">
            <small>&copy;Dibuat oleh Kelompok 4</small>
        </div>
    </div>

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