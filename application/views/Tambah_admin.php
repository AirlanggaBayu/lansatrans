 <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="<?php echo base_url('admin/admin/tambah_data'); ?>" method="post">
                    <h6>Nama Admin</h6>
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama Admin Baru" name="nama">
                    <h6 class="mt-2">Username</h6>
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username" name="username">
                    <h6 class="mt-2">Password</h6>
                    <input type="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Password Disini" name="password">
                </div>
                <div class="card-footer ml-auto">
                    <input type="submit" value="Tambah" class="btn btn-primary">
                    </form>
                </div>
                </div>
              </div>

            </div>
    </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->