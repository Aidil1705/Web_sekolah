<html>
<head>
<link rel="stylesheet" href="jurusan.css">
</head>
<body>
<?php
include "hdsp.php";
?>
</br>
<center>
<table border="2" class="tbl">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Alat</th>
        </tr>
        <?php
        include 'koneksi.php';
        $select = mysqli_query($conn, "SELECT * FROM pengguna ORDER BY username");
        $nomor = 1;
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?= $nomor++;?></td>
            <td><?= $hasil['username']?></td>
            <td><?= $hasil['password']?></td>
            <td><?= $hasil['level']?></td>
            <td>
            <a href="editpengguna.php?id=<?php echo $hasil['id']; ?>">Edit</a> |
		    <a href="hapuspengguna.php?id=<?php echo $hasil['id']; ?>">Hapus</a>	
            </td>
        </tr>
        
        <?php }?>
        <tr>
            <td><a href="tambahpengguna.php"><button type="submit">Tambah Pengguna</button></a></td>
        </tr>
    </table>
        </center>
        </body>
        </html>