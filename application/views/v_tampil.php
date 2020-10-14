<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan</title>
</head>
<body>
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Pemesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
		<tr>
			<th>No</th>
			<th>Pemesanan</th>
			<th>Pelanggan</th>
			<th>Nama</th>
			<th>Mobil</th>
            <th>kelas</th>
            <th>rute</th>
            <th>Kode Pesan</th>
            <th>Jumlah</th>
			<th>Harga Total</th>
			<th>Tanggal Pesan</th>
			<th>Tanggal Berangkat</th>
			<th>Alamat Jemput</th>
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($pemesanan as $p){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->id_pemesanan ?></td>
			<td><?php echo $p->id_pelanggan ?></td>
			<td><?php echo $p->nama_pelanggan ?></td>
            <td><?php echo $p->id_mobil ?></td>
            <td><?php echo $p->id_kelas ?></td>
			<td><?php echo $p->id_rute ?></td>
            <td><?php echo $p->kode_pesan ?></td>
            <td><?php echo $p->jumlah ?></td>
			<td><?php echo $p->harga_total ?></td>
			<td><?php echo $p->tanggal_pesan ?></td>
			<td><?php echo $p->tanggal_berangkat ?></td>
			<td><?php echo $p->alamat_jemput ?></td>
			
		</tr>
		<?php } ?>
	
</body>
</html>

