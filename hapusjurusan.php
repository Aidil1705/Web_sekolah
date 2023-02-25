<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM Jurusan WHERE id='$id'")or die(mysqli_error());
 
header("location:jurusanadmin.php?pesan=hapus");
?>