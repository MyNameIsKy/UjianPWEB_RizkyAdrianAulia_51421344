<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Selamat Datang <?php echo $this->session->userdata("nama") ?> 
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

            <?php
              $query = $this->m_pengaduan->hitung_user();
              foreach($query->result() as $row) :
            ?>

              <h3><?php echo $row->jum?></h3>

            <?php endforeach; ?>  

              <p>Jumlah User</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a class="small-box-footer"><i class="fa fa-user-o"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              
            <?php
              $query = $this->m_pengaduan->hitung_pengaduan();
              foreach($query->result() as $row) :
            ?>

              <h3><?php echo $row->peng?></h3>

            <?php endforeach; ?>  

              <p>Jumlah Pengaduan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a class="small-box-footer"><i class="fa fa-bar-chart"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php
              $query = $this->m_pengaduan->hitung_tanggapan();
              foreach($query->result() as $row) :
            ?>

              <h3><?php echo $row->tang?></h3>

            <?php endforeach; ?>  

              <p>Jumlah Penanggapan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a class="small-box-footer"><i class="fa fa-bar-chart"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Logout</h3>

              <p>Keluar</p>
            </div>
            <div class="icon">
              <i class="ion ion-power"></i>
            </div>
            <a href="<?php echo base_url('login/logout')?>" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->  
    <!-- <img src="<?php echo base_url() ?>assets/dist/img/people.jpg" width="900px" height="500px"> -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</body>
</html>
