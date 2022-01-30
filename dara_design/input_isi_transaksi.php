<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into isi_transaksi(id_transaksi,nama_transaksi,tgl_transaksi,harga,qty,id_barang,diskon,id_pelanggan)
	values(
	'".$_POST['id_transaksi']."',
	'".$_POST['nama_transaksi']."',
	'".$_POST['tgl_transaksi']."',
	'".$_POST['harga']."',
	'".$_POST['qty']."',
	'".$_POST['id_barang']."',
	'".$_POST['diskon']."',
	'".$_POST['id_pelanggan']."')");

if($query_input){
header('location:tampil_isi_transaksi.php');
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
									<label for="focusedinput" class="col-sm-2 control-label">Id_transaksi</label>
									<div class="col-sm-8">
										<input type="text" name="id_transaksi" class="form-control1" id="focusedinput" placeholder="digit atas kartu anda, misal : 200220008">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama Transaksi</label>
									<div class="col-sm-8">
										<input type="text" name="nama_transaksi" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tanggal Transaksi</label>
									<div class="col-sm-8">
										<input type="date" name="tgl_transaksi" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Harga</label>
									<div class="col-sm-8">
										<input type="text" name="harga" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">QTY</label>
									<div class="col-sm-8">
										<input type="text" name="qty" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Id_pelanggan</label>
									<div class="col-sm-8">
										<input type="text" name="id_pelanggan" class="form-control1" id="focusedinput" placeholder="4 digit awal id transaksi anda">
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