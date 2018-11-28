<h2>Tambah Data Artikel</h2>
<form method="POST" action="proses/artikel/save.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Konten</td>
			<td><textarea class="textarea"name="konten"></textarea>
		</tr>
		<tr>
			<td>Penulis</td>
			<td><input type="text" name="penulis"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
</form>