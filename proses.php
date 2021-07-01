<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        a {
            text-decoration: none;
        }

        .card {
            box-shadow: 0 2px 5px 0 rgba(0,0,0.5);
	        border-radius: 3px;
	        padding: 30px;
	        margin-top: 30px;
            background-color: #f2c772;
            font-family: 'Montserrat', sans-serif;
        }

    </style>
    <title>Document</title>
</head>
<body>
<div class="card">
        <center>
            <div class="lihat">
                <?php

                    echo "FORM KRITIK DAN SARAN <br>";
                    $fp = fopen("Bukutamu.txt","a+");
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $email = $_POST['email'];
                    $pesan = $_POST['pesan'];

                    fputs($fp, "$nama|$alamat|$email|$pesan \n");
                    fclose($fp);

                    echo "<h1> Terimakasih Telah Memberi Kritik Dan Saran </h1> <br>";
                    echo "<a href=index.php> Isi Kritik Dan Saran || </a>";
                    echo "<a href=lihat.php> Lihat Kritik Dan Saran </a> <br>";
                ?>
            </div>
        </center>
    </div>
</body>
</html>
