<?php
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from cuti");
?>

</br>
<a href="input_cuti_uts.php" class="btn btn-danger">Input Cuti</a>
<table class="table-bordered" border="4">
	<tr>
		<td>No</td>
		<td>NIK</td>
		<td>Nama</td>
		<td>Jabatan</td>
		<td>Department</td>
		<td>Tanggal Pengajuan</td>
		<td>Tanggal Mulai Cuti</td>
		<td>Tanggal Kembali Bekerja</td>
		<td>Alasan pengajuan</td>	
	</tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $tampil['nik'];?></td>
		<td><?php echo $tampil['nama'];?></td>
		<td><?php echo $tampil['jabatan'];?></td>
		<td><?php echo $tampil['department'];?></td>
		<td><?php echo $tampil['tanggal_pengajuan'];?></td>
		<td><?php echo $tampil['tanggal_mulai_cuti'];?></td>
		<td><?php echo $tampil['tanggal_masuk_kembali'];?></td>
		<td><?php echo $tampil['alasan'];?></td>
	</tr>

<?php }?>

</table>