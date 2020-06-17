<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
			<!-- 	<img src="<?php echo base_url('assets/upload/images/foto_profil/'.$this->session->userdata('photo')); ?>" class="img-circle"> -->
                <img alt="logo" src="<?= base_url() ?>/assets/upload/images/foto_profil/logo.png" />
			</div>
      <div class="pull-left info">
        <p>Selamat datang</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
<!--       <li class="active"><a href="<?=base_url('member/user')?>"><i class="fa fa-link"></i> <span>User</span></a></li> -->
      <li class="treeview">
        <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> 
          <span>Menu Log Aktifitas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
        <li><a href="<?=base_url('member/user/log')?>">Log Aktifitas</a></li>
        <li><a href="<?=base_url('member/user')?>">User</a></li>
        <!-- <li><a href="<?=base_url('member/waktu')?>">Waktu</a></li>
        <li><a href="<?= base_url('member/aplikasi/') ?>">Aplikasi</a></li> -->
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> 
          <span>Menu Gagal Login</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
        <li><a href="<?=base_url('user/log')?>">User</a></li>
        <!-- <li><a href="<?=base_url('member/waktu')?>">Waktu</a></li>
        <li><a href="<?= base_url('member/aplikasi/') ?>">Aplikasi</a></li> -->
       </ul>
       
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
