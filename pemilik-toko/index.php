<?php

    require '../koneksinya.php'; // Memanggil koneksi database

    if (isset($_POST['submit'])) {
        $queryLogin     = "SELECT * FROM akun WHERE kode='$_POST[kode]'";
        $resultLogin    = mysqli_query($koneksinya, $queryLogin);
        $dataLogin      = mysqli_fetch_assoc($resultLogin);
        $cekLogin       = mysqli_num_rows($resultLogin);

        if ($cekLogin > 0) {
            session_start();
            $_SESSION['nama']   = $dataLogin['nama'];
            $_SESSION['kode']   = $dataLogin['kode'];
            header("Location: home.php");
        }
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

<body class="bg-warning">

    <div class="container-fluid py-4">
        <div class="container py-4">
            <div class="row justify-content-center my-4 py-4">
                
                <form action="" method="POST" class="col-6 bg-primary text-center text-light shadow rounded py-4">
                    <h3>SILAHKAN MASUKKAN KODE AKSES</h3>
                    <?php

                        if (isset($_POST['submit'])) {
                            if ($cekLogin <= 0) {
                                echo "<div class='alert alert-danger mt-4' role='alert'>";
                                echo "<strong>GAGAL!</strong> Kode anda salah!!!";
                                echo "</div>";
                            }
                        }

                    ?>

                    <div class="form-group mt-4">
                        <input type="number" name="kode" class="form-control" placeholder="Masukkan kode akses anda di sini...">
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" name="submit" class="btn btn-block btn-warning">MASUK <i class="fa fa-sign-in"></i></button>
                    </div>

                </form>

            </div>
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