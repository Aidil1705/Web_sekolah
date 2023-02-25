<?php
    include "koneksi.php";
    $result = mysqli_query($conn, "SELECT foto_sekolah FROM pengaturan WHERE id = 1");
    $hasil = mysqli_fetch_assoc($result);

    $result = mysqli_query($conn, "SELECT foto FROM galeri WHERE id = '$hasil[foto_sekolah]'");
    $hasil = mysqli_fetch_assoc($result);
    $fotosekolah = $hasil["foto"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <?php
    include('headeradmin.php');
    ?>
    <div class="isi">
    <img src="<?= $fotosekolah ?>" width="100%" height="500px" >
</br>
<center>
    <a href="fotosekolah.php"><button class="btn_gnt" type="submit" >Ganti Foto Sekolah</button></a>
    </center>
<h1>Selamat datang di website SMK Negeri 2 Bandar Lampung</h1>
    
</body>
</html>
