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


      <!-- /.row --><div class="box">

            <div class="box-header">
              <h3 class="box-title">Transaksi List</h3>
              <button class="btn btn-primary btn-block btn-flat" id="btn-add-member" onclick="buka();">Tambah Transaksi</button>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NO</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">TANGGAL </th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NAMA PEMBELI</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">JUMLAH BARANG</th>
<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">TOTAL HARGA </th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                        </tr>
                </thead>
                 <tbody>  
<?php $no=1;foreach ($data->result() as $row) :?>
        <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $row->TGL_TRANSAKSI;?></td>
          <td><?php echo $row->NAMA;?></td>
          <td><?php echo $row->jumlah;?></td>
          <td><?php echo $row->TOTAL_HARGA;?></td>
          <td><BUTTON onclick="hapusan_darah(<?php echo $row->IDPESANAN;?>)">DETAIL</BUTTON> <!-- / <BUTTON onclick="edit(<?php echo $row->IDPESANAN;?>)">Edit</BUTTON> --> <!-- / <BUTTON onclick="hapus(<?php echo $row->IDPESANAN;?>)">Hapus</BUTTON> -->  </td>
      
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
		  <div id="mdl_hapusan_darah" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="mdl_hapusan_darah" aria-hidden="true">
  <input type="hidden" name="id_flight" id="id_flight">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
  <div class="modal-content">
  <div class="container-fluid">
   
      <div class="modal-header">
         <div class="row">
        <h5 class="modal-title"><center>Transaksi</center></h5>
       <!--  <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
    </div>
      <div class="modal-body">
         <div class="box-header">
              <h3 class="box-title">Transaksi List</h3>
            </div>
            <div class="box-body">
              <form role="form" class="form-horizontal" id="form_schedule" method="post">
                <div class="form-group row col-lg-4">
                <label>Nama Admin: </label>
                </div>
                <div class="form-group row col-sm-8">
                <input type="text" name="NAMA" id="NAMA" tabindex="1" class="form-control" placeholder="NAMA*"  required="">
                </div>
             <div class="col-lg-12">
              <div class="row tombol-add">
                <div class="col-sm-12">
                <button id="addItem_Hapusan" type="button" class="btn btn-sm btn-info pull-left inputan"><i class="fa fa-plus-square"></i> Tambah Barang</button>
              </div>
            </div>

                <div class="row">
                  <div class="col-sm-12" >
                    <div class="tableScroll table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tblHapusan" >
                      <thead>
                        <tr class="success">
                          <th class="text-center" style="font-weight:normal; font-size:12px; width:2%" >No.</th>
                          <th class="text-center" style="font-weight:normal; font-size:12px; width:14%" >Nama Barang</th>
                          <th class="text-center" style="font-weight:normal; font-size:12px; width:12%" >Harga Satuan</th>
                          <th class="text-center" style="font-weight:normal; font-size:12px; width:12%" >Jumlah</th>
                          <th class="text-center" style="font-weight:normal; font-size:12px; width:12%" >SubTotal</th>
                          <th class="text-center" style="font-weight:normal; font-size:12px; width:4%" >Act</th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="4" style="font-weight:normal;text-align: right;" >TOTAL</th>
                          <th style="font-weight:normal;text-align: right;" ><input type="Number" name="total" id="total" value="0"></th>
                          <th></th>
                        </tr>
                        
                      </tfoot>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
              <div id="pembayaran">
                <div class="form-group row col-lg-4">
                <label>Bayar: </label>
                </div>
                <div class="form-group row col-sm-8">
                <input type="Number" name="Bayar" id="Bayar" tabindex="1" class="form-control" placeholder="Bayar*" value="0"  required="">
                </div>
              </div>
              <div id="mengembahikan">
                <div class="form-group row col-lg-4">
                <label>Kembalian: </label>
                </div>
                <div class="form-group row col-sm-8">
                <input type="Number" name="Kembalian" id="Kembalian" tabindex="1" class="form-control" placeholder="Kembalian*" value="0"  required="">
                </div>
              </div>
                <div id="perhutangan">
                  <div class="form-group row col-lg-4">
                <label>Kurang: </label>
                </div>
                <div class="form-group row col-sm-8">
                <input type="Number" name="Sisa" id="Sisa" tabindex="1" class="form-control" placeholder="Kurang*" value="0"  required="">
                </div>
                </div>
                
          


          </form>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="cancel_hapusan"onclick="cancel_hapusan();">Batal</button>
        <button type="button" class="btn btn-primary" id="hapusan_save" onclick="save_hapusan();">BAYAR</button>
      </div>
   <!--  </div> -->
  </div>
  </div>
  </div>
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
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  -->       

