
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $this->session->userdata("nama") ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> <b>SISPENMAS</b></a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">


        <!-- Jika menjadi Admin -->
        <?php
      
        if($this->session->userdata('username') == TRUE && $this->session->userdata('level') == "admin")
        {
      ?>
        <li>
          <a href="<?php echo base_url('sis_penmas/dashboard')?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('pengaduan')?>">
            <i class="fa fa-pencil"></i> <span>Pengaduan</span>
          </a>
        </li>


        <li>
          <a href="<?php echo base_url('tanggapan')?>">
            <i class="fa fa-book"></i> <span>Tanggapan</span>
          </a>
        </li>


        <li>
          <a href="<?php echo base_url('login/logout')?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>

      <?php }?>


      <!-- Jika menjadi petugas -->
      <?php
        
        if($this->session->userdata('username') == TRUE && $this->session->userdata('level') == "petugas")
        {
      ?>

      <li>
          <a href="<?php echo base_url('sis_penmas/dashboard')?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>

      <li>
          <a href="<?php echo base_url('tanggapan')?>">
            <i class="fa fa-pencil"></i> <span>Tanggapi Pengaduan</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('tanggapan')?>">
            <i class="fa fa-check"></i> <span>verifikasi Pengaduan</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('pengaduan')?>">
            <i class="fa fa-book"></i> <span>Lihat Pengaduan</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('login/logout')?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>

        <?php }?>

        <!-- Jika menjadi Masyakarat -->
      <?php
        
        if($this->session->userdata('username') == TRUE && $this->session->userdata('level') == NULL)
        {
      ?>

      <li>
          <a href="<?php echo base_url('sis_penmas/dashboard')?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>

      <li>
          <a href="<?php echo base_url('pengaduan')?>">
            <i class="fa fa-pencil"></i> <span>Data Pengaduan</span>
          </a>
        </li>


        <li>
          <a href="<?php echo base_url('login/logout')?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>

        <?php }?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>