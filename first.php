<?php
	$data = mysqli_connect('localhost','root','','datasiswa');
	$tampil = "SELECT nim,nama,program_studi FROM dataprofil";
	$tampilkan = mysqli_query($data,$tampil);
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<br> <br>
	<h2>Halaman Awal</h2><br>
	
	<table border="2">
		<form action="" method="POST">
			<tr>
				<td><input type="submit" name="Input" value="Input"></td>
				<td><input type="text" name="nim"></td>
				<td><input type="submit" name="submit" value="Search"></td>

				<?php
				$tampilkan;
				if(isset($_POST['search'])){
					$nim = $_POST['nim'];
					$search ="SELECT nim,nama, program_studi FROM dataprofil WHERE nim ='$nim'";
					$tampilkan = mysqli_query($data,$search);
				}
				?>
			</tr>
			<tr>
				<td>Nim</td>
				<td>Nama</td>
				<td>Program Studi</td>
				<td>Action</td>
			</tr>
			<?php while ($dataprofil = mysqli_fetch_array($tampilkan)){ ?>
			<tr>
				<td><?php echo $dataprofil['nama'];?></td>
				<td><?php echo $dataprofil['nim'];?></td>
				<td><?php echo $dataprofil['program_studi'];?></td>
				<td><input type="submit" name="Delete" value="Delete"></td>
				<?php } ?>
			</tr>
		</form>
	</table>
</body>
</html>