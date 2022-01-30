<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from isi_transaksi");
?>

<?php
include ('header.php');

?>

</br>
<table class="table-bordered" border="4">
	 <div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
		    <table class="table">
		      <thead>
		        <tr>
		          <th>No</th>
		          <th>Id_transaksi</th>
		          <th>Nama Transaksi</th>
		          <th>Tanggal Transaksi</th>
		          <th>Harga</th>
		          <th>Qty</th>
		          <th>Id_barang</th>
		          <th>Diskon</th>
		          <th>Id_pelanggan</th>
		        </tr>
		      </thead>
		      <tbody>

<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['id_transaksi'];?></td>
		<td><?php echo $tampil['nama_transaksi'];?></td>
		<td><?php echo $tampil['tgl_transaksi'];?></td>
		<td><?php echo $tampil['harga'];?></td>
		<td><?php echo $tampil['qty'];?></td>
		<td><?php echo $tampil['id_barang'];?></td>
		<td><?php echo $tampil['diskon'];?></td>
		<td><?php echo $tampil['id_pelanggan'];?></td>

	</tr>

<?php }?>

</table>
<?php
include ('footer.php');

?>