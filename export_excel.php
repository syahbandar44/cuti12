<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN CUTI</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=absen.xls");
	?>
 
	<center>
		<h2>LAPORAN CUTI HONDA BINTARO</h2>
		<br/> 
		<h5></h5>
	</center>
 
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIP</th>
			<th>Tanggal Mulai</th>
			<th>Tanggal Selesai</th>
			<th>Jenis Izin</th>
			<th>Alasan</th>
			<th>Status Izin</th>
			<th>Tanggal Kirim</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","lpsk2");
 
		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tblizin");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['PEGAWAIID']; ?></td>
			<td><?php echo $d['TANGGALMULAI']; ?></td>
			<td><?php echo $d['TANGGALSELESAI']; ?></td>
			<td><?php echo $d['JENISIZIN']; ?></td>
			<td><?php echo $d['ALASAN']; ?></td>
			<td><?php echo $d['STATUSIZIN']; ?></td>
			<td><?php echo $d['TANGGALKIRIM']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>