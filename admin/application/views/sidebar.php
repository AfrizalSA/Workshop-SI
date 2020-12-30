 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url().$this->config->config['image_toko'];?>" class="img-circle" alt="User Image" width=100% height=100%>
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('logger');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('barang')?>">
            <i class="fa fa-gift"></i>
            <span>DAFTAR BARANG</span>
          </a>
        </li>
        <li class="">
          <a href="<?php echo base_url('transaksi')?>">
            <i class="fa fa-shopping-cart"></i>
            <span>TRANSAKSI</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('dashboard/logout');?>">
            <i class="fa fa-edit"></i> <span>LOGOUT</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>