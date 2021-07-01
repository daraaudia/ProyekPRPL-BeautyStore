<?php

    require '../koneksinya.php'; // Memanggil koneksi database
    require '../functions.php';

    session_start();

    if (empty($_SESSION['invoice'])) {
        $invoiceNya = NULL;
    }else{
        $invoiceNya = $_SESSION['invoice'];
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
                                <a class="nav-link btn btn-primary" href="index.php"><i class="fa fa-cart-plus"></i> Kasir</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link" href="data-penjualan.php"><i class="fa fa-file-text-o"></i> Data Penjualan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <!-- ISINYA -->

    <div class="container my-4 text-center">

        <table class="table bg-primary table-striped border mt-4">
            <thead class="bg-primary text-light">
                <tr class="text-left">
                    <th scope="col" colspan="4" class="border-right">
                        <h3 class="text-warning"><i class="fa fa-shopping-basket"></i> Data Keranjang <i class="fa fa-shopping-basket"></i></h3>
                    </th>
                    <th scope="col" colspan="2" class="border-right">
                        <h3 class="text-warning"><?php echo $invoiceNya; ?></h3>
                    </th>
                </tr>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga Produk</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Sub Total</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php

                    if (empty($_SESSION['invoice'])) {
                        echo "<tr>";
                        echo "<th colspan='6' class='text-center'><i>Tidak ada barang belanjaan di sini...</i></th>";
                        echo "</tr>";
                    }else{
                        $no = 1;
                        $totalBayar = 0;
                        $query    = "SELECT * FROM penjualan INNER JOIN produk ON penjualan.id_produk = produk.id_produk WHERE invoice='$invoiceNya' ORDER BY id_penjualan DESC";
                        $mysqlQuery   = mysqli_query($koneksinya, $query);
                        while ($result   = mysqli_fetch_assoc($mysqlQuery)) {
                            $totalBayar+=$result['total'];

                ?>

                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $result['nama']; ?></td>
                    <td><strong>Rp<?php echo rp($result['harga']); ?></strong></td>
                    <td><?php echo $result['jumlah']; ?></td>
                    <td><strong>Rp<?php echo rp($result['total']); ?></strong></td>
                    <td><a href="hapus.php?id_produk=<?php echo $result['id_produk']; ?>&id_penjualan=<?php echo $result['id_penjualan']; ?>&jumlah=<?php echo $result['jumlah']; ?>&stock=<?php echo $result['stock']; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> HAPUS</a></td>
                </tr>

                <?php
                        }
                    }
                ?>
            </tbody>
            <?php if (!empty($_SESSION['invoice'])): ?>
                <tfoot>
                    <tr class="text-left">
                        <th scope="col" colspan="4" class="border-right">
                            <h5 class="text-warning">Total Bayar</h5>
                        </th>
                        <th scope="col" colspan="2">
                            <h4 class="text-warning">Rp<?php echo rp($totalBayar); ?></h4>
                        </th>
                    </tr>
                    <tr class="text-left">
                        <th scope="col" colspan="6" class="border-right">
                            <a href="reset.php" role="button" class="btn btn-lg btn-block btn-warning">SELESAI <i class="fa fa-arrow-right"></i></a>
                        </th>
                    </tr>
                </tfoot>
            <?php endif ?>
        </table>

        <table class="table table-striped border mt-4">
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
                    <td><?php echo $result['nama']; ?></td>
                    <td>Rp<?php echo rp($result['harga']); ?></td>
                    <td><?php
                            if ($result['stock']<=0) {
                                echo "<b class='text-danger'>Habis</b>";
                            }elseif ($result['stock']>0) {
                                echo $result['stock'];
                            }
                        ?>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <?php
                            if ($result['stock']<=0) {
                        ?>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#">
                            <i class="fa fa-window-close"></i> HABIS
                        </button>
                        <?php
                            }elseif ($result['stock']>0) {
                        ?>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#tambah<?= $result['id_produk']; ?>">
                            <i class="fa fa-cart-plus"></i> TAMBAH
                        </button>
                        <?php
                            }
                        ?>

                        <!-- Modal -->
                        <div class="modal fade" id="tambah<?= $result['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form method="POST" action="memproses_beli_produk.php" class="modal-content">
                                    <div class="modal-header bg-warning">
                                        <h5 class="modal-title text-primary" id="exampleModalLabel"><?php echo $result['nama']; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-left">
                                        <input type="hidden" name="id_produk" value="<?php echo $result['id_produk']; ?>">
                                        <input type="hidden" name="harga" value="<?php echo $result['harga']; ?>">
                                        <input type="hidden" name="stock" value="<?php echo $result['stock']; ?>">
                                        <label class="text-warning font-weight-bold">Masukkan jumlah pembelian</label>
                                        <input type="number" name="jumlah" value="1" min="1" max="<?php echo $result['stock']; ?>" class="col-12">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-warning"><i class="fa fa-check-square-o"></i> SELESAI</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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