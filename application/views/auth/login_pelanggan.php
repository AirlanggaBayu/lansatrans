<!-- Contact -->
<div id="contact" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
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
                    <div class="section-title"></div>
                    <h2>LANSATRANS TRAVEL</h2>
                    <p>Lansa Trans merupakan jasa travel executive yang melayani rute
                        Jember-Malang, Jember-Surabaya, dan Jember-Denpasar</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address"><i class="fas fa-map-marker-alt"></i>Perum. Muktisari
                            Blok G Nomer 2 Jember , Jawa Timur
                        </li>
                        <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 126</a></li>
                        <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 128</a></li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">lansatrans.com</a></li>
                    </ul>
                    <h3>IKUTI MEDIA SOSIAL LANSATRANS</h3>

                    <span class="fa-stack">
                        <a href="#your-link">
                            <span class="hexagon"></span>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <span class="hexagon"></span>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <span class="hexagon"></span>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">

                <!-- Contact Form -->
                <form class="user" method="post" action="<?= base_url('auth_pelanggan'); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-input" id="pusername" name="pusername" placeholder="Enter username" value="<?= set_value('pusername'); ?>">
                        <?= form_error('pusername', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-input" id="ppassword" name="ppassword" placeholder="Password">
                        <?= form_error('ppassword', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-input btn-block">
                        Login
                    </button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="<?= base_url('auth_pelanggan/registration'); ?>">Create an Account!</a>
                </div>
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end of contact -->