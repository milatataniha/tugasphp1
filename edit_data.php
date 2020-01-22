<?php
	//koneksi
require_once('koneksi.php');

$id=$_GET['id'];

// echo $id;
$query="SELECT * FROM tb_pengurus WHERE id = '$id'";
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


<form method="post" action="ubah_data.php">

<table border="0" >   
	<tr>
		<td>Masukkan ID </td>
		<td> </td>
		<td><input type="number"  name="id" required="required" value="<?php echo $row['id'];?>" class="form-control"></td>
	</tr>
	<tr>
		<td>Masukkan Nama </td>
		<td> </td>
		<td><input type="text" name="nama" required="required" value="<?php echo $row['nama'];?>" class="form-control"></td>
	</tr>
	<tr>
		<td>Masukkan Alamat </td>
		<td> </td>
		<td><textarea class="form-control" name="alamat"> <?php echo $row['alamat'];?></textarea></td>
	</tr>
	<tr>
		<td>Masukkan Gender</td>
		<td> </td>
		<td> <input type="radio" value="L" <?php if (!strcmp($row['gender'], "L")) {echo "CHECKED";
			# code...
		};?> name="gender" required="required">Laki-laki
<input type="radio" value="P" <?php if (!strcmp($row['gender'], "P")) {echo "CHECKED";
			# code...
		};?> name="gender" required="required">Perempuan</td>
	</tr>
	<tr>
		<td>Masukkan Gaji </td>
		<td> </td>
		<td><input type="number" name="gaji" required="required" value="<?php echo $row['gaji'];?>" class="form-control"></td>
	</tr>
	<tr>
		<td><button type="submit" class="btn btn-outline-dark">Save</button></td>
		<td> </td>
	
	</tr>
</table>

</form>

</div>
</center>

</body>
</html>


