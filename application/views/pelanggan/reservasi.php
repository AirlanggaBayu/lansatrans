<section class="isi container" style="margin-top: 100px;">
        <h2 class="text-center mb-3">FORMULIR PEMESANAN</h2>
            <div class="row">
                <div class="col-lg-8">
                    <form id="callMeForm" data-toggle="validator" data-focus="false">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control-input" id="lname" name="lname" required>
                                <label class="label-control" for="lname">Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control-input" id="lemail" name="lemail" required>
                                <label class="label-control" for="lemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lphone" name="lphone" required>
                            <label class="label-control" for="lphone">Phone</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control-select" id="lselect" required>
                                <option class="select-option" value="" disabled selected>Kelas Travel</option>
                                <option class="select-option" value="Off The Ground">Off The Ground</option>
                                <option class="select-option" value="Accelerated Growth">Accelerated Growth</option>
                                <option class="select-option" value="Market Domination">Market Domination</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <select class="form-control-select" id="lselect" required>
                                    <option class="select-option" value="" disabled selected>Dari Kota</option>
                                    <option class="select-option" value="Off The Ground">Off The Ground</option>
                                    <option class="select-option" value="Accelerated Growth">Accelerated Growth</option>
                                    <option class="select-option" value="Market Domination">Market Domination</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <select class="form-control-select" id="lselect" required>
                                    <option class="select-option" value="" disabled selected>Tujuan Kota</option>
                                    <option class="select-option" value="Off The Ground">Off The Ground</option>
                                    <option class="select-option" value="Accelerated Growth">Accelerated Growth</option>
                                    <option class="select-option" value="Market Domination">Market Domination</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="date" class="form-control-input" id="ldate" name="ldate" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <select class="form-control-select" id="lselect" required>
                                    <option class="select-option" value="" disabled selected>Pilih Tipe Tiket</option>
                                    <option class="select-option" value="Off The Ground">Off The Ground</option>
                                    <option class="select-option" value="Accelerated Growth">Accelerated Growth</option>
                                    <option class="select-option" value="Market Domination">Market Domination</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="textarea" class="form-control-input" id="laddress" name="laddress" required>
                            <label class="label-control" for="laddress">Alamat</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">CALL ME</button>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of call me form -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <img src="<?= base_url('assets/pelanggan')?>/images/travel.png" class="rounded float-right rotate90" alt="...">
                </div>
            </div> <!-- end of row -->

    </section>