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

                        <?php echo form_open_multipart('admin/mobil/tambah_mobil'); ?>
                        <div class="col-sm-10">

                            <input type="hidden" class="form-control" id="id_pemesanan" placeholder="Masukkan nama..." name="id_pemesanan">
                        </div>

                        <div class="col-sm-10">
                            <label for="merk">Nama</label>
                            <input type="text" class="form-control" id="warna" placeholder="Masukkan nama..." name="rute" autocomplete="off">
                        </div>



                        <div class=" col-sm-10">
                            <label for=" plat">Kelas</label>
                            <input type="text" class="form-control" id="plat" placeholder="" name="jam" autocomplete="off">
                        </div>



                        <div class="col-sm-10">
                            <label for=" plat">Harga</label>
                            <input type="text" class="form-control" id="plat" value="" name="harga" autocomplete="off">
                        </div>

                        <div class="col-sm-10">
                            <label for=" plat">Tanggal Pesan</label>
                            <input type="date" class="form-control" id="plat" placeholder="Masukan plat.." name="tgl_pesan" autocomplete="off">
                        </div>

                        <div class="col-sm-10">
                            <label for=" plat">Tanggal Berangkat</label>
                            <input type="date" class="form-control" id="plat" placeholder="Masukan plat.." name="tgl_berangkat" autocomplete="off">
                        </div>

                        <div class="col-sm-10">
                            <label for=" alamat">Alamat Jemput</label>
                            <textarea class="form-control" id="alamat" placeholder="Masukan alamat.." name="alamat_jemput"></textarea>
                        </div>
                        <br>


                        <br>


                        <div class="col-sm-10">

                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="<?= base_url('admin/mobil/index') ?>" class="btn btn-danger ">Back</a>

                        </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#kode').on('input', function() {

                var kode = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('index.php/pos/get_barang') ?>",
                    dataType: "JSON",
                    data: {
                        kode: kode
                    },
                    cache: false,
                    success: function(data) {
                        $.each(data, function(kode, jam, harga) {
                            $('[name="jam"]').val(data.jam);
                            $('[name="harga"]').val(data.harga);


                        });

                    }
                });
                return false;
            });

        });
    </script>
</div>