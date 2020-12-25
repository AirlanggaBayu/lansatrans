<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">PEMESANAN TIKET</h1>
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

                            <input type="hidden" class="form-control" id="id_pemesanan" placeholder="Masukkan nama..." name="id_pemesanan">
                        </div>
                        <div class="col-sm-10">
                            <label for=" plat">Nomor Pemesanan</label>
                            <input type="text" class="form-control" id="plat" placeholder="Masukan plat.." value="<?php echo $kodee; ?>" name="kode_pesan" readonly>
                        </div>

                        <div class="col-sm-10">
                            <label for="merk">ID Pelanggan</label>
                            <input type="text" class="form-control" id="merk" placeholder="Masukkan merk..." value="-" name="id_pelanggan" readonly>
                        </div>
                        <div class="col-sm-10">
                            <label for="merk">Nama*</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama..." name="nama_pelanggan" autocomplete="off" required>
                        </div>

                        <div class="col-sm-10">
                            <label for="merk">No. Telp*</label>
                            <input type="text" class="form-control" id="no.telp" placeholder="Masukkan nomor telp..." name="no_telp" autocomplete="off" required>
                        </div>



                        <div class="col-sm-10">
                            <label for=" plat">Rute* </label>
                            <select class="form-control" id="rute" name="id_rute" required>
                                <option selected="0">---Pilih Rute---</option>
                                <?php foreach ($rute as $ct) : ?>
                                    <option value="<?php echo $ct->id_rute; ?>"> <?php echo $ct->rute; ?></option>
                                <?php endforeach; ?>
                            </select>
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
                            <input type="text" class="form-control" id="kelas" placeholder="" name="kelas" autocomplete="off">
                        </div>

                        <div class=" col-sm-10">
                            <label for=" plat">Jam Keberangkatan</label>
                            <input type="text" class="form-control" id="jam" placeholder="" name="jam" autocomplete="off" readonly>
                        </div>

                        <div class="col-sm-10">
                            <label for=" plat">Jumlah</label>
                            <input type="number" min="1" max="3" class="form-control" id="jumlah" placeholder="" name="jumlah" required autocomplete="off">
                        </div>

                        <div class="col-sm-10">
                            <label for=" plat">Harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="text" class="form-control" id="harga" value="" name="harga" autocomplete="off" readonly>
                            </div>
                        </div>

                        <div class="col-sm-10">
                            <label for=" plat">Harga Total</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="text" class="form-control" id="hargatot" value="" name="harga_total" autocomplete="off" readonly>
                            </div>
                        </div>

                        <div class="col-sm-10">

                            <input type="hidden" class="form-control" id="" value="<?php echo date("Y-m-d"); ?>" name="tgl_pesan" autocomplete="off">
                        </div>

                        <div class="col-sm-10">
                            <label for=" plat">Tanggal Berangkat*</label>
                            <input type="date" class="form-control" id="" name="tgl_berangkat" min="<?php echo date("Y-m-d", strtotime("+1days")); ?>" required>
                        </div>

                        <div class="col-sm-10">
                            <label for=" alamat">Alamat Jemput*</label>
                            <textarea class="form-control" id="alamat" placeholder="Masukan alamat jemput" name="alamat_jemput" required></textarea>
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control-input" id="alamat" name="status_bayar" value="Belum Lunas"> </input>

                            <div class="help-block with-errors"></div>
                        </div>
                        <br>


                        <br>


                        <div class="col-sm-10">

                            <button type="submit" class="btn btn-success">Pesan</button>
                            <button type="reset" class="btn btn-danger">Kosongkan</button>


                        </div>

                        </form>

                    </div>
                </div>
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