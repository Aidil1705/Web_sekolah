<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="alumni.css">
</head>
<body>
    <?php
    include  "header.php";
    ?>
    <form action="" method="post">
    <table class="tabel">
        <tr>
            <td>Judul</td>
            <td>  :  <input type="text" name="judul" placeholder="Masukkan Judul"></td>
        </tr>
        <tr>
            <td>Isi</td>
            <td>  :  <input type="text" name="isi" placeholder="Masukkan Judul"></td>
        </tr>
       <tr>
        <td><button type="submit" name="simpan">Tambah</button></td>
       </tr>
    </table>
    </form>
    <?php
    include "koneksi.php";
    
    if(isset($_POST['simpan'])){
        mysqli_query($conn,"insert into informasi set
        judul = '$_POST[judul]',
        keterangan = '$_POST[isi]'");
    }
   
    
    ?>
</body>
</html>