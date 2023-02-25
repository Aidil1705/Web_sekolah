<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jurusan.css">
    <style>
        .btntambah{
            margin-left: 485px;
            }
    </style>
</head>
<body>
    <?php
    include('headeradmin.php');
    ?>
</br>
    <center>
    <table border="1" class="table">
        <tr>
            
            <td>No</td>
            <td>Jurusan</td>
            <td>Kepala Jurusan</td>
            <td>Foto</td>
            <td>Alat</td>
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
            $result = mysqli_query($conn, "SELECT * FROM galeri WHERE id = '$hasil[idgaleri]'");
            $gambar = mysqli_fetch_assoc($result);
            ?>
            <img src="<?= $gambar['foto'] ?>" alt="" height="100" width="100">
        </td>
        <td><a href="editjurusan.php?id=<?php echo $hasil['id']; ?>">Edit</a> |
		    <a href="hapusjurusan.php?id=<?php echo $hasil['id']; ?>">Hapus</a>				
        </td>

    </tr>
<?php }?>
    </table>
</center>
<br/>
<div class="btntambah">
<a href="tambahjurusan.php"><button>Tambah Jurusan</button></a>
</div>
    <?php
    include('footer.php');
    ?>
</body>
</html>