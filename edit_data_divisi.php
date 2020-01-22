<?php
	//koneksi
require_once('koneksi.php');

$kode_divisi=$_GET['kode_divisi'];

// echo $id;
$query="SELECT * FROM tb_divisi WHERE kode_divisi = '$kode_divisi'";
$data=mysqli_query($conn,$query);

//menampung hasil
$row=mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
<body style="background: url(7.jpg);">

	<center>
<div class="isidata" style="background: #D6EAF8 box-shadow: 0px 10px 20px 0px #E59866">
<h1>Ubah Data</h1>


<form method="post" action="ubah_data_divisi.php">

<table border="0">
	<tr>
		<td>Kode Divisi </td>
		<td> </td>
		<td><input type="text" class="form-control" name="kode_divisi" required="required" value="<?php echo $row['kode_divisi'];?>"></td>
	</tr>
	<tr>
		<td>Nama Divisi </td>
		<td> </td>
		<td><input type="text" class="form-control" name="nama_divisi" required="required" value="<?php echo $row['nama_divisi'];?>"></td>
	</tr>
	<tr>
		<td>Tunjangan </td>
		<td> </td>
		<td><input type="number" class="form-control" name="tunjangan" required="required" value="<?php echo $row['tunjangan'];?>"></td>
	</tr>
	<tr>
		<td>ID Pengurus </td>
		<td> </td>
		<td>
			<select name="id" >
<<?php 
$query_pengurus="SELECT * FROM tb_pengurus";
$data_pengurus=mysqli_query($conn,$query_pengurus);


		while ($row_pengurus=mysqli_fetch_assoc($data_pengurus)) {

?>
				<option value="<?php echo $row_pengurus['id']; ?>" <?php if (!strcmp($row['id'], $row_pengurus['id'])) {echo "SELECTED";
			# code...
		};?>><?php echo $row_pengurus['nama']; ?></option>

<<?php 
}
?>
			</select>
		</td>
	</tr>
	<tr>
		<td><button type="submit" class="btn btn-outline-warning"><i class = "material-icons"></i>Save</button></td>
		<td> </td>
	</tr>
</table>


</form>

</div>
</center>

</body>
</html>


