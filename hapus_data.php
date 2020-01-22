<?php
	//koneksi
require_once('koneksi.php');

$id=$_GET['id'];

// echo $id;
$query="DELETE FROM tb_pengurus WHERE id = '$id'";
$data=mysqli_query($conn,$query);

//script langsung pindah ke laman tampil data
header('location: tampil_data.php');



?>