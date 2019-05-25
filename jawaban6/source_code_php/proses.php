<?php 
	include'koneksi.php';
 	$koneksi = new Koneksi();
	// require_once'data_programmers.php';
	// $data = new data_programmers();
	if($_GET['aksi'] == 'tambah')
	{
		$koneksi->simpan($_POST['name']);
		header('location:../index.php');
	}
	elseif($_GET['aksi'] =='tambah_sekill'){
		$koneksi->simpan_sekill($_POST['name'], $_GET['user_id']);
		header('location:../index.php');
	}
 ?>