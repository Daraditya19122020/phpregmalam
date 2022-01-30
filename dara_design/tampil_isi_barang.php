<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from isi_barang JOIN isi_kategori ON isi_barang.kategori_id	 = isi_kategori.id_kategori");

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
		          <th>Id_barang</th>
		          <th>Nama</th>
		          <th>Kategori_id</th>
		          <th>Satuan_id</th>
		        </tr>
		      </thead>
		      <tbody>
	
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['id_barang'];?></td>
		<td><?php echo $tampil['nama'];?></td>
		<td><?php echo $tampil['kategori_id'];?></td>
		<td><?php echo $tampil['satuan_id'];?></td>

	</tr>

<?php }?>

</table>

<?php
include ('footer.php');

?>