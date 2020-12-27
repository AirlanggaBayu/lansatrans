<section class="isi container" style="margin-top: 100px;">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row ml-4 mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">Pemesanan anda berhasil, silahkan lakukan <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="col-md-6">
            </div>
        </div>
    <?php endif; ?>
    <h2 class="text-center mb-3">FORMULIR PEMESANAN</h2>
    <h6 style="color : #828282;">*Jika pemesanan lebih dari 3 hubungi admin</h6>
    <div class="row">
        <div class="col-lg-8">
            <?php echo form_open_multipart('Pelanggan/Reservasi/tambah_data'); ?>
            <?php $pelanggan; ?>
            <div class="form-group">
                <input type="hidden" class="form-control-input" id="id_pemesanan" name="id_pemesanan" required>
                <label class="label-control" for="lname">Name</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control-input" value="<?= $pelanggan['username_pelanggan']; ?>" name="username_pelanggan" readonly>

                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control-input" id="id_pelanggan" value="<?= $pelanggan['id_pelanggan']; ?>" name="id_pelanggan" required>
                <label class="label-control" for="lname">Name</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control-input" value="<?php echo $kodee; ?>" id="kode_pesan" name="kode_pesan" readonly>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <input type="text" class="form-control-input" id="nama_pelanggan" name="nama_pelanggan" required>
                <label class="label-control" for="nama_pelanggan">Nama*</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control-input" id="no_telp" name="no_telp" required>
                <label class="label-control" for="nama_pelanggan">No. Telepon*</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <select class="form-control" id="rute" name="id_rute" required>
                    <option selected="0">---Pilih Rute---</option>
                    <?php foreach ($rute as $ct) : ?>
                        <option value="<?php echo $ct->id_rute; ?>"> <?php echo $ct->rute; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="help-block with-errors"></div>
            </div>
            <div class="row">
                <div class="form-group col-lg-4">
                    <input type="text" class="form-control-input" id="kelas" name="kelas" readonly placeholder="Kelas">
                    <div class="help-block with-errors"></div>

                </div>
                <div class="form-group col-lg-4">
                    <input type="text" class="form-control-input" id="harga" name="harga" readonly placeholder="Harga">
                    <div class="help-block with-errors"></div>

                </div>
                <div class="form-group col-lg-4">
                    <input type="text" class="form-control-input" id="jam" name="jam" readonly>
                    <div class="help-block with-errors"></div>

                </div>
            </div>
            <div class="form-group">
                <input type="number" class="form-control-input" id="jumlah" name="jumlah" placeholder="Jumlah" required />
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="hidden" value="" class="form-control-input" id="mobil" name="id_mobil" required>

                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="hidden" value="-" class="form-control-input" id="mobil_pengganti" name="mobil_pengganti" required>

                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <input type="text" class="form-control-input" readonly id="hargatot" name="harga_total" required placeholder="Harga Total">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="hidden" value="<?php echo date("Y-m-d"); ?>" class="form-control-input" readonly id="tgl_pesan" name="tgl_pesan" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="date" class="form-control-input" min="<?php echo date("Y-m-d", strtotime("+1days")); ?>" id="tgl_berangkat" name="tgl_berangkat" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <textarea class="form-control-input" id="alamat" name="alamat_jemput" required>  </textarea>
                <label class="label-control" for="harga_total">Alamat Jemput</label>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <input type="hidden" value="<?php echo date("Y-m-d"); ?>" class="form-control-input" readonly id="tgl_bayar" name="tgl_bayar" required>
                <div class="help-block with-errors"></div>
            </div>


            <div class="form-group">
                <button type="submit" class="form-control-submit-button">Pesan</button>
            </div>
            <div class="form-message">
                <div id="lmsgSubmit" class="h3 text-center hidden"></div>
            </div>
            </form>
            <!-- end of call me form -->
        </div> <!-- end of col -->
        <div class="col-lg-4">
            <img src="<?= base_url('assets/pelanggan') ?>/images/travel.png" class="rounded float-right rotate90" alt="...">
        </div>
    </div> <!-- end of row -->
    <script type="text/javascript">
        // $.document.ready(

        $("#jumlah").attr('disabled', 'true');
        $('#rute').change(function() {

            $("#harga").empty();

            var rute = $(this).val();
            var url = "<?php echo base_url('pelanggan/reservasi/prosesRute') ?>";

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
</section>