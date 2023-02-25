<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    
    <?php
    include "header.php";
    ?>
    </br>
    <center>
    <h1>Kontak</h1>
    </center>
<div class="kontak">
<?php
    include "koneksi.php";
    $select = mysqli_query($conn, "SELECT * FROM kontak WHERE id=1");
    while($hasil = mysqli_fetch_array($select)){
    
    ?>
    <h2 class="ket"><?php echo $hasil['judul']?></h2>
    
    <p class="text1"><?php echo $hasil['isi']?></P>

    <?php }?>

    </br>

    <?php
    include "koneksi.php";
    $select = mysqli_query($conn, "SELECT * FROM kontak WHERE id=2");
    while($hasil = mysqli_fetch_array($select)){
    
    ?>
    <h2 class="ket"><?php echo $hasil['judul']?></h2>
    
    <p class="text1"><?php echo $hasil['isi']?></P>

    <?php }?>

    </br>

    <?php
    include "koneksi.php";
    $select = mysqli_query($conn, "SELECT * FROM kontak WHERE id=3");
    while($hasil = mysqli_fetch_array($select)){
    
    ?>
    <h2 class="ket"><?php echo $hasil['judul']?></h2>
    
    <p class="text1"><?php echo $hasil['isi']?></P>

    <?php }?>
    </div>
    <center>
    <div class="gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.34649696517!2d105.24359611412947!3d-5.3640003551744115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c535b64632bb%3A0x7774722ca7fc4461!2sSMK%20Negeri%202%20Bandar%20Lampung!5e0!3m2!1sid!2sid!4v1664333840636!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </center>
    </body>
</html>