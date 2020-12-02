<section class="isi container" style="margin-top: 100px;">
        <div class="text-center">
            <img src="<?= base_url('assets/pelanggan/')?>images/team-1.png" class="rounded" style="max-height: 200px; max-width: 200px; margin-bottom: 30px;">
        </div>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control-input" id="lname" name="lname" required>
                <label class="label-control" for="lname">Name</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control-input" id="lphone" name="lphone" required>
                <label class="label-control" for="lphone">Phone</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control-input" id="lpass" name="lpass" required>
                <label class="label-control" for="lpass">Password</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control-input" id="lpass2" name="lpass2" required>
                <label class="label-control" for="lpass2">Ulangi Password</label>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group custom-file mb-2">
                <input type="file" class="custom-file-input" id="customFile" name="image">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control-submit-button">SUBMIT</button>
            </div>
        </form>

    </section>

    <script>
        $('.custom-file-input').on('change', function(){
            let filename = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(filename);
        }); 
    </script>
