<?php
include_once'C:/xampp/htdocs/latihan/koneksi.php';
?>
<table class="data">
	<tr>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Pekerjaan</th>
	</tr>
	<?php
	$data = mysqli_query($koneksi,"select * from user");
	while ($d=mysqli_fetch_array($data)) {
	?>
	<tr>
		<td><?php echo $d['nama'] ?></td>
		<td><?php echo $d['alamat'] ?></td>
		<td><?php echo $d['pekerjaan'] ?></td>
	</tr>
	<?php } ?>
</table>