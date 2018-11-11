<html>
	<head>
		<title>Ta10_dania</title>
	</head>
	<body>
		<H3 align="center"> EDIT DATA MAHASISWA</H3>
		<form action="" method="POST">
			<table border="2" cellpadding="2" cellspacing="2" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr >
					<td align="center">Genre film</td>
					<td>:</td>

					<td>
						<input type="checkbox" name="genre[]" value="horror" <?php  if(in_array("Horror",$genre)){echo "checked";}?>/>Horror <br>
						<input type="checkbox" name="genre[]"  value="action" <?php  if(in_array("Action",$genre)){echo "checked";}?>/>Action <br>
						<input type="checkbox" name="genre[]"  value="anime" <?php  if(in_array("Anime",$genre)){echo "checked";}?>/>Anime <br>
						<input type="checkbox" name="genre[]"  value="thriller" <?php  if(in_array("Thriller",$genre)){echo "checked";}?>/>Thriller <br>
						<input type="checkbox" name="genre[]"  value="animasi" <?php  if(in_array("Animasi",$genre)){echo "checked";}?>/>Animasi <br>
					</td>
				</tr>

				<tr >
					<td align="center">Wisata</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="wisata[]"  value="Bali" <?php  if(in_array("Bali",$wisata)){echo "checked";}?>/>Bali <br>
						<input type="checkbox" name="wisata[]"  value="Raja ampat" <?php  if(in_array("Raja ampat",$wisata)){echo "checked";}?>/>Raja ampat <br>
						<input type="checkbox" name="wisata[]"  value="Pulau Derawan" <?php  if(in_array("Pulau Derawan",$wisata)){echo "checked";}?>/>Pulau Derawan <br>
						<input type="checkbox" name="wisata[]"  value="Bangka belitung" <?php  if(in_array("Bangka belitung",$wisata)){echo "checked";}?>/>Bangka belitung <br>
						<input type="checkbox" name="wisata[]"  value="Labuan bajo" <?php  if(in_array("Labuan bajo",$wisata)){echo "checked";}?>/>Labuan bajo <br>

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
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update();//panggil controller update
	}
?>
