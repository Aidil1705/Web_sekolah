<?php
include ('header.php');
?>

<?php
include 'koneksi.php';
$select = mysqli_query($conn, "SELECT * FROM informasi WHERE id = 1");
while($hasil = mysqli_fetch_array($select)){
    ?>
    <h1><?php echo $hasil['judul']?></h1>
    <p><?= $hasil['keterangan'] ?></p>
    <?php }?>