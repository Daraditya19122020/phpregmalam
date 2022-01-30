<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from isi_kategori");
$query_tampil=mysqli_query($koneksi,"select * from isi_satuan");



if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"INSERT INTO isi_barang(id_barang,nama,kategori_id,satuan_id)
	values(
	'".$_POST['id_barang']."',
	'".$_POST['nama']."',
	'".$_POST['kategori_id']."',
	'".$_POST['satuan_id']."')");

if($query_input){
header('location:tampil_isi_barang.php');
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
<form method="POST"class="form-horizontal">
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" name="nama" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kategori_id</label>
									<div class="col-sm-8">
										<select name="kategori_id" class="form-control">
										 <?php while($tampil=mysqli_fetch_array($query_view)) {?>
										<option value="<?=$tampil['id_kategori'];?>"> <?=$tampil['nama'];}?> </option></select>

									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Satuan_id</label>
									<div class="col-sm-8">
										<select name="satuan_id" class="form-control">
										 <?php while($tampil=mysqli_fetch_array($query_tampil)) {?>
										<option value="<?=$tampil['satuan_id'];?>"> <?=$tampil['nama'];}?> </option></select>

									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								</div>
									<input type="submit" name="save" class="form-control1" id="focusedinput" placeholder="">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								
							</form>
						</div></div></div></div>


<?php
include ('footer.php');

?>