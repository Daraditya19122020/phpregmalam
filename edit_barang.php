<?php
include ("koneksi.php");
if(isset($_POST['save'])) {
$query_edit=mysqli_query($koneksi,"UPDATE barang set
	id_barang='".$_POST['id_barang']."',
	id_kategori='".$_POST['id_kategori']."',
	nama='".$_POST['nama']."'
	WHERE id_barang ='".$_POST['id_barang']."'");
if ($query_edit) {
	header("location:view_barang.php");
}else{
	echo mysqli_error();
}
}

$tampil=mysqli_query($koneksi,"SELECT * from barang WHERE id_barang='".$_GET['id_barang']."'");
$hasil_data=mysqli_fetch_array($tampil);

?>
<form method="POST">
<table class="table table-bordered" border="1">
	<input type="hidden" name="id_barang" value="<?php echo $hasil_data['id_barang'];?>">
	<tr>
		<td>id_kategori</td>
		<td><input type="text" name="id_kategori" class="form-control" value="<?php echo $hasil_data['id_kategori'];?>"></td>
	</tr>
	<tr>
		<td>nama</td>
		<td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
	<tr>
		<td><input type="submit" value="rubah data" name="save"></td>
	</tr>
</table>
</form>
