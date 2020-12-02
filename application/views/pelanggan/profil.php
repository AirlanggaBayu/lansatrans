<section class="isi container" style="margin-top: 100px;">
        <?= form_open_multipart('pelanggan/profil')?>
            <div class="form-group">
                <input type="text" class="form-control-input" value="<?= $pelanggan['nama_pelanggan']?>" id="lname" name="lname" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control-input" value="<?= $pelanggan['telp']?>" id="lphone" name="lphone" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control-submit-button">SUBMIT</button>
            </div>
        </form>

    </section>


