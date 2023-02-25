<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Edit Foto Sekolah</h3>
 
	<?php 
	include "koneksi.php";

	if (isset($_POST['Simpan'])) {
		$path = "./img/" . hash("sha256", rand(0, 1000) . $_FILES["fotosekolah"]["name"]) .  "." . pathinfo($_FILES["fotosekolah"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["fotosekolah"]["tmp_name"], $path);

        $result = mysqli_query($conn, "INSERT INTO galeri(foto, keterangan) VALUES('$path', 'foto sekolah')");

        $idGaleri = mysqli_insert_id($conn);

		mysqli_query($conn, "UPDATE pengaturan SET foto_sekolah = '$idGaleri' WHERE id = 1");
        header("Location: fotosekolah.php");
		return;
	}

	$qry = mysqli_query($conn, "SELECT * FROM pengaturan WHERE id = 1");
	$data = mysqli_fetch_assoc($qry);
	
	?>
	<form action="fotosekolah.php" method="post" enctype="multipart/form-data">		
		<table>
				<td>Foto Lama</td>
				<?php
				$result = mysqli_query($conn, "SELECT * FROM galeri WHERE id = '$data[foto_sekolah]'");
				$gambar = mysqli_fetch_assoc($result);

				?>

				<td><img src="<?= $gambar['foto'] ?>" height="250" width="250"></td>
			</tr>
			<tr>
				<td>Foto Baru</td>
				<td><input type="file" name="fotosekolah"></td>	
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="Simpan">Edit Foto Sekolah</button></td>					
			</tr>				
		</table>
	</form>
</body>
</html>