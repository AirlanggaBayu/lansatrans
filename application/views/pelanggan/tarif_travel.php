<section class="isi container" style="margin-top: 50px;">
        <div class="col-sm p-5">
        <form>
        <div class="form-group">
        <select class="form-control" id="kelas" name="kelas" required>
                    <option selected="0">---Pilih Kelas---</option>
                    <?php foreach ($rute as $r){ ?>
                        <option value="<?= $r->kelas?>"> <?= $r->kelas ?></option>
                    <?php } ?>
                </select>
        </div>
      </div>
        <h2 class="text-center mb-3" value="" id="judul"></h2>

        <div class="row mb-2">
            <div class="col-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                      <center>Surabaya</center>
                    </div>
                </div>
                <table class="table table-bordered" style="margin-bottom: -0.5px;" id="tabel">
                    <thead class="bg-primary text-white text-center">
                      <tr>
                        <th scope="col">Tarif</th>
                        <th colspan="2">Harga Tiket(Rp)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Promo</td>
                        <td>250.000</td>
                        <td>/kursi</td>
                      </tr>
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-success col-12">PESAN</button>
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript">
 
            $('#rute').change(function(){ 
                var kelas=$(this).val();
                $.ajax({
                    url : "<?php echo base_url('pelanggan/home/rute_travel_detail');?>",
                    method : "POST",
                    data : {kelas: kelas},
                    dataType : 'json',
                    success: function(data){
                         
                        console.log(data)
                        $('#judul').val(data[0].kelas);
 
                    },
                });
                return false;
            }); 
            
    </script>