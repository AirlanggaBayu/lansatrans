<section class="isi container" style="margin-top: 50px;">
        <div class="col-sm p-5">
      </div>
        <h2 class="text-center mb-3" id="judul">KELAS EKONOMI</h2>

        <div class="row mb-2">
        <?php foreach ($rute as $r) {?>
            <div class="col-4">
                
                    
                
                <div class="card">
                    <div class="card-header bg-primary text-white">
                      <center><?= $r->rute?></center>
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
                        <td>Biasa</td>
                        <td><?= $r->harga?></td>
                        <td>/kursi</td>
                      </tr>
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-success col-12">PESAN</button>
                  
            </div>
            <?php }?>
        </div>
    </section>