   <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Mobil</h1>
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

                            <input type="hidden" class="form-control" id="id_mobil" placeholder="Masukkan nama..." name="id_mobil" >
                        </div>
                        <div class="col-sm-10">
                            <label for="merk">Merk Mobil</label>
                            <input type="text" class="form-control" id="merk" placeholder="Masukkan merk..." name="merk" autocomplete="off">
                        </div>
                        <div class="col-sm-10">
                            <label for="merk">Warna Mobil</label>
                            <input type="text" class="form-control" id="warna" placeholder="Masukkan warna..." name="warna" autocomplete="off" >
                        </div>

                        <div class="col-sm-10">
                            <label for=" plat">Plat Nomor Mobil</label>
                            <input type="text" class="form-control" id="plat" placeholder="Masukan plat.." name="plat" autocomplete="off">
                        </div>
                        <div class="col-sm-10">
                            <label for=" telepon">kapasitas mobil</label>
                            <input type="text" onkeypress="return hanyaAngka(event)" max="2" class="form-control" id="kapasitas" placeholder="Masukkan hanya angka... " name="kapasitas">
                        </div>
                        <br>

                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="foto">Pilih gambar</label>
                            </div>
                        </div>

                        <br>


                        <div class="col-sm-10">
                        
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="<?= base_url('admin/mobil/index') ?>" class="btn btn-danger ">Back</a>
                        
                        </div>

                        <script>
                            function hanyaAngka(evt) {
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if (charCode > 31 && (charCode < 48 || charCode > 57))

                                    return false;
                                return true;
                            }
                        </script>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>