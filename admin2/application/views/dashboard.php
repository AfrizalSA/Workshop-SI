<?php $this->load->view($header)?>
<?php $this->load->view($sidebar)?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: auto;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $nama_menu;?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= $nama_menu;?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <!-- /.col -->
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        
        
        <!-- /.col -->
      </div>
      <!-- /.row --><div class="box">
            <div class="box-header">
              <h3 class="box-title">LAPORAN</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6">
                    
                  </div>
              <div class="col-sm-6">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NO</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">TRANSAKSI</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">TANGGAL LAPORAN</th>
 <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">PEMBELI</th>
 <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">TANGGAL PEMBELI</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">JUMLAH BARANG</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">TOTAL HARGA</th>


</tr>
                </thead>

                <tbody>  
<?php $no=1; foreach ($data->result() as $row) :?>
        <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $row->KODE_LAPORAN;?></td>
          <td><?php echo $row->TGL_LAPORAN;?></td>
          <td><?php echo $row->NAMA;?></td>
          <td><?php echo $row->TGL_TRANSAKSI;?></td>
          <td><?php echo $row->total_barang;?></td>
          <td><?php echo $row->TOTAL_HARGA;?></td>

       </tr>
         <?php endforeach; ?>
                 </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
            <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
        </div>
    </div>
          
        </div>
            </div>
            <!-- /.box-body -->
          </div>
		  
    </section>
	
    <!-- /.content -->
  </div>
<?php $this->load->view($footer)?>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <!--/.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->

<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<div class="jvectormap-label"></div>
<script>
$(function () {
   // $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body></html>