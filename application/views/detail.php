<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL Pengaduan</strong></h4>

        <table class="table">
            <tr>
                <th>Tanggal Pengaduan</th>
                <td><?php echo $detail->tgl_pengaduan ?></td>
            </tr>
            <tr>
                <th>NIK</th>
                <td><?php echo $detail->nik ?></td>
            </tr>
            <tr>
                <th>Isi Laporan</th>
                <td><?php echo $detail->isi_laporan ?></td>
            </tr>

            <tr>
                <th>Status</th>
                <td><?php echo $detail->status ?></td>
            </tr>

            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" widt="90" height="110">
                </td>
                <td></td>
            </tr>

        </table>
        <a href="<?php echo base_url('pengaduan/index'); ?>" class="btn btn-primary">Kembali</a>

    </section>
</div>