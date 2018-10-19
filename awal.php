<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<table>
		<tr><td>Nama &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="nama"></td></tr>
		<tr><td>Nim &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="nim"></td></tr>
		<tr><td>Tanggal Lahir<input type="date" name="tanggal_lahir"></td></tr>
		<tr><td>Jenis Kelamin<select name="jenis_kelamin">
			<option value="Laki-laki">Laki-Laki</option>
			<option value="Perempuan">Perempuan</option>
		</select></td></tr>
		<tr><td>Program Studi<select name="program_studi">
			<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
			<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
			<option value="Sistem Informasi">Sistem Informasi</option>
			<option value="Teknik Industri">Teknik Industri</option>
			<option value="Desain Interior">Desain Interior</option>
		</select></td></tr>
		<tr><td>Fakultas<br><input type="radio" name="fakultas" value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan<br>
						<input type="radio" name="fakultas" value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri<br>
						<input type="radio" name="fakultas" value="Fakultas Industri Kreatif">Fakultas Industri Kreatif<br>
						<input type="radio" name="fakultas" value="Fakultas Informatika">Fakultas Informatika<br>
						<input type="radio" name="fakultas" value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis<br>
		</td></tr>
		<tr><td>Asal &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="asal"></td></tr>
		<tr><td>Moto Hidup &nbsp<textarea name="moto" placeholder=""></textarea></td></tr>
		<tr><td><input type="submit" name="submit" value="submit">
	</form>
</table>
</body>
</html>


<?php

	$data = mysqli_connect('localhost','root','','datasiswa');

	if(isset($_POST['submit'])){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$program_studi = $_POST['program_studi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];


		$insert = "INSERT INTO dataprofil VALUES('$nama','$nim','$tanggal_lahir','$jenis_kelamin','$program_studi','$fakultas','$asal','$moto')";
		$sql = mysqli_query($data,$insert);

		if ($sql) {
			echo "data berhasil diinputkan";
			header("location:first.php");
		}else{
			echo "Maaf anda gagal menginputkan data";
			header("Location:awal.php");
		}

	}

?>