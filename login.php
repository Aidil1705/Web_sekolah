<?php
    session_start();
    include "koneksi.php";
    
    if(isset($_POST['masuk'])){
        $username = mysqli_real_escape_string ($conn ,$_POST['nama']);
        $password = mysqli_real_escape_string ($conn ,$_POST['password']);
    $qry = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($qry) > 0){
 
        $data = mysqli_fetch_assoc($qry);
        if($data['level']=="Admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Admin";
            header("location:dbadmin.php");

        }else if($data['level']=="Super admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Super admin";
            header("location:datapengguna.php");

        
        }else{
            header("location:login.php?pesan=gagal");
        }	
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Log in</title>
    <style>
        .tombol{
            float: right;
        }
    </style>
</head>
<body>
    <center>
    <div class="box">
    <h2>Silahkan Login </h2>
        <img src="img/profil.jpg" width="100px" class="profil">
        <table>
            <form action="" method="Post">
            <tr>
                <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td class="tombol"><input type="submit" name="masuk" value="masuk"></td>
            </tr>
            </form>
        </table>
      
    </div>
    </center>
</body>
</html>