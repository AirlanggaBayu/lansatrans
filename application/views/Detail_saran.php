<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <?php foreach ($saran as $b) : ?>
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">KRITIK DAN SARAN</h1>
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

                            <?php echo form_open_multipart('Admin/Pemesanan/ubah_bayar/' . $b->id_saran); ?>
                            <div class="col-sm-10">

                                <input type="hidden" class="form-control" id="id_pemesanan" value="<?= $b->id_saran ?>" name="id_pemesanan">
                            </div>
                            <div class="col-sm-10">
                                <label for=" plat">Nama Pengirim</label>
                                <input type="text" class="form-control" id="plat" placeholder="Masukan plat.." value="<?= $b->pengirim ?>" readonly>
                            </div>

                            <div class="col-sm-10">
                                <label for="merk">Kritik dan Saran</label>
                                <input type="text" class="form-control" id="merk" placeholder="Masukkan merk..." value="<?= $b->saran ?>" readonly>
                            </div>

                            <br>


                            <br>


                            <div class="col-sm-10">


                                <a href="<?= base_url('Admin/admin/saran/') ?>" class="btn btn-sm btn-danger ml-8">Kembali</a>


                            </div>

                            </form>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>