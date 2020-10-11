<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Sopir</h1>
                        </div>

                        <?php echo form_open_multipart('sopir/index'); ?>
                        <div class="col-sm-10">

                            <input type="hidden" class="form-control" id="id_supir" placeholder="Masukkan nama..." name="id_supir">
                        </div>
                        <div class="col-sm-10">
                            <label for=" hari">Nama</label>
                            <input type="text" class="form-control" id="nama_supir" placeholder="Masukkan nama..." name="hari">
                        </div>

                        <div class="col-sm-10">
                            <label for=" telepon">Telepon</label>
                            <input type="text" onkeypress="return hanyaAngka(event)" max="12" class="form-control" id="telepon" placeholder="Masukkan hanya angka... " name="telepon">
                        </div>

                        <div class="col-sm-10">
                            <label for=" alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" placeholder="Masukan alamat.." name="alamat"></textarea>
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