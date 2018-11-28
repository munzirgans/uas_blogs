<?php
	$addonq = '';
	if(get("q")!=""){ $addonq = " WHERE nama LIKE '%". get('q')."%'"; }
	$hasil = $koneksi->prepare("SELECT * FROM artikel ".$addonq.
	" ORDER BY id DESC");
	$hasil->execute();
	$data = $hasil->fetchAll();
?>
<br>
<h2 class="Data_sekolah">Data Konten</h2>
<a class="btn pull-right" href="index.php?p=artikel&m=add">Tambah Baru</a>
<div style="clear:both;width:200px;margin-right:12px;" class="pull-right">
	<form action="index.php?p=artikel&m=search">
		<input autocomplete="off" type="hidden" name="p" value="sekolah">
		<input class="search" autocomplete="off" type="text" name="q" placeHolder="Type and enter to search" value="<?php echo (get("q"));?>">
	</form>
</div>
<div><?php echo get('q')!=""?"hasil pencarian untuk '".(get('q'))."'": "";?></div>
<div style="clear:both">&nbsp;</div>
<table class="data">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Konten</th>
			<th>Penulis</th>
			<th colspan="4">Action</th>
		</tr>
	</thead>
<tbody>
	<?php
	$i = 1;
	foreach ($data as $key) {
?>
<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $key['judul'];?></td>
	<td><?php echo $key['konten'];?></td>
	<td><?php echo $key['penulis'];?></td>
	<td><a class="edit"href="index.php?p=artikel&m=edit&id=
		<?php echo $key['id'];?>">Ubah</a></td>
<td><a onclick="return confirm('Hapus Data <?php echo $key['nama'];?>')"
href="proses/artikel/hapus.php?id=
<?php echo $key['id'];?>">Hapus</a></td>
</tr>
<?php
	$i++;
}
?>
</tbody>
</table>