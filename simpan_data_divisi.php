
<?php 

//koneksi
require_once('koneksi.php');

//ambil data dari from
$kode_divisi=$_POST['kode_divisi'];
$nama_divisi=$_POST['nama_divisi'];
$tunjangan=$_POST['tunjangan'];
$id=$_POST['id'];

$query="INSERT INTO tb_divisi VALUES('$kode_divisi', '$nama_divisi', '$tunjangan', '$id')";
$simpan=mysqli_query($conn,$query);

//script langsung pindah ke laman tampil data
header('location: tampil_divisi.php');
//if ($simpan) {
	//echo "Data Berhasi Disimpan";
	//}else{
	//	echo "Data Gagal Disimpan";
	//}

 ?>