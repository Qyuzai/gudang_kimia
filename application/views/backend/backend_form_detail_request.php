<!-- page content -->
<?php //var_dump($data_request[0]['nota_bkimia']);exit(); ?>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <!-- <h3>Invoice <small>Some examples to get you started</small></h3> -->
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
<!--                     <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span> -->
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Invoice Description <small></small></h2>
<!--                     <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"><a href="<?php echo site_url('backendhome/list_request'); ?>" class="btn btn-info pull-right"><i class="fa fa-mail-reply"></i> KEMBALI</a></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="  invoice-header">
                        <h3>
                        <b style="margin-left:11px;"><?php echo $data_request[0]['nota_bkimia'];?></b><br>
          <?php
           switch ($data_request[0]['status_request']) {
               case 1:
                   echo '<xy style="margin-left:11px;" class="btn btn-round btn-warning">Order</xy>';
                   break;
               case 2:
                   echo '<xy style="margin-left:11px;" class="btn btn-round btn-info">Proses</xy>';
                   break;
               case 3:
                   echo '<xy style="margin-left:11px;" class="btn btn-round btn-success">Selesai</xy>';
                   break;
               case 0:
                   echo '<xy style="margin-left:11px;" class="btn btn-round btn-danger">Cancel</xy>';
                   break;
           }
          ?>
                        <!-- <small class="pull-right">Date: 16/08/2016</small> -->
                        </h3>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">

                       <address>
                            <strong style="font-size: 18px;">Nama: <?php echo $data_request[0]['nama_request']."  - ".$data_request[0]['nim_request'];?></strong>
                            <div style="font-size: 16px;">Lokasi Simpan: <?php echo $data_request[0]['lokasi_simpan_bkimia'];?></div>
                            <div style="font-size: 16px;">Keterangan: <x style="font-weight: bold; color:#ffbf00;"><?php echo $data_request[0]['keterangan_bkimia'];?></x></div>
                            <div style="font-size: 16px;">Status Kimia: <x style="font-weight: bold; color:#ffbf00;"><?php echo $data_request[0]['kategori_bkimia'];?></x></div>
                            <div style="font-size: 16px;">No Telpn: <x style="font-weight: bold; color:#ffbf00;"><?php echo $data_request[0]['nohp_request'];?></x></div>
                            <div style="font-size: 16px;">Deskripsi: <?php echo $data_request[0]['deskripsi_bkimia'];?></div>
                        </address>
                        </div>
                        <!-- /.col -->
<!--                         <div class="col-sm-4 invoice-col">
                          To
                        <address>
                            <strong>John Doe</strong>
                            <br>795 Freedom Ave, Suite 600
                            <br>New York, CA 94107
                            <br>Phone: 1 (804) 123-9876
                            <br>Email: jon@ironadmin.com
                        </address>
                        </div> -->
                        <!-- /.col -->
<!--                         <div class="col-sm-4 invoice-col">
                          <b>Invoice #007612</b>
                          <br>
                          <br>
                          <b>Order ID:</b> 4F3S8J
                          <br>
                          <b>Payment Due:</b> 2/22/2014
                          <br>
                          <b>Account:</b> 968-34567
                        </div> -->
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="  table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Bahan Kimia</th>
                                <th>Volume</th>
                                <th>Digunakan</th>
                                <th>Tanggal Request</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><?php echo $data_request[0]['nama_bkimia'];?></td>
                                <td><?php echo $data_request[0]['volume_bkimia'];
                                switch ($data_request[0]['sifat_bkimia']) {
                                  case 'Padat':
                                    echo " Gram";
                                    break;
                                  case 'Cair':
                                    echo " Liter";
                                    break;
                                }
                                ?></td>
                                <td><?php
$tanggal_digunakan_string = $data_request[0]['tanggal_digunakan'];
$tanggal_digunakan = new DateTime($tanggal_digunakan_string);
echo $tanggal_digunakan->format("d-m-Y");
                                ?></td>
                                <td><?php echo $data_request[0]['tanggal_request'];?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-md-6">
                          <!-- <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
                          <a href="<?php echo site_url('backendhome/UpdateSetRequestProses')."/".$data_request[0]['nota_bkimia']; ?>" class="btn btn-primary pull-left" style="margin-right: 5px;"><i class="fa fa-download"></i> PROSES</a>
                          <a href="<?php echo site_url('backendhome/UpdateSetRequestSelesai')."/".$data_request[0]['nota_bkimia']; ?>" class="btn btn-success pull-left"><i class="fa fa-credit-card"></i> SELESAI</a>
                        </div>
                        <div class="col-md-6">
                          <a href="<?php echo site_url('backendhome/UpdateSetRequestBatal')."/".$data_request[0]['nota_bkimia']; ?>" class="btn btn-danger pull-right" style="margin-right: 5px;"><i class="fa fa-close"></i> BATAL</a>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
