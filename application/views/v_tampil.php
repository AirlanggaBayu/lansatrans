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
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->pelanggan ?></td>
			<td><?php echo $u->kelas ?></td>
            <td><?php echo $u->jumlahkursi ?></td>
            <td><?php echo $u->tanggalpesan ?></td>
			<td><?php echo $u->tanggalberangkat ?></td>
            <td><?php echo $u->tanggalpulang ?></td>
            <td><?php echo $u->alamatpenjemputan ?></td>
            <td><?php echo $u->rute ?></td>
            
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>

