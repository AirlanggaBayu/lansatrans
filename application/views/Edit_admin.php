 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
    <?php 
    $no = 0;
    foreach($admin as $a){ $no++?>
    <div class="card shadow mb-4">
                <div class="card-body">
                <form action="<?php echo base_url('admin/admin/edit_data/'.$a->id_admin); ?>" method="post">
                    <input type="text" readonly value="<?=$a->id_admin ?>" name="id_admin" class="form-control">
                        <h6>Nama Admin</h6>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" 
                        aria-describedby="emailHelp" placeholder="Masukkan Nama admin disini" name="nama" value="<?=$a->nama?>">
                </div>
                    <div class="card-footer ml-auto">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
                </div>
    </div>
    <?php }?>
            </div>
    </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->