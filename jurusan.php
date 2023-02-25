<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jurusan.css">
</head>
<body>
    <?php
    include('header.php');
    ?>
</br>
    <center>
    <table border="1" class="table">
        <tr>
            
            <td>No</td>
            <td>Jurusan</td>
            <td>Kepala Jurusan</td>
            <td>Foto</td>
            </div>
        </tr>
        <?php
include 'koneksi.php';
$select = mysqli_query($conn, "SELECT * FROM Jurusan ORDER BY nama");
$nomor = 1 ;
while($hasil = mysqli_fetch_array($select)){

?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['kajur'] ?></td>
        <td>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM galeri WHERE id = $hasil[idgaleri]");
            $gambar = mysqli_fetch_assoc($result);
            ?>
            <img src="<?= $gambar['foto'] ?>" alt="" height="100" width="100">
        </td>

    </tr>
<?php }?>
    </table>
</center>
    <?php
    include('footer.php');
    ?>
</body>
</html>