<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <?php foreach ($pemesanan as $p) : ?>
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">KONFIRMASI TIKET</h1>
                                <?php if ($this->session->flashdata('flash')) : ?>
                                    <div class="row mt-3">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">Data
                                            Berhasil Ditambahkan<?= $this->session->flashdata('flash'); ?>.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php echo form_open_multipart('Admin/Pemesanan/tambah_data'); ?>
                            <div class="col-sm-10">

                                <input type="hidden" class="form-control" id="id_pemesanan" value="<?= $p->id_pemesanan ?>" name="id_pemesanan">
                            </div>
                            <div class="col-sm-10">
                                <label for=" plat">Nomor Pemesanan</label>
                                <input type="text" class="form-control" id="plat" placeholder="Masukan plat.." value="<?= $p->kode_pesan ?>" name="kode_pesan" readonly>
                            </div>

                            <div class="col-sm-10">
                                <label for="merk">ID Pelanggan</label>
                                <input type="text" class="form-control" id="merk" placeholder="Masukkan merk..." value="<?= $p->id_pelanggan ?>" name="id_pelanggan" readonly>
                            </div>
                            <div class="col-sm-10">
                                <label for="merk">Nama*</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama..." value="<?= $p->nama_pelanggan ?>" readonly name="nama_pelanggan" autocomplete="off" required>
                            </div>

                            <div class="col-sm-10">
                                <label for="merk">No. Telp*</label>
                                <input type="text" class="form-control" id="no.telp" value="<?= $p->no_telp ?>" placeholder="Masukkan nama..." readonly name="no_telp" autocomplete="off" required>
                            </div>



                            <div class="col-sm-10">
                                <label for="merk">Rute*</label>
                                <input type="text" class="form-control" id="no.telp" value="<?= $p->id_rute ?>" placeholder="Masukkan nama..." name="id_rute" autocomplete="off" readonly required>
                            </div>


                            <div class="col-sm-10">
                                <label for=" plat">Mobil* </label>
                                <select class="form-control" id="mobil" name="id_mobil" required>
                                    <option selected="0">---Pilih Mobil---</option>
                                    <?php foreach ($cats as $cat) : ?>
                                        <option value="<?php echo $cat->id_mobil; ?>"> <?php echo $cat->merk; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-sm-10">
                                <label for="merk">Mobil Pengganti</label>
                                <input type="text" class="form-control" id="no.telp" placeholder="Jika mobil tidak tersedia" name="mobil_pengganti" autocomplete="off">
                            </div>

                            <div class=" col-sm-10">
                                <label for=" plat">Kelas</label>
                                <input type="text" class="form-control" id="kelas" value="<?= $p->kelas ?>" placeholder="" name="kelas" readonly autocomplete="off">
                            </div>

                            <div class=" col-sm-10">
                                <label for=" plat">Jam Keberangkatan</label>
                                <input type="text" class="form-control" id="jam" placeholder="" value="<?= $p->jam ?>" name="jam" autocomplete="off" readonly>
                            </div>

                            <div class="col-sm-10">
                                <label for=" plat">Jumlah</label>
                                <input type="number" min="1" max="3" class="form-control" value="<?= $p->jumlah ?>" id="jumlah" placeholder="" readonly name="jumlah" required autocomplete="off">
                            </div>



                            <div class="col-sm-10">
                                <label for=" plat">Harga Total</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rp</div>
                                    </div>
                                    <input type="text" class="form-control" id="hargatot" value="<?= $p->harga_total ?>" name="harga_total" autocomplete="off" readonly>
                                </div>
                            </div>

                            <div class="col-sm-10">

                                <input type="hidden" class="form-control" id="" value="<?= $p->tgl_pesan ?>" name="tgl_pesan" autocomplete="off">
                            </div>

                            <div class="col-sm-10">
                                <label for=" plat">Tanggal Berangkat*</label>
                                <input type="text" class="form-control" name="tgl_berangkat" value="<?= $p->tgl_berangkat ?>" readonly>
                            </div>

                            <div class="col-sm-10">
                                <label for=" alamat">Alamat Jemput*</label>
                                <input class="form-control" id="alamat" placeholder="Masukan alamat jemput" value="<?= $p->alamat_jemput ?>" name="alamat_jemput" readonly required></input>
                            </div>

                            <div class="col-sm-10">
                                <label for=" alamat">Status Pembayaran*</label>
                                <select name="status_bayar" id="status_pembayaran" class="form-control">
                                    <option value=" <?= $p->status_bayar ?>"><?= $p->status_bayar ?></option>
                                    <option value="Lunas">Lunas</option>

                                </select>
                            </div>
                            <br>


                            <br>


                            <div class="col-sm-10">

                                <button type="submit" class="btn btn-success">Pesan</button>
                                <a href="<?= base_url('Admin/Pemesanan/') ?>" class="btn btn-sm btn-danger">Batal</a>


                            </div>

                            </form>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // $.document.ready(

        $("#jumlah").attr('disabled', 'true');
        $('#rute').change(function() {

            $("#harga").empty();

            var rute = $(this).val();
            var url = "<?php echo base_url('Admin/Pemesanan/prosesRute') ?>";

            // console.log(rute);

            $.ajax({
                url: url,
                type: 'post',
                data: {
                    rute: rute
                },
                dataType: "JSON",
                success: function(data) {

                    // var i;
                    // for (i = 0; i < data.length; i++) {
                    //     console.log(data[harga] + ' -  ')
                    // }
                    $("#jumlah").removeAttr('disabled');

                    console.log(data);
                    $('#harga').val(data[0].harga);
                    $('#kelas').val(data[0].kelas);
                    $('#jam').val(data[0].jam);
                },
                error: function() {
                    alert('error!');
                }
            });
            // return false;
        });

        // );

        function total() {
            var harga = $("#harga").val();
            var jumlah = $("#jumlah").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#hargatot").val(total);
        }

        $("#jumlah").change(function() {
            total();
        });
        $("#jumlah").keyup(function() {
            total();
        });
    </script>
</div>