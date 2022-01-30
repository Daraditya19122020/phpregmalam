<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from isi_satuan");
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
		        <tr class="success">
		          <th scope="row">No</th>
		          <td>Id_satuan</td>
		          <td>Nama</td>
		        </tr>
		      </thead>
		      <tbody>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['satuan_id'];?></td>
		<td><?php echo $tampil['nama'];?></td>

	</tr>

<?php }?>

</table>

<?php
include ('footer.php');

?>