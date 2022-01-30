<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from isi_pelanggan");
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
		          <th>Id_pelanggan</th>
		          <th>Nama_Pelanggan</th>
		          <th>No_Telp</th>
		          <th>Status</th>
		        </tr>
		      </thead>
		      <tbody>
	
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['id_pelanggan'];?></td>
		<td><?php echo $tampil['nama_pelanggan'];?></td>
		<td><?php echo $tampil['no_tlp'];?></td>
		<td><?php echo $tampil['status'];?></td>

	</tr>

<?php }?>

</table>

<?php
include ('footer.php');

?>