<div class="content-wrapper">
<section class="content-header">
      <h1>
        SIS-PENMAS
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('sis_penmas/dashboard') ?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Pengaduan</li>
      </ol>
    </section>

    <section class="content">

    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tulis Tanggapan </button>

       
      <table class="table">
        <tr>
          <th>No.</th>
          <th>Nama Pengadu</th>
          <th>Isi Laporan</th>
          <th>Tanggapan</th>
          <th>Status</th>
          <th>Foto</th>
          <th colspan="2">Aksi</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($tanggapan as $tgp) : 
        ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $tgp->nama ?></td>
          <td><?php echo $tgp->isi_laporan ?></td>
          <td><?php echo $tgp->tanggapan ?></td>
          <td><?php echo $tgp->status ?></td>
          <td><img src="<?= base_url(); ?>assets/foto/<?php echo $tgp->foto ?>" width="200" height="100"></td>


          <td><?php echo anchor('tanggapan/edit/'.$tgp->id_pengaduan,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
          <!-- <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i></button><td> -->
        </tr>

        <?php endforeach; ?>
      </table>
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tanggapan Masyarakat</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        
        <?php echo form_open_multipart('tanggapan/tambah_aksi'); ?>

        <div class="form-group">
            <label>ID Pengaduan</label>
            <input type="text" name="id_pengaduan" class="form-control">
          </div>

        <div class="form-group">
            <label>Tanggal Tanggapan</label>
            <input type="date" name="tgl_tanggapan" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggapan</label>
            <input type="text" name="tanggapan" class="form-control">
          </div>

          <!-- <div class="form-group">
            <label>ID Petugas</label>
            <input type="text" name="id_petugas" class="form-control">
          </div> -->


          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>


</div>