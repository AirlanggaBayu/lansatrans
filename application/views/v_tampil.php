<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan</title>
</head>
<body>
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Pelanggan</th>
			<th>Kelas</th>
			<th>Jumlah Kursi</th>
            <th>Tanggal Pesan</th>
            <th>Tanggal Berangkat</th>
            <th>Tanggal Pulang</th>
            <th>Alamat Penjemputan</th>
            <th>Rute</th>
		</tr>
		<?php 
		$no = 1;
		foreach($pemesanan as $p){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->pelanggan ?></td>
			<td><?php echo $p->kelas ?></td>
            <td><?php echo $p->jumlahkursi ?></td>
            <td><?php echo $p->tanggalpesan ?></td>
			<td><?php echo $p->tanggalberangkat ?></td>
            <td><?php echo $p->tanggalpulang ?></td>
            <td><?php echo $p->alamatpenjemputan ?></td>
            <td><?php echo $p->rute ?></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>

