 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
    <?php 
    $no = 0;
    foreach($rute as $r){ $no++?>
    <div class="card shadow mb-4">
                <div class="card-body">
                <form action="<?php echo base_url('admin/rute/edit_data/'.$r->id_rute); ?>" method="post">
                    <input type="text" hidden readonly value="<?=$r->id_rute ?>" name="id_rute" class="form-control">
                        <h6>Nama Rute</h6>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" 
                        aria-describedby="emailHelp" placeholder="Masukkan Rute disini" name="rute" value="<?=$r->rute?>">
                        <h6 class="mt-2">Waktu</h6>
                        <input type="time" class="form-control form-control-user" id="exampleInputEmail" 
                        aria-describedby="emailHelp" placeholder="--:--" name="jam" value="<?=$r->jam?>">
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
<!-- Dikerjakan oleh Dodhy -->
<!-- Diedit oleh : ,pada tanggal -->