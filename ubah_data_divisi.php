
<?php 

//koneksi
require_once('koneksi.php');


//ambil data dari from
$kode_divisi=$_POST['kode_divisi'];
$nama_divisi=$_POST['nama_divisi'];
$tunjangan=$_POST['tunjangan'];
$id=$_POST['id'];


//menampilkan data
$query="UPDATE tb_divisi SET nama_divisi='$nama_divisi', tunjangan='$tunjangan', id='$id' WHERE kode_divisi= '$kode_divisi'";
$simpan=mysqli_query($conn,$query);

//script langsung pindah ke laman tampil data
header('location: tampil_divisi.php');
 ?>