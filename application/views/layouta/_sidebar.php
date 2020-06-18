<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
      <!--  <img src="<?php echo base_url('assets/upload/images/foto_profil/'.$this->session->userdata('photo')); ?>" class="img-circle"> -->
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
      <li class="header">Menu</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="<?= base_url('admin/user') ?>"><i class="fa fa-address-book-o"></i> <span>Tambah User</span></a></li>
      <li><a href="<?= base_url('admin/user/list') ?>"><i class="fa fa-eye"></i> <span>Daftar user</span></a></li>
      <li><a href="<?= base_url('admin/user/aplikasi') ?>"><i class="fa fa-desktop"></i> <span>Aplikasi</span></a></li>
      <li><a href="<?= base_url('admin/user/listapp') ?>"><i class="fa fa-eye"></i> <span>Daftar Aplikasi</span></a></li>
<<<<<<< HEAD
      <li><a href="<?= base_url('admin/user/kirimtoken') ?>"><i class="fa fa-paper-plane"></i> <span>Kirim Token Aplikasi</span></a></li>
=======
      <li><a href="<?= base_url('admin/user/kirimtoken') ?>"><i class="fa fa-paper-plane"></i> <span>KIRIM TOKEN KE USER</span></a></li>
>>>>>>> 621239a07995e371facd0f82175f55c621b3624e
      <li class="treeview">
        <a href="#"><i class="fa fa-tasks"></i> <span>Log Aktifitas</span>
              <span class="pull-right-container">            
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        <ul class="treeview-menu">
        <li><a a href="<?= base_url('admin/user/log') ?>">Log aktifitas</a></li>
          <li><a a href="<?= base_url('admin/user/lihatmintapassword') ?>">Permintaan password</a></li>
        
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
