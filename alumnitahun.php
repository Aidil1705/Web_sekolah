<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alumni</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    </br>
    <select name="" onchange="location = this.value;">
    <option value="alumnitahun.php">Berdasarkan Tahun Lulus </option>
    <option value="alumninama.php">Berdasarkan Nama</option>
    <option value="alumnijk.php">Berdasarkan Jenis Kelamin</option>
    <option value="alumnijurusan.php">Berdasarkan Jurusan</option>
    <option value="alumnikk.php">Berdasarkan Status</option>
    <option value="alumnikantor.php">Berdasarkan Nama Kantor</option>
    <option value="alumnikuliah.php">Berdasarkan Universitas</option>
    <option value="alumnikota.php">Berdasarkan Kota</option>
    </select>
    <center>
    <table border="2" class="tbl">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Tahun Lulus</th>
            <th>Kuliah/Kerja</th>
            <th>Nama Kantor</th>
            <th>Tempat Kuliah</th>
            <th>Kota</th>
        </tr>
        <?php
        include 'koneksi.php';
        $select = mysqli_query($conn, "SELECT * FROM alumni ORDER BY tahun_lulus");
        $nomor = 1;
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?= $nomor++;?></td>
            <td><?= $hasil['nama']?></td>
            <td><?= $hasil['jenis_kelamin']?></td>
            <td><?= $hasil['jurusan']?></td>
            <td><?= $hasil['tahun_lulus']?></td>
            <td><?= $hasil['kuliah_kerja']?></td>
            <td><?= $hasil['kantor']?></td>
            <td><?= $hasil['tempat_kuliah']?></td>
            <td><?= $hasil['kota']?></td>
        </tr>
        <?php }?>
    </table>
    </center>
</body>
</html>