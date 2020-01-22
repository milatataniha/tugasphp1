<?php
//memanggil file koneksi
require_once('koneksi.php');
// include('koneksi.php')

$query="SELECT tb_divisi.kode_divisi, tb_divisi.nama_divisi, tb_divisi.tunjangan, tb_pengurus.nama FROM tb_divisi,tb_pengurus WHERE tb_divisi.id=tb_pengurus.id";
$data=mysqli_query($conn,$query);



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/style2.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/framework7.material.min.css">
	<link rel="stylesheet" type="text/css" href="css/framework7.material.colors.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-app.css">
	<link rel="stylesheet" href="css/framework7-icons.css">
	<title>Data Divisi</title>
</head>
<body style="background: url(7.jpg);">
<center>
	<div class="tampilku" style="box-shadow: 0px 10px 20px 0px #D7BDE2 width: 900px">
	<h1>Data Divisi</h1>

	<table border="0" class="table table-striped">
		<tr class="table-secondary">
			<th>Code Division</th>
			<th>Name Division</th>
			<th>Tunjangan</th>
			<th>Nama</th>
			<th>Delete</th>
		</tr>

		<?php
			while ($row=mysqli_fetch_assoc($data)) {
				
		?>
		
		<tr>
			<td><?php echo $row['kode_divisi'];?></td>
			<td><?php echo $row['nama_divisi'];?></td>
			<td><?php echo $row['tunjangan'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td>
				<a href="edit_data_divisi.php?kode_divisi=<?php echo $row['kode_divisi'];?>">Edit</a> |
				<a href="hapus_data_divisi.php?kode_divisi=<?php echo $row['kode_divisi'];?>" onclick="return confirm('Yakin nih mau dihapus???')">Delete</a>
			</td>					
		</tr>

		<?php
			}
		?>

	</table>
</div>
<div class="isidata"  style="background: #EBF5FB box-shadow: 0px 10px 20px 0px #F7DC6F">
<h1>Input Data</h1>

<form method="post" action="simpan_data_divisi.php">

<table border="0">
	<tr>
		<td>Kode Divisi </td>
		<td> </td>
		<td><input type="text" class="form-control" name="kode_divisi" required="required"></td>
	</tr>
	<tr>
		<td>Nama Divisi </td>
		<td> </td>
		<td><input type="text" class="form-control" name="nama_divisi" required="required"></td>
	</tr>
	<tr>
		<td>Tunjangan </td>
		<td> </td>
		<td><input type="number" class="form-control" name="tunjangan" required="required" ></td>
	</tr>
	<tr>
		<td>ID Pengurus </td>
		<td> </td>
		<td>
			<select name="id">
<<?php 
$query_pengurus="SELECT * FROM tb_pengurus";
$data_pengurus=mysqli_query($conn,$query_pengurus);


		while ($row_pengurus=mysqli_fetch_assoc($data_pengurus)) {

?>
				<option value="<?php echo $row_pengurus['id']; ?>"><?php echo $row_pengurus['nama']; ?></option>

<<?php 
}
?>
			</select>
		</td>
	</tr>
	<tr>
		<td><button type="submit" class="btn btn-outline-secondary"><i class = "material-icons">bookmark</i>Save</button></td>
		<td> </td>
		<td><button type="reset" class="btn btn-outline-warning"><i class = "material-icons">delete</i>Delete</button></td>
	</tr>
</table>

</form>
</div>
</center>

<script src="js/script.js"></script>
</body>
</html>