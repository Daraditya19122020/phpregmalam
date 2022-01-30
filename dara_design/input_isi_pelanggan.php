<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into isi_pelanggan(id_pelanggan,nama_pelanggan,no_tlp,status)
	values(
	'".$_POST['id_pelanggan']."',
	'".$_POST['nama_pelanggan']."',
	'".$_POST['no_tlp']."',
	'".$_POST['status']."')");

if($query_input){
header('location:tampil_isi_pelanggan.php');
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
									<label for="focusedinput" class="col-sm-2 control-label">Id_pelanggan</label>
									<div class="col-sm-8">
										<input type="text" name="id_pelanggan" class="form-control1" id="focusedinput" placeholder="masukan 4 digit id transaksi anda">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama_pelanggan</label>
									<div class="col-sm-8">
										<input type="text" name="nama_pelanggan" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">No_Telp</label>
									<div class="col-sm-8">
										<input type="text" name="no_tlp" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
									<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8">
										<input type="text" name="status" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
									<input type="submit" name="save" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								</form>
						</div></div></div>




<?php
include ('footer.php');

?>