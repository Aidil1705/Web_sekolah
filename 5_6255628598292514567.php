<?php 
include 'header.php';
include 'koneksi.php';

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
  	$jenis_kelamin = $_POST['jenis_kelamin'];
  	$jurusan = $_POST['jurusan'];
  	$tahun_lulus = $_POST['tahun_lulus'];
  	$kuliah_pekerjaan = $_POST['kuliah_pekerjaan'];
  	$tempat_kuliah = $_POST['tempat_kuliah'];
  	$kantor = $_POST['kantor'];
  	$kota = $_POST['kota'];

	$result = mysqli_query($conn, "INSERT INTO `registeralumni` (`nama`, `jenis_kelamin`, `jurusan`, `tahun_lulus`, `kuliah_pekerjaan`, `tempat_kuliah`, `kantor`, `kota`) VALUES ('$nama', '$jenis_kelamin', '$jurusan', '$tahun_lulus', '$kuliah_pekerjaan', '$tempat_kuliah', '$kantor', '$kota')");
	header("location:dataalumni.php");

}

 ?>
 <?php
	include 'koneksi.php';
	date_default_timezone_set("Asia/Jakarta");

	$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
	$d = mysqli_fetch_object($identitas);
?>
	<div class="section">
		<div class="container">
			<h3 class="text-center">Register Alumni</h3>
			<h4>IKA Alumni STM/SMK N 2 Bandar Lampung</h4>
			<h5>Kepada Seluruh Alumni STM / SMK N 2 Bandar lampung diharapkan mengisi FORM Isian untuk Data Ikatan Alumni.</h5>
			 <!-- Form Isi Register Alumni -->
			 <div class="container">
			  <form action="./registeralumni.php" method="POST">
			  <div class="row">
			    <div class="col-25">
			      <label for="nama">Nama</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="" name="nama" placeholder="Nama">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
			    	<label for="jeniskelamin">Jenis Kelamin</label>
			    </div>
			    <div class="col-75">
			    	<p>
			        <input type="radio" name="jenis_kelamin" value="Pria"> Pria
			        <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
			        </p>
			     </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
			      <label for="jurusan">Jurusan</label>
			    </div>
			    <div class="col-75">
			      <select id="" name="jurusan">
			        <option value="Bisnis Konstruksi dan Properti">Bisnis Konstruksi dan Properti</option>
			        <option value="Desain Pemodelan Informasi Bangunan">Desain Pemodelan Informasi Bangunan</option>
			        <option value="Teknik Geomatika">Teknik Geomatika</option>
			        <option value="Teknik Pemesinan">Teknik Pemesinan</option>
			        <option value="Teknik Pengelasan">Teknik Pengelasan</option>
			        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
			        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
			        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
			        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
			        <option value="Teknik Pendingin dan Tata Udara">Teknik Pendingin dan Tata Udara</option>
			        <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
			        <option value="Teknik Audio Video">Teknik Audio Video</option>
			      </select>
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
			      <label for="tahunlulus">Tahun Lulus</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="" name="tahun_lulus" placeholder="Tahun">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
			      <label for="pekerjaan">Kuliah / Pekerjaan</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="" name="kuliah_pekerjaan" placeholder="Kuliah / Pekerjaan">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
			      <label for="pekerjaan">Tempat Kuliah</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="" name="tempat_kuliah" placeholder="Universitas">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
			      <label for="kantor">Kantor Tempat Kerja</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="" name="kantor" placeholder="Kantor">
			    </div>
			  </div>
			  <div class="row">
			    <div class="col-25">
			      <label for="kota">Kota</label>
			    </div>
			    <div class="col-75">
			      <input type="text" id="" name="kota" placeholder="Kota">
			    </div>
			  </div>
			  <br>
			  <div class="row">
			    <input type="submit" name="submit" value="Submit">
			  </div>
			  </form>
			</div>
		</div>
	</div>

 