<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->

<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
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

$(document).ready(function() {

    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    });

$('#tblHapusan').find('.kode-barang').on('keypress', function(e) {
        if(e.keyCode == 13){
          e.preventDefault();
          $(this).autocomplete();
        }
      });
$('#tblHapusan').find(".barang_multi").autocomplete({
    source: function(request, response) {
      //var paket = $('#paket').val();
      $.ajax({
        url: "transaksi/getbarang",
        dataType: "json",
        type: "get",
        data: {
          'term' : request.term
        },
        success: function(data) {
          response(data);
        }
      });
    },
    minLength: 2,
    appendTo: $('#namabarang'),
    autoFocus: true,
    select: function (event, ui) {
      if(ui.item.jumlah=='0'){
          alert("Stok barang 0 Tolong di update Dahulu");
          return false;
        }else{
      $(this).val(ui.item.id);
      var rows = $(this).closest('tr');
      rows.find('.idbarang_multi').val(ui.item.idbarang);
      rows.find( ".nama_barang_multi" ).val(ui.item.namabarang).show().prop('readonly', true);
      rows.find( ".harga_multi" ).val( ui.item.hargajual );
        rows.find( ".stock_multi" ).val( ui.item.jumlah );
        rows.find( ".jumlah_multi" ).focus();
      return false;
        }
    }
  });


$('#tblHapusan').find('.jumlah_multi').on('keypress', function(e) {
    if(e.keyCode == 13){
      e.preventDefault();
      $('#addItem_Hapusan').click();
    }
  });

    $('#Bayar').on('blur keyup keydown', function (e) {
    if (e.keyCode == 13){
      e.preventDefault();
    }
    var total = $('#total').val();
    total = parseFloat(total) || 0;
    var bayar = $('#Bayar').val();
    bayar = parseFloat(bayar) || 0;
    
    if(bayar >= total){
      $('#Kembalian').val(bayar-total);
      $('#Sisa').val(0);
    }else{
      $('#Kembalian').val(0);
      $('#Sisa').val(total-bayar);
    }
  });

