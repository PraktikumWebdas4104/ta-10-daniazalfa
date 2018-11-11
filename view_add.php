<html>
	<head>
		<title>Ta10_dania</title>
	</head>
	<body>
		<H3 align="center"> TAMBAH DATA MAHASISWA </H3>
		<form action="" method="POST">
			<table border="2" cellpadding="2" cellspacing="2" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" size="45" /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" size="45"/></td>
				</tr>
				<tr >
					<td align="center">Genre Film</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="genre[]" value="Horror"/>Horror <br>
						<input type="checkbox" name="genre[]"  value="Action"/>Action <br>
						<input type="checkbox" name="genre[]"  value="Anime"/>Anime <br>
						<input type="checkbox" name="genre[]"  value="Thriller"/>Thriller <br>
						<input type="checkbox" name="genre[]"  value="Animasi"/>Animasi <br>
					</td>
				</tr>
				<tr >
					<td align="center">Wisata</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="wisata[]"  value="Bali"/>Bali <br>
						<input type="checkbox" name="wisata[]"  value="Raja ampat"/>Raja Ampat <br>
						<input type="checkbox" name="wisata[]"  value="Pulau Derawan"/>Pulau Derawan <br>
						<input type="checkbox" name="wisata[]"  value="Bangka belitung"/>Bangka Belitung <br>
						<input type="checkbox" name="wisata[]"  value="Labuan bajo"/>Labuan Bajo <br>

					</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();//panggil controller insert
	}
?>
