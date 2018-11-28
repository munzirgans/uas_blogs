<?php
	include '../../conf.php';
	include '../../conn.php';
	$id = post('id');
	$judul = post('judul');
	$penulis = post('penulis');
	$konten = post('konten');
	$simpan = $koneksi->prepare("UPDATE artikel SET `judul`='".$judul."', `penulis`='".$penulis."', `konten`='".$konten."' WHERE `id` ='".$id."'"); 
	$simpan->execute();
	header("location:../../index.php?p=blog");
?>