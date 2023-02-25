<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="galeri.css">
    <style>

    </style>
</head>
<body>
    
    
    <?php
    include "koneksi.php";
    if (isset($_GET['id'])){
    $id = $_GET['id'];
    $select = mysqli_query($conn, "SELECT * FROM Jurusan WHERE id='$id'");
    while($hasil = mysqli_fetch_array($select)){
    
    ?>
    <h1><?php echo $hasil['nama']?></h1>
    <p class="ket"><?php echo $hasil['keterangan']?></p>

    
    
    <?php }}?>
</body>
</html>