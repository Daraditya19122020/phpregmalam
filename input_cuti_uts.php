<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into cuti(nik,nama,jabatan,department,tanggal_pengajuan,tanggal_mulai_cuti,tanggal_masuk_kembali,alasan)
	values(
	'".$_POST['nik']."',
	'".$_POST['nama']."',
	'".$_POST['jabatan']."',
	'".$_POST['department']."',
	'".$_POST['tanggal_pengajuan']."',
	'".$_POST['tanggal_mulai_cuti']."',
	'".$_POST['tanggal_masuk_kembali']."',
	'".$_POST['alasan']."')");

if($query_input){
header('location:view_cuti_uts.php');
}else{
}
}
?>
<title>Form pengajuan</title>
<center><h1><b>PT.MAJU TERUS GAMAU GAMAJU</h1></b></center>
<center><h2><b>FORM PENGAJUAN CUTI KARYAWAN</h2></b></center>
<right><h2><u><b>Input Pengajuan</h2></b><u></right>
<form method="POST">
<table class="table-bordered" border="1">
	<tr>
		<td>NIK</td>
		<td><input type="text" name="nik" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td><input type="text" name="jabatan" class="form-control"></td>
	</tr>
	<tr>
		<td>Department</td>
		<td><input type="text" name="department" class="form-control"></td>
	</tr>
	<tr>
		<td>Tanggal Pengajuan</td>
		<td><input type="date" name="tanggal_pengajuan" class="form-control"></td>
	</tr>
	<tr>
		<td>Tanggal Mulai Cuti</td>
		<td><input type="date" name="tanggal_mulai_cuti" class="form-control"></td>
	</tr>
	<tr>
		<td>Tanggal Kembali Bekerja</td>
		<td><input type="date" name="tanggal_masuk_kembali" class="form-control"></td>
	</tr>
	<tr>
		<td>Alasan pengajuan</td>
		<td><input type="text" name="alasan" class="form-control"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
