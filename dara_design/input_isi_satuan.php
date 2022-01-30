<?php
include("koneksi.php");


if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into isi_satuan(satuan_id,nama)
	values(
	'".$_POST['satuan_id']."',
	'".$_POST['nama']."')");

if($query_input){
header('location:tampil_isi_satuan.php');
}else{
}
}
?>
<?php
include ('header.php');
$query_view=mysqli_query($koneksi,"select * from isi_satuan");

?>
<div class="graphs">
	     <div class="xs">
  	       <h3></h3>
<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
<form method="POST" class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Satuan_id</label>
									<div class="col-sm-8">
										<input type="text" name="satuan_id" class="form-control1" id="focusedinput" placeholder="">
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
<?php
include ('footer.php');

?>