<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jurusan</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Jurusan </td>
            <td>  :  <input type="text" name="jurusan"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>  :  <input type="text" name="ket"></td>
        </tr>
        <tr>
            <td>Kajur</td>
            <td>  :  <input type="text" name="kajur"></td>
        </tr>
        <tr>
            <td>Logo</td>
            <td>  :  <input type="file" name="logo"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tambah" value="simpan"></td>
        </tr>
    </table>
    </form>
    <a href="jurusanadmin.php"><button>Kembali</button></a>
    <?php
    include "koneksi.php";
    if(isset($_POST['tambah'])){
        $path = "./img/" . hash("sha256", rand(0, 1000) . $_FILES["logo"]["name"]) . pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["logo"]["tmp_name"], $path);

        $result = mysqli_query($conn, "INSERT INTO galeri(foto, keterangan) VALUES('$path', '$_POST[jurusan]')");

        $idGaleri = mysqli_insert_id($conn);

        mysqli_query($conn,"insert into jurusan set
        nama = '$_POST[jurusan]',
        keterangan = '$_POST[ket]',
        Kajur = '$_POST[kajur]',
        idgaleri = '$idGaleri'
        ");

        echo "<h1>Berhasil menambahkan Jurusan!</h1>";
        header("Location: ./jurusanadmin.php");
    }
   
    
    ?>
</body>
</html>