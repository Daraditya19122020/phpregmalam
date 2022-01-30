<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from isi_kategori");
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
		          <th>Id_kategori</th>
		          <th>Nama</th>
		        </tr>
		      </thead>
		      <tbody>
	
	
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['id_kategori'];?></td>
		<td><?php echo $tampil['nama'];?></td>

	</tr>

<?php }?>

</table>
<?php
include ('footer.php');

?>