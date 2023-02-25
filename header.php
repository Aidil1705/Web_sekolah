<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 2 Bandar Lampung</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="head">
        <header>
    <div class="con">
        <a href="dashboard.html"><img src="img/smk2.png" width="250px"></a>
        <ul class="nav-menu">
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li class="active"><a href="jurusan.php">Jurusan</a></li>
            <li class="active"><a href="galeri.php">Galeri</a></li>
            <li class="active">
                <a href="#">Informasi</a>
                <ul class="dropdown">
                    <?php
                    include "koneksi.php";
                    $result = mysqli_query($conn, "SELECT id, judul FROM informasi" );
                    while ($informasi = mysqli_fetch_assoc($result)){
                        ?>
                    <li><a href="inforamasi.php?id=<?php echo $informasi['id'] ?>"><?= $informasi['judul']?></a></li>
                   <?php }?>
                </ul>
                
            </li>
            <li>
                <a href="#">Alumni</a>
                <ul class="dropdown">
                    <li><a href="alumni.php">Data Alumni</a></li>
                    <li><a href="regisalumni.php">Registrasi Alumni</a></li>
                </ul>
            </li>

            <li><a href="kontak.php">Kontak</a></li>
            <li class="active"><a href="login.php">Log In</a></li>
        </ul>
    </div>
        </header>
    </div>
</body>
</html>