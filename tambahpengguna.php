<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Username</td>
            <td>  :  <input type="text" name="user"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>  :  <input type="text" name="pass"></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>
                  <input type="radio" name="level" value="admin">
                  <label for="html">Admin</label>
              </br>
                  <input type="radio" name="level" value="super admin">
                  <label for="html">Super Admin</label>
            </td>
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
        mysqli_query($conn,"insert into pengguna set
        username = '$_POST[user]',
        password = '$_POST[pass]',
        level = '$_POST[level]'
        
        ");

        echo "<h1>Berhasil menambahkan Jurusan!</h1>";
        header("Location: ./datapengguna.php");
    }
   
    
    ?>
</body>
</html>