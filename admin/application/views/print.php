<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laundry | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> LaunDRY, Inc.
         <a class="pull-right" href="<?php echo base_url();?>barang/">KEMBALI</a>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>LaunDRY, Inc.</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong><?php  echo @$NAMA_PESANAN[0]['NAMA_PEMESAN'];  ?></strong><br>
           Phone: +628<?php  echo @$NAMA_PESANAN[0]['NOMER_HP_PEMESAN'];  ?><br>
         </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #<?php  echo @$NAMA_PESANAN[0]['KODE_PESANAN'];  ?></b><br>
        <br>
        <b>Pesanan Dibuat:</b> <?php  echo @$NAMA_PESANAN[0]['TANGGAL_PESANAN'];  ?><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Qty</th>
            <th>Paket</th>
            <th>Harga Paket</th>
            <th>Deskripsi</th>
            <th>Harga</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td><?php  echo @$NAMA_PESANAN[0]['JUMLAH_BARANG'];  ?> / <?php  echo @$NAMA_PESANAN[0]['NAMA_SATUAN'];  ?></td>
            <td><?php  echo @$NAMA_PESANAN[0]['NAMA_PAKET'];  ?></td>
            <td><?php  echo @$NAMA_PESANAN[0]['HARGA'];  ?> / <?php  echo @$NAMA_PESANAN[0]['NAMA_SATUAN'];  ?></td>
            <td><?php  echo @$NAMA_PESANAN[0]['DESKRIPSI'];  ?></td>
            <td>Rp <?php  echo @$NAMA_PESANAN[0]['HARGA_LAUNDRY'];  ?></td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <img src="<?php echo base_url();?>assets/QR/<?php  echo @$NAMA_PESANAN[0]['KODE_PESANAN'];  ?>.png" width="100" heigth="100">
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">PESANAN DIBUAT : <?php  echo @$NAMA_PESANAN[0]['TANGGAL_PESANAN'];  ?></p>

        <div class="table-responsive">
          <table class="table">
             <tr>
              <th>Status:</th>
              <td><?php  if(@$NAMA_PESANAN[0]['BAYAR']==1){ echo "BELUM DIBAYAR"; } else{ echo "SUDAH DIBAYAR";}  ?></td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>Rp <?php  echo @$NAMA_PESANAN[0]['HARGA_LAUNDRY'];  ?></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
