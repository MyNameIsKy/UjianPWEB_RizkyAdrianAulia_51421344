<div class="content-wrapper">
    <section class="content"> 
        <?php foreach($pengaduan as $pgn ) {  ?>

            <form action="<?php echo base_url().'tanggapan/tambah_aksi'; ?>" method="post"> 
            
                <!-- <div class="form-group">
                    <label>Tanggal Pengaduan</label>
                    <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $tgp->id_tanggapan?>">
                    <input type="date" name="tgl_pengaduan" class="form-control" value="<?php echo $tgp->tgl_tanggapan ?>">
                </div>

                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" value="<?php echo $pgn->nik ?>">
                </div> -->
                

                <div class="form-group">
                    <label>Tanggapan</label>
                    <input type="text" name="tanggapan" class="form-control">
                </div> 
                

                <div class="form-group">
                    <label>Tanggal Tanggapan</label>
                    <input type="date" name="tgl_tanggapan" class="form-control">
                </div> 

                <div class="form-group">
                    <label></label>
                    <input type="hidden" name="id_pengaduan" class="form-control" value="<?php echo $pgn->id_pengaduan ?>">
                </div> 

                <!-- <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" value="<?php echo $tgp->status ?>">
                        <option>Proses</option>
                        <option>Selesai</option>
                    </select>
                </div> -->

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        <?php } ?>
    </section>
</div>