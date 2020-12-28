<!-- Call Me -->
<div id="callMe" class="form-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <div class="section-title"></div>
                    <h2 class="white">DAPATKAN KEMUDAHAN PEMESANAN</h2>
                    <p class="white">Permudah Pemesanan Tiket Secara Online Tanpa Harus Repot Untuk Keluar Rumah,
                        Hanya Dengan
                        Klik Semua Jadi Mudah</p>
                    <ul class="list-unstyled li-space-lg white">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Pesan tiket tanpa keluar rumah</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Mudah dan cepat</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Aman dan selalu terpercaya</div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-lg-6">

                <!-- Call Me Form -->
                <form method="POST" action="<?= base_url('auth_pelanggan/registration') ?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-input" id="pnama" name="pnama" placeholder="Nama lengkap" autocomplete="off" value="<?= set_value('pnama'); ?>">
                        <?= form_error('pnama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-input" id="pphone" name="pphone" placeholder="Telepon" autocomplete="off" value="<?= set_value('pphone'); ?>">
                        <?= form_error('pphone', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-input" id="pusername" name="pusername" autocomplete="off" placeholder="Username" value="<?= set_value('pusername'); ?>">
                        <?= form_error('pusername', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-input" id="ppassword1" name="ppassword1" placeholder="Password">
                        <?= form_error('ppassword1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-input" id="ppassword2" name="ppassword2" placeholder="Ulangi Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">REGISTRASI</button>
                    </div>
                    <div class="form-message">
                        <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="<?= base_url('auth_pelanggan'); ?>">Sudah punya akun? Login!</a>
                </div>
                <!-- end of call me form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-1 -->
<!-- end of call me -->