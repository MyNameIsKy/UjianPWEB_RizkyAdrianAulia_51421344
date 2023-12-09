<div class="content-wrapper">
<section class="content-header">
      <h1>
        SIS-PENMAS
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('sis_penmas/dashboard')?>"><i class="fa fa-dashboard"></i> Home </a></li>
        <li class="active">Pengaduan</li>
      </ol>
    </section>

    <section class="content">
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tulis Pengaduan </button>

  

    <!-- <div class="dropdown inline">
      <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <i class="fa fa-download"></i>Export
        <span class="caret"></span>
      </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="<?php echo base_url('pengaduan/excel') ?>">EXCEL</a></li>
        </ul>
    </div> -->
       

      <table class="table">
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Tanggal Pengaduan</th>
          <th>Isi Laporan</th>
          <th>Foto</th>
          <th colspan="2">Aksi</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($pengaduan as $pgn) : 
        ?>

        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $pgn->nama ?></td>
          <td><?php echo $pgn->tgl_pengaduan ?></td>
          <td><?php echo $pgn->isi_laporan ?></td>
          <td><img src="<?= base_url(); ?>assets/foto/<?php echo $pgn->foto ?>" width="200" height="100"></td>
          <td><?php echo anchor('pengaduan/detail/'.$pgn->id_pengaduan,'<div class="btn btn-success btn-sm"><i class = "fa fa-search-plus"></i></div>') ?></td>
          <td onclick="javascript: return confirm('Anda Yakin Hapus?') "><?php echo anchor('pengaduan/hapus/'.$pgn->id_pengaduan, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          <td><?php echo anchor('pengaduan/edit/'.$pgn->id_pengaduan,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>
      </table>
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM Tulis Pengaduan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        
        <?php echo form_open_multipart('pengaduan/tambah_aksi'); ?>

        <div class="form-group">
            <label>Tanggal Pengaduan</label>
            <input type="date" name="tgl_pengaduan" class="form-control">
          </div>

          <!-- <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control">
          </div> -->

          <div class="form-group">
            <label>Isi Laporan</label>
            <input type="text" name="isi_laporan" class="form-control">
          </div>

          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>

          <!-- <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
              <option>Proses</option>
            </select>
          </div> -->

          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>


</div>