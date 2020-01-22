<?php
//memanggil file koneksi
require_once('koneksi.php');
// include('koneksi.php')

$query="SELECT * FROM tb_pengurus";
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
	<title>Data Pengurus</title>
</head>
<body style="background: url(7.jpg);">
<center>
	<div class="tampilku" style="box-shadow: 0px 10px 20px 0px #D7BDE2 width: 900px">
	<h1>Data Pengurus</h1>

	<table border="0" class="table table-striped">
		<tr class="table-secondary">
			<th>ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Gender</th>
			<th>Gaji</th>
			<th>Keterangan</th>
		</tr>

		<?php
			while ($row=mysqli_fetch_assoc($data)) {
				
		?>
		
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['alamat'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['gaji'];?></td>
			<td>
				<a href="edit_data.php?id=<?php echo $row['id'];?>">Edit</a> |
				<a href="hapus_data.php?id=<?php echo $row['id'];?>" onclick="return confirm('Yakin nih mau dihapus???')">Delete</a>
			</td>
				
		</tr>

		<?php
			}
		?>

	</table>
</div>
<div class="isidata"  style="background: #EBF5FB box-shadow: 0px 10px 20px 0px #F7DC6F">
<h1>Input Data</h1>

<form method="post" action="simpan_data.php">

<table border="0">
	<tr>
		<td>ID </td>
		<td> </td>
		<td><input type="number" class="form-control" name="id" required="required"></td>
	</tr>
	<tr>
		<td>Nama </td>
		<td> </td>
		<td><input type="text" class="form-control" name="nama" required="required"></td>
	</tr>
	<tr>
		<td>Alamat </td>
		<td> </td>
		<td><textarea name="alamat" class="form-control" required="required" ></textarea></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td> </td>
		<td> <input type="radio" value="L" name="gender" required="required" >Laki-laki
<input type="radio" value="P" name="gender" required="" >Perempuan</td>
	</tr>
	<tr>
		<td>Gaji </td>
		<td> </td>
		<td><input type="number" class="form-control" name="gaji" required="required" ></td>
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
