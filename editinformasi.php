<?php include 'headeradmin.php'; ?>
<style>
h1 .judul{
    font-weight:bold;
    align-text:center;
}

</style>
<?php
if (isset($_POST['Simpan'])) {
		$id = $_POST['id'];
		$keterangan = $_POST['content'];
		
		mysqli_query($conn, "UPDATE informasi SET keterangan = '$keterangan' WHERE id = '$id'");
		header('Location: informasiadmin.php?id=' . $id);
	}
    ?>
<div class="container">
    <h1 class="judul">EDIT INFORMASI</h1>
    <?php
include 'koneksi.php';
global $conn;
$informasi = mysqli_query($conn, "SELECT * FROM informasi WHERE id = '".$_GET['id']."'");
if(mysqli_num_rows($informasi)>0){
while($hasil = mysqli_fetch_array($informasi)){
    ?>
    </br>
    <h1><?= $hasil['judul']?></h1>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <textarea name="content" id="content" cols="30" rows="10"><?= $hasil['keterangan'] ?></textarea>
    <?php }}?>
    <button type="submit" name="Simpan">Edit</button>
</form>
</div>
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>