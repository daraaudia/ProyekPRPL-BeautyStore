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
                echo "<h1> Guest Book List </h1>";
                $fp = fopen("bukutamu.txt","r");
                echo "<table border=0";

                while ($isi = fgets($fp,80)){

                $pisah = explode("|",$isi);

                echo "<tr><td> NAMA </td><td>: <b>$pisah[0]</b></td></tr>";
                echo "<tr><td> ALAMAT </td><td>: <b>$pisah[1]</b></td></tr>";
                echo "<tr><td> EMAIL </td><td>: <b>$pisah[2]</b></tr>";
                echo "<tr><td> PESAN </td><td>: <b>$pisah[3]</b></td></tr> <tr><td> &nbsp; <hr></td> <td> &nbsp; <hr></td></tr>";
                }

                echo "</table>";
                echo "<br> <br>";
                echo "<a href=index.php> Klik Di sini </a> Isi Form Buku Tamu";
            ?>
            </div>
        </center>
    </div>
</body>
</html>
