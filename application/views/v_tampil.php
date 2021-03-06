<!-- <!DOCTYPE html>
<html>

<head>
	<title>Pemesanan</title>
</head>

<body> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Tabel Pemesanan</h6>

	</div>
	<div class="card-body">
		<a href="<?= base_url('Admin/Pemesanan/pesan'); ?>" class="btn btn-success btn-sm ml-4"> Tambah Pemesanan</a>
		<a href="<?= base_url('Admin/Pemesanan/cetak'); ?>" class="btn btn-primary btn-sm ml-4"> Cetak Laporan</a>
		<div class="table-responsive mt-2">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>


						<th>Kode Pesan</th>
						<th>Nama</th>
						<th>Jumlah</th>

						<th>Tanggal Pesan</th>
						<th>Tanggal Berangkat</th>
						<th>Bukti</th>
						<th>Pembayaran</th>
						<th>Aksi</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($pemesanan as $p) {
					?>
						<tr>
							<td><?php echo $no++ ?></td>


							<td><?php echo $p->kode_pesan ?></td>
							<td><?php echo $p->nama_pelanggan ?></td>
							<td><?php echo $p->jumlah ?></td>

							<td><?php echo $p->tgl_pesan ?></td>
							<td><?php echo $p->tgl_berangkat ?></td>
							<td>
								<img src="<?= base_url('assets/bukti-bayar/') . $p->bukti ?>" width="60" height="60" class="zoom">
							</td>
							<td><?php echo $p->status_bayar ?></td>

							<td>

								<a href="<?= base_url('Admin/pemesanan/halaman_detail/') . $p->id_pemesanan ?>" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i></a>
								<a href="<?= base_url('Admin/Pemesanan/halaman_ubah_bayar/') . $p->id_pemesanan ?>" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i></a>
								<a href="<?= base_url('Admin/Pemesanan/hapuspesanan/') . $p->id_pemesanan  ?>" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></a>


							</td>
						</tr>

					<?php } ?>
				</tbody>
			</table>


		</div>
	</div>
</div>


<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transisi');
    }, function() {
        $(this).removeClass('transisi');
    });
});  
</script>
<!-- 
</body>

</html> -->