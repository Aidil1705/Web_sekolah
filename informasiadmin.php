<?php
include ('headeradmin.php');
?>

<?php
include 'koneksi.php';
$informasi = mysqli_query($conn, "SELECT * FROM informasi WHERE id = '".$_GET['id']."'");
if(mysqli_num_rows($informasi)>0){
while($hasil = mysqli_fetch_array($informasi)){
    ?>
    <h1><?= $hasil['judul']?></h1>
    <p><?= $hasil['keterangan'] ?></p>
    <?php }}?>
</br>
    <a href="editinformasi.php?id=<?= $_GET['id'] ?>"><button type="submit">Edit Isi</button></a>