<div class="content-wrapper">
    <section class="content"> 
        <?php foreach($pengaduan as $pgn ) {  ?>

            <form action="<?php echo base_url().'pengaduan/update'; ?>" method="post"> 
            
                <div class="form-group">
                    <label>Tanggal Pengaduan</label>
                    <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $pgn->id_pengaduan ?>">
                    <input type="date" name="tgl_pengaduan" class="form-control" value="<?php echo $pgn->tgl_pengaduan ?>">
                </div>

                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" value="<?php echo $pgn->nik ?>">
                </div>

                <div class="form-group">
                    <label>Isi Laporan</label>
                    <input type="text" name="isi_laporan" class="form-control" value="<?php echo $pgn->isi_laporan ?>">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" value="<?php echo $pgn->status ?>">
                        <option>Proses</option>
                        <option>Selesai</option>
                    </select>
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php } ?>
    </section>
</div>