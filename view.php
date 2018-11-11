<html>
	<head>
		<title>Ta10_dania</title>
	</head>
	<body>
		<h3 align="center">DATA MAHASISWA</h3>
		<table border="2" cellpadding="5" cellspacing="1" align="center">
			<tr align="center">
				<td>NIM</td>
				<td>Nama</td>
				<td>Angkatan</td>
				<td>Fakultas</td>
				<td>Program</td>
				<td>Genre Fim</td>
				<td>Wisata</td>
				<td colspan="2">Aksi</td>
			</tr>
			<?php while($row = $this->model->fetch($data)){
				echo "
					<tr>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
						<td>$row[5]</td>
						<td>$row[6]</td>
						<td><a href='index.php?e=$row[0]'>Edit</a></td>
						<td><a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\>Delete</a></td>
					</tr>
				";
			}?>
		</table>
		<center><a href='index.php?i=add'>Tambah Data</a></center>
	</body>
</html>
