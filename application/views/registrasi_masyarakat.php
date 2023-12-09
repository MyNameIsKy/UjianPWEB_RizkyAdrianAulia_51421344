        
        <?php echo form_open_multipart('registrasi_masyarakat/tambah_aksi'); ?>

          <form>
            <div class="form-group">
              <label>NIK</label>
              <input type="text" name="nik" placeholder="NIK">
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" placeholder="Nama">
            </div>

            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" placeholder="Username">
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="text" name="password" placeholder="Password">
            </div>

            <div class="form-group">
              <label>No. Telepon</label>
              <input type="text" name="telp" placeholder="No. Telp">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>