<?php $this->load->view($header)?>
<?php $this->load->view($sidebar)?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 563px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> <?= $nama_menu;?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <?= $nama_menu;?></li>
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

        <div id="page-content">
                      <div class="col-md-2 col-md-offset-10"></div>
                      <!-- Modal -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Tambah  <?= $nama_menu;?></h4>
      </div>
      <style type="text/css">
        .modal-body input[type="text || email || password"]{
          color: black;
        }

        .modal-body{
          padding-left: 15px;
    padding-right: 15px;
    padding-top: 15px;
    padding-bottom: 0px;
        }
      </style>
      <div class="modal-body">
  <script type="text/javascript">


</script>
        <form id="changeForm"  style="display: block;">
                <input type="hidden" name="act" id="act">
                <input type="hidden" name="idbarang" id="idbarang">
                <div class="form-group row col-lg-5">
                <label>KODE BARANG: </label>
                </div>
                <div class="form-group row col-sm-5">
                <input type="text" name="KODEBARANG" id="KODEBARANG" tabindex="1" class="form-control" placeholder="KODEBARANG*"  required="">
                </div>
                <div class="form-group row col-lg-5">
                <label>NAMA BARANG: </label>
                </div>
                <div class="form-group row col-sm-5">
                <input type="text" name="NAMABARANG" id="NAMABARANG" tabindex="1" class="form-control" placeholder="NAMA*"  required="">
                </div>
                <div class="form-group row col-lg-5">
                <label>HARGA BELI: </label>
                </div>
                <div class="form-group row col-sm-5">
                <input type="number" name="HARGABELI" id="HARGABELI" tabindex="1" class="form-control" placeholder="HARGA"  required="">
                </div>
                <div class="form-group row col-lg-5">
                <label>HARGA JUAL</label>
                </div>
                <div class="form-group row col-sm-5">
                <input type="number" name="HARGAJUAL" id="HARGAJUAL" tabindex="1" class="form-control" placeholder="HARGA"  required="">
                </div>
                <div class="form-group row col-lg-5">
                <label>JUMLAH : </label>
                </div>
                <div class="form-group row col-sm-5">
                <input type="number" name="JUMLAH" id="JUMLAH" tabindex="1" class="form-control" placeholder="JUMLAH"  required="">
                </div>

                <!-- <div class="row">
                <div class="col-lg-12" id="btn-register-holder">
                <button  onclick="save();" class="form-control btn  btn-primary btn-block btn-flat" >SUBMIT CHANGES</button>
               <button  onclick="cancel();" class="form-control btn-block btn-flat btn btn-secondary">CLOSE</button>
                </div>
                </div>  -->
         </form>           
      </div>
      <div class="modal-footer">
        <button  onclick="save();" class="form-control btn  btn-primary btn-block btn-flat" >SUBMIT CHANGES</button>
               <button  onclick="cancel();" class="form-control btn-block btn-flat btn btn-secondary">CLOSE</button>
      </div>  
    </div>
    </div>
</div>
</div>
        <br>
<!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title"> <?= $nama_menu;?> LIST</h3>
              <button class="btn btn-primary btn-block btn-flat" id="btn-add-member" onclick="buka();">TAMBAH  <?= $nama_menu;?></button>
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Kode Barang</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama Barang</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Harga Beli</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Harga Jual</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Jumlah</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Tanggal Buat</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                        </tr>
                </thead>
                 <tbody>  
<?php $i=1; foreach ($data->result() as $row) :?>
        <tr>
          <td><?php echo $i++;?></td>
          <td><?php echo $row->kodebarang;?></td>
          <td><?php echo $row->namabarang;?></td>
          <td><?php echo $row->hargasatuan;?></td>
          <td><?php echo $row->hargajual;?></td>
          <td><?php echo $row->jumlah;?></td>
          <td><?php echo $row->created_at;?></td>
          <td><BUTTON onclick="buka(<?php echo $row->idbarang;?>)">Edit</BUTTON> / <BUTTON onclick="hapus(<?php echo $row->idbarang;?>)">Hapus</BUTTON> </td>
      
        </tr>
        
        <?php endforeach;?>
                 </tbody>
              </table>
            </div>
          </div>

          <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
        </div>
    </div>
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
<!-- jvectormap  -->
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard2.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<div class="jvectormap-label"></div></body>
<script>
$(document).ready(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    });
  });
function save() {
  // $('#form_vendor').submit(function(e){
  //   e.preventDefault();
      $.ajax({
      type: 'GET',
      url: 'barang/save',
       data: $("#changeForm").serialize(),
//{KODEBARANG:$("#KODEBARANG").val(),
// NAMABARANG:$("#NAMABARANG").val(),
// HARGABELI:$("#HARGABELI").val(),
// HARGAJUAL:$("#HARGAJUAL").val(),
// JUMLAH:$("#JUMLAH").val(),},
                     processData:false,
                     contentType:false,
                     cache:false,
      // data: $(this).serialize(),

      beforeSend: function(){
        $('#save').prop('innerHTML', 'Loading...');
                $('#save').prop('disabled', true);  
      },
      complete: function() {
        $('#save').prop('innerHTML', 'Save');
                $('#save').prop('disabled', false);
      },
      success: function(data) {
        console.log(data);
        datas=data.split('||');
        if(datas[0]=='1') {
          alert(datas[1]);
        }else{
          alert(datas[1]);
        }
        location.reload();
          //loadTbl();
      }
    });

  //   return false;
  // });
}
function hapus(data) {
  if( confirm("Apakah data ingin dihapus ?") ){
    $.ajax({
                type: 'GET',
                url: 'barang/save',
                data: { idbarang : data },
                success: function(data) {
                    console.log(data);
                    datas=data.split('||');
                    if(datas[0]=='1') {
                      alert(datas[1]);
                    }else{
                      alert(datas[1]);
                    }
                 location.reload();
                }
            });
  }
}
function cancel() {
$("#KODEBARANG").val('');
$("#NAMABARANG").val('');
$("#HARGABELI").val('');
$("#HARGAJUAL").val('');
$("#JUMLAH").val('');
$("#act").val('add');
$("#idbarang").val('');

$("#addModal").modal('hide');
}
function buka(id) {
  if(id){

$.post('barang/dataedit', {idne : id}, function(hasil) {

console.log(hasil[0].idbarang);
$("#idbarang").val(hasil[0].idbarang);
$("#act").val('edit');
$("#KODEBARANG").val(hasil[0].kodebarang);
$("#NAMABARANG").val(hasil[0].namabarang);
$("#HARGABELI").val(hasil[0].hargasatuan);
$("#HARGAJUAL").val(hasil[0].hargajual);
$("#JUMLAH").val(hasil[0].jumlah);
$("#addModal").modal('show');
}, 'json');


  }else{
$("#KODEBARANG").val('');
$("#NAMABARANG").val('');
$("#HARGABELI").val('');
$("#HARGAJUAL").val('');
$("#JUMLAH").val('');
$("#act").val('add');
$("#idbarang").val('');
$("#addModal").modal('show');
  }

  // body...
}
</script></html>