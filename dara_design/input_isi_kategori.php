<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into isi_kategori(id_kategori,nama)
	values(
	'".$_POST['id_kategori']."',
	'".$_POST['nama']."')");

if($query_input){
header('location:tampil_isi_kategori.php');
}else{
}
}
?>
<?php
include ('header.php');

?>
<div class="graphs">
	     <div class="xs">
  	       <h3></h3>
<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
<form method="POST" class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Id_kategori</label>
									<div class="col-sm-8">
										<input type="text" name="id_kategori" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
									</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" name="nama" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
									</div>
									<input type="submit" name="save" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
									</div>
								</form>
						</div></div></div>
<form method="POST">
<table class="table-bordered" border="1">
	<tr>
		<td>Id_Kategori</td>
		<td><input type="text" name="id_kategori" class="form-control"></td>
	</tr><tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php
include ('footer.php');

?>