$('#tblHapusan').find('.jumlah_multi').on('keyup', function () {
        var row = $(this).closest('tr');
        var jumlah = parseFloat(row.find('.jumlah_multi').val());
        var harga = parseFloat(row.find('.harga_multi').val());
        
        row.find('.subtotal_multi').val(getSubTotal(jumlah, harga));
        
        getTotal();
        
      });


    $('#addItem_Hapusan').click(function(){
    index_diagnya = $(".trHaps:last").find(".nomer_multi_Hapusan").text();
    if((index_diagnya == '' || index_diagnya == null)){
      index_diag = 0;
    }else{
      index_diag = parseInt(index_diagnya)  ;
    }
   

    nomer_diag = parseInt(index_diag) + 1;
    $('#tblHapusan > tbody').append(
      '<tr class="trHaps" >'+
        '<td class="text-center nomer_multi_Hapusan">'+nomer_diag+'</td>'+
        '<td id="namabarang"><input type="text" class="form-control barang_multi" name="multi['+index_diag+'][barang_multi]"  style="border: 1px solid black;" /><input type="text" class="form-control nama_barang_multi" name="multi['+index_diag+'][nama_barang_multi]"  style="border: 1px solid black;display:none" /><input type="hidden" class="form-control idbarang_multi" name="multi['+index_diag+'][idbarang_multi]" value=""/></td>'+

        '<td><input type="text" readonly class="form-control harga_multi" name="multi['+index_diag+'][harga_multi]" style="border: 1px solid black;" /></td>'+
        '<td><input type="text" class="form-control jumlah_multi" name="multi['+index_diag+'][jumlah_multi]" style="border: 1px solid black;" /><input type="hidden" class="form-control stock_multi" name="multi['+index_diag+'][stock_multi]" style="border: 1px solid black;" /></td>'+
        '<td><input type="text" readonly class="form-control subtotal_multi" name="multi['+index_diag+'][subtotal_multi]" style="border: 1px solid black;" /></td>'+
        
        '<td><button class="btn btn-xs btn-danger schdelete_multi" title="Delete"><i class="fa fa-trash-o"></i></button></td>'+
      '</tr>'
    );
          $('#tblHapusan').find('.barang_multi').on('keypress', function(e) {
        if(e.keyCode == 13){
          e.preventDefault();
          $(this).autocomplete();
        }
      });
      
      $('body').on("focus", "#tblHapusan .barang_multi", function() {
    $( this ).bind({
      keydown: function(e){
        $(this).autocomplete('enable');
        var clostTr = $(this).closest('tr');

            if(e.ctrlKey && e.which == 38) {
              e.preventDefault();
              $(this).autocomplete('close');
                  $(this).autocomplete('disable');

              clostTr.prev('tr').find('.barang_multi').focus();
                  return false;
            } else if(e.ctrlKey && e.which == 40) {
          e.preventDefault();
              $(this).autocomplete('close');
                  $(this).autocomplete('disable');

              clostTr.next('tr').find('.barang_multi').focus();
                  return false;
            }
      }
    }).autocomplete({
      source:'transaksi/getbarang',
      minLength:2,
      appendTo: $('#namabarang'),
      select: function( event, ui ) {
        if(ui.item.jumlah=='0'){
          alert("Stok barang 0 Tolong di update Dahulu");
          return false;
        }else{
        $("#namabarang .barang_multi ").html( ui.item.idbarang );
        $(this).closest("tr").find( ".idbarang_multi" ).val( ui.item.idbarang );
        $(this).closest("tr").find( ".barang_multi" ).hide();
        $(this).closest("tr").find( ".nama_barang_multi" ).val(ui.item.namabarang).show().prop('readonly', true);
        $(this).closest("tr").find( ".harga_multi" ).val( ui.item.hargajual );
        $(this).closest("tr").find( ".stock_multi" ).val( ui.item.jumlah );
        $(this).closest("tr").find( ".jumlah_multi" ).focus();
        }
        // $('#addItem').attr('style', 'display:visible');
        // $('#addJasa').attr('style', 'display:visible');
      }
    }).autocomplete().data("uiAutocomplete")._renderItem =  function( ul, item ){
      if(item.namabarang!=null){
        
          return $( "<li>" )
          .append("<a style='color:black;font-size:12px;'>"+item.namabarang+ "</a>")
          .appendTo( ul );
        
      }else{
        return $( "<li>" )
          .prop("style", "visibility:none")
          .appendTo( ul );
      }
    };
  });

// $('#tblHapusan').find(".barang_multi").autocomplete({
//     source: function(request, response) {
//       //var paket = $('#paket').val();
//       $.ajax({
//         url: "transaksi/getbarang",
//         dataType: "json",
//         type: "get",
//         data: {
//           'term' : request.term
//         },
//         success: function(data) {
//           response(data);
//         }
//       });
//     },
//     minLength: 2,
//     appendTo: $('#tblHapusan'),
//     autoFocus: true,
//     select: function (event, ui) {
//       $(this).val(ui.item.id);
//       var rows = $(this).closest('tr');
//       rows.find('.idbarang_multi').val(ui.item.idbarang);
//       rows.find('.barang_multi').html(ui.item.namabarang);
//       rows.find('.harga_multi').val(ui.item.hargajual);
//       rows.find('.jumlah_multi').focus();
//       return false;
//     }
//   }).autocomplete().data("uiAutocomplete")._renderItem =  function( ul, item ){
//       return $( "<li>" )
//       .append( "<a style='font-size:12px'>" + item.namabarang + "</a>" )
//       .appendTo( ul );
//     };



$('#tblHapusan').find('.jumlah_multi').on('keypress', function(e) {
    if(e.keyCode == 13){
      e.preventDefault();
      $('#addItem_Hapusan').click();
    }
  });
$('#tblHapusan').find('.jumlah_multi').on('keyup', function () {
      var row = $(this).closest('tr');
      if(parseFloat(row.find('.jumlah_multi').val()) > parseFloat(row.find('.stock_multi').val())){
        alert("Stock Barang Sisa "+row.find('.stock_multi').val());
        var jumlah = 0;
      }else{
        
        var jumlah = parseFloat(row.find('.jumlah_multi').val());
        
      } 
      var harga = parseFloat(row.find('.harga_multi').val());
        
        row.find('.subtotal_multi').val(getSubTotal(jumlah, harga));
        
        getTotal(); 
      });
   
  });

    $('#tblHapusan').on("click",".schdelete_multi", function() {

    $(this).closest("tr").remove();
    $('.trHaps').each(function(index_tind){
      $(this).find(".nomer_multi_Hapusan").text(index_tind+1);
      $(this).find(".barang_multi").attr("name","multi["+index_tind+"][barang_multi]");
      $(this).find(".nama_barang_multi").attr("name","multi["+index_tind+"][nama_barang_multi]");
      $(this).find(".idbarang_multi").attr("name","multi["+index_tind+"][idbarang_multi]");
      $(this).find(".harga_multi").attr("name","multi["+index_tind+"][harga_multi]");
      $(this).find(".jumlah_multi").attr("name","multi["+index_tind+"][jumlah_multi]");
      $(this).find(".subtotal_multi").attr("name","multi["+index_tind+"][subtotal_multi]");

    });getTotal();
  });
});
function buka() {
  $('.trHaps').remove();
  $('#mdl_hapusan_darah').modal('show');
  $('#pembayaran').show();
      $('#perhutangan').show();
      $('#mengembahikan').show();
      $('#total').prop("readonly",false);
      $('#addItem_Hapusan').show();
      $('#hapusan_save').show();
      $('#NAMA').prop("readonly",false);
}
function hapusan_darah(id) {
  console.log(id)
  $('.trHaps').remove();

    //$('#id_flight').val(id);
    $.post('transaksi/dataedit', {idne : id}, function(hasil) {
$("#NAMA").val(hasil[0].NAMA);
$("#total").val(hasil[0].TOTAL_HARGA);
}, 'json');
      $.ajax({
            type: 'POST',
            url: 'transaksi/dataeditt',
            data: {idnya: id},
            error: function(data){
              alert('Terjadi Kesalahan'+data);
            },
            success: function(data) {


              var parsenya=JSON.parse(data);

              parsenya.forEach(function (isi,index,arr) {
                
                 $('#tblHapusan > tbody').append(
                  '<tr class="trHaps">'+
                    '<td class="text-center nomer_multi_Hapusan">'+(index+1)+'</td>'+
                    '<td><input type="text" class="form-control barang_multi" name="multi['+(index)+'][barang_multi]" readonly  style="border: 1px solid black;" value="'+isi.namabarang+'" /></td>'+
                    '<td><input type="text" readonly class="form-control harga_multi " name="multi['+(index)+'][harga_multi]" style="border: 1px solid black;" value="'+isi.hargajual+'" /></td>'+
                    '<td><input type="text" class="form-control jumlah_multi " readonly name="multi['+(index)+'][jumlah_multi]" style="border: 1px solid black;" value="'+isi.JUMLAH_BARANG+'" /></td>'+
                    '<td><input type="text" readonly class="form-control subtotal_multi" name="multi['+(index)+'][subtotal_multi]" style="border: 1px solid black;" value="'+(parseFloat(isi.JUMLAH_BARANG)*parseFloat(isi.hargajual))+'" /></td>'+
                    '<td>&nbsp</td>'+
                  '</tr>'
                );
              });
            }
      });
      //getTotal();
      
      $('#total').prop("readonly",true);
      $('#pembayaran').hide();
      $('#perhutangan').hide();
      $('#mengembahikan').hide();
      $('#hapusan_save').hide();
      $('#addItem_Hapusan').hide();
      $('#NAMA').prop("readonly",true);
  $('#mdl_hapusan_darah').modal('show');
      

}



function save_hapusan() {
  isSingle = 0;
  is_error =0;
      if(!($('.trHaps').length>0)){

        alert('Input Data Please');
        is_error = 1;
        return false;
      }
      if($('#Sisa').val()>0){
        alert('Transaksi Tidak Boleh Menghutang');
        is_error = 1;
        return false;
      }
      if($('#NAMA').val()==null||$('#NAMA').val()==''){
        alert('Input Data Please');
        is_error = 1;
        return false;
      }
      if($('#Bayar').val()==null||$('#Bayar').val()==''){
        alert('Input Data Please');
        is_error = 1;
        return false;
      }

      $(".trHaps > td").removeClass("danger");      
      $('.nama_barang_multi').each(function(index,obj){
        if($(this).val() == 'null' || $(this).val() == null || $(this).val() == "" || parseInt($(this).val()) == 0){
           alert('Input Data  Please');
           is_error = 1;
          return false;
        }
      });
      $('.jumlah_multi').each(function(index,obj){
        if($(this).val() == 'null' || $(this).val() == null || $(this).val() == "" || parseInt($(this).val()) == 0){
           alert('Input Data Please');
           is_error = 1;
         return false;
        }
      });

if(is_error==1){
  return false;
}else{
      $.ajax({
      type: 'POST',
      url: 'transaksi/save',
      data: $("#form_schedule").serialize(),
      beforeSend: function(){
       // $('#hapusan_save').button('loading');

 
       //$("#mdl_hapusan_darah").LoadingOverlay("show");
      },
      complete: function() {
       // $('#hapusan_save').button('reset');
       //$("#mdl_hapusan_darah").LoadingOverlay("hide", true);
        
        //$("#tgl_inTindakan").disabled=true;
      },
      success: function(data) {
        if(data=="0"){
         // $("#mdl_hapusan_darah").LoadingOverlay("hide", true);
           alert('failed please contact developer!!!');
          //$('#tab_tindakan_n').show();
        }else{
         // $("#mdl_hapusan_darah").LoadingOverlay("hide", true);
          alert('Success');
        }
        location.reload();
        cancel_hapusan();
      }
    
});
  }
}
function cancel_hapusan() {
  document.getElementById('form_schedule').reset();
  $('.trHaps').remove();
  $('#mdl_hapusan_darah').modal('hide');
    $('#pembayaran').show();
      $('#perhutangan').show();
      $('#mengembahikan').show();
      $('#total').prop("readonly",false);
      $('#addItem_Hapusan').show();
      $('#hapusan_save').show();
      $('#NAMA').prop("readonly",false);
}
function getSubTotal(jumlah, harga) {
  
  jumlah = parseFloat(jumlah) || 0;
  harga = parseFloat(harga) || 0;
  

    subTotal = harga*jumlah;
  
  return subTotal;
}
function getTotal() {
  var total = 0;
  
  $('#tblHapusan').find('.subtotal_multi').each(function () {
    var subtotal = $(this).val();
    subtotal = parseFloat(subtotal) || 0;
    if (subtotal != 0){
      total += parseFloat($(this).val());
    }
  });
  $('#total').val(total);
}
</script>

</body></html>