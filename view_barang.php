<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from barang");
?>

</br>
<a href="tabel_barang.php" class="btn btn-danger">Tambah barang</a>
<table class="table-bordered" border="4">
	<tr>
		<td>No</td>
		<td>Id_kategori</td>
		<td>Nama</td>
		<td colspan="4">Action</td>
	</tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['id_kategori'];?></td>
		<td><?php echo $tampil['nama'];?></td>
		<td><a href="edit_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">Edit</a></td>
		<td><a href="hapus_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">Hapus</a></td>
	</tr>

<?php }?>

</table>