<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";

	if (isset($_POST['Simpan'])) {
		$path = "./img/" . hash("sha256", rand(0, 1000) . $_FILES["logo"]["name"]) . pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["logo"]["tmp_name"], $path);

        $result = mysqli_query($conn, "INSERT INTO galeri(foto, keterangan) VALUES('$path', '$_POST[jurusan]')");

        $idGaleri = mysqli_insert_id($conn);

		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$keterangan = $_POST['keterangan'];
		$kajur = $_POST['kajur'];
		
		mysqli_query($conn, "UPDATE jurusan SET nama ='$nama', keterangan='$keterangan', kajur='$kajur', idgaleri = '$idGaleri' WHERE id='$id'");
		header("Location: jurusanadmin.php");
		return;
	}

	$id = $_GET['id'];
	$qry = mysqli_query($conn, "SELECT * FROM jurusan WHERE id='$id'")or die(mysqli_error($conn));
	$nomor = 1;
	
	while($data = mysqli_fetch_array($qry)){
	?>
	<form action="editjurusan.php" method="post" enctype="multipart/form-data">		
		<table>
			<tr>
				<td>Jurusan</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"></td>					
			</tr>	
			<tr>
				<td>Kajur</td>
				<td><input type="text" name="kajur" value="<?php echo $data['kajur'] ?>"></td>					
			</tr>
			<tr>
				<td>Foto Lama</td>
				<?php
				$result = mysqli_query($conn, "SELECT * FROM galeri WHERE id = $data[idgaleri]");
				$gambar = mysqli_fetch_assoc($result);

				?>

				<td><img src="<?= $gambar['foto'] ?>" height="250" width="250"></td>
			</tr>
			<tr>
				<td>Foto Baru</td>
				<td><input type="file" name="logo" id=""></td>	
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="Simpan">Edit Jurusan</button></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>