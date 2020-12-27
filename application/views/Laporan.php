<!-- <!DOCTYPE html>
<html>

<head>
	<title>Pemesanan</title>
</head>

<body> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-primary">Laporan Transaksi Pemesanan</h2>

    </div>
    <div class="card-body">

        <div class="table-responsive mt-2">
            <table border="">
                <thead>
                    <tr>
                        <td>No</td>


                        <td> <strong> KODE PEMESANAN </strong></td>
                        <td><strong> NAMA PEMESAN </strong></td>
                        <td><strong> JUMLAH PESANAN </strong></td>

                        <td><strong> TANGGAL PESAN </strong></td>
                        <td><strong> TANGGAL BERANGKAT </strong></td>

                        <td> <strong>HARGA </strong></td>


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

                            <td>Rp<?php echo $p->harga_total ?>,00-</td>


                        </tr>
                        <script>
                            window.print();
                        </script>

                    <?php } ?>
                </tbody>
            </table>
            <style type="text/css">
                .right {
                    text-align: right;
                }
            </style>

            <p class="right"> Jember, <?php echo date("Y-m-d"); ?> </p>

        </div>
    </div>
</div>
<!-- 
</body>

</html> -->