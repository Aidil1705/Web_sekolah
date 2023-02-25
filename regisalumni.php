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
            <td>Nama</td>
            <td>  :  <input type="text" name="nama" placeholder="Masukkan Nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-laki">
                <label for="html">Laki-laki</label>
            </br>
                <input type="radio" name="jenis_kelamin" value="Perempuan">
                <label for="html">perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
            <select id="" name="jurusan">
			        <option value="Bisnis Konstruksi dan Properti">Bisnis Konstruksi dan Properti</option>
			        <option value="Desain Pemodelan Informasi Bangunan">Desain Pemodelan Informasi Bangunan</option>
			        <option value="Teknik Geomatika">Teknik Geomatika</option>
			        <option value="Teknik Pemesinan">Teknik Pemesinan</option>
			        <option value="Teknik Pengelasan">Teknik Pengelasan</option>
			        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
			        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
			        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
			        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
			        <option value="Teknik Pendingin dan Tata Udara">Teknik Pendingin dan Tata Udara</option>
			        <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
			        <option value="Teknik Audio Video">Teknik Audio Video</option>
			      </select>
            </td>
        </tr>
        <tr>
            <td>Tahun Lulus</td>
            <td>  :  <input type="text" name="tahun_lulus" placeholder="Tahun Lulus"></td>
        </tr>
        <tr>
            <td>Kuliah atau Kerja</td>
            <td>  :  <input type="text" name="kuliah_kerja" placeholder="Kuliah/Pekerjaan "></td>
        </tr>
        <tr>
            <td>Nama Tempat Kerja/Kantor</td>
            <td>  :  <input type="text" name="kantor" placeholder="Nama Kantor"></td>
        </tr>
        <tr>
            <td>Tempat Kuliah</td>
            <td>  :  <input type="text" name="tempat_kuliah" placeholder="Tempat Kuliah"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>  :  <input type="text" name="kota" placeholder="Masukkan Kota"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="simpan">Tambah Alumni</button></td>
        </tr>
    </table>
    </form>
    <?php
    include "koneksi.php";
    
    if(isset($_POST['simpan'])){
        mysqli_query($conn,"insert into alumni set
        nama = '$_POST[nama]',
        jenis_kelamin = '$_POST[jenis_kelamin]',
        jurusan = '$_POST[jurusan]',
        tahun_lulus = '$_POST[tahun_lulus]',
        kuliah_kerja = '$_POST[kuliah_kerja]',
        kantor = '$_POST[kantor]',
        tempat_kuliah = '$_POST[tempat_kuliah]',
        kota = '$_POST[kota]'");
    }
   
    
    ?>
</body>
</html>