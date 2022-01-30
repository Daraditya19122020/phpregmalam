<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into isi_barang(id_barang,nama,kategori_id,satuan_id)
	values(
	'".$_POST['id_barang']."',
	'".$_POST['nama']."',
	'".$_POST['kategori_id']."'
	'".$_POST['satuan_id']."')");

if($query_input){
header('location:view_isi_barang.php');
}else{
}
}
?>
<form method="POST">
<table class="table-bordered" border="1">
	<tr>
		<td>Id_barang</td>
		<td><input type="text" name="id_barang" class="form-control"></td>
	</tr><tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	</tr><tr>
		<td>Kategori_id</td>
		<td><input type="text" name="kategori_id" class="form-control"></td>
	</tr>
	</tr><tr>
		<td>Satuan_id</td>
		<td><input type="text" name="satuan_id" class="form-control"></td>
	</tr>
</table>
</form>