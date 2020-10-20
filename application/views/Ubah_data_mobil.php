<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Data Mobil</h1>
                            <?php if ($this->session->flashdata('flash')) : ?>
                                <div class="row mt-3">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">Data
                                        berhasil <?= $this->session->flashdata('flash'); ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php
                        $no = 0;
                        foreach ($mobil as $u) {
                            $no++ ?>
                            <?php echo form_open_multipart('admin/mobil/ubah_mobil/' . $u->id_mobil); ?>
                            <div class="col-sm-10">

                                <input type="hidden" class="form-control" id="id_mobil" placeholder="Masukkan nama..." name="id_mobil" value="<?= $u->id_mobil ?>">
                            </div>
                            <div class="col-sm-10">
                                <label for=" hari">Nama</label>
                                <input type="text" class="form-control" id="merk" placeholder="Masukkan nama..." name="merk" value="<?= $u->merk ?>">
                            </div>

                            <div class=" col-sm-10">
                                <label for=" alamat">Alamat</label>
                                <input type="text" class="form-control" id="warna" placeholder="Masukan alamat.." name="warna" value="<?= $u->warna ?>"></input>
                            </div>
                            

                            <div class=" col-sm-10">
                                <label for=" alamat">Alamat</label>
                                <input type="text" class="form-control" id="plat" placeholder="Masukan alamat.." name="plat" value="<?= $u->plat ?>"></input>
                            </div>
                            <div class=" col-sm-10">
                                <label for=" telepon">Telepon</label>
                                <input type="text" onkeypress="return hanyaAngka(event)" max="12" class="form-control" id="kapasitas" placeholder="Masukkan hanya angka... "
                                 name="kapasitas" value="<?= $u->kapasitas ?>">
                            </div>
                            <br>

                            <div class="form-group row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-11">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/img/') . $u->foto_kendaraan; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="foto">Pilih gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>


                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success">Edit</button>
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
            <?php } ?>
            </div>
        </div>
    </div>



</div>