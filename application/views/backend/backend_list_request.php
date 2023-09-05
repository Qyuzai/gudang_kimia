        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <!-- <h3>Users <small>Some examples to get you started</small></h3> -->
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Responsive example<small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                    </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Request Kimia</th>
                          <th>Nama Request</th>
                          <th>Volume Request</th>
                          <th>Nota Request</th>
                          <th>Lokasi Bahan Kimia</th>
                          <th>Keterangan Bahan Kimia</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
    if (empty($data_request)) {
        echo "";
    }else{
        foreach ($data_request as $val) {
?>
       <tr>
           <td><?php echo $val['nama_bkimia'];?></td>
           <td><?php echo $val['nama_request'];?></td>
           <td><?php echo $val['volume_bkimia'];
           switch ($val['sifat_bkimia']) {
                                  case 'Padat':
                                    echo " Gram";
                                    break;
                                  case 'Cair':
                                    echo " Liter";
                                    break;
                                }
          ?></td>
           <td><?php echo $val['nota_bkimia'];?></td>
           <td><?php echo $val['nama_labs'];?></td>
           <td><?php echo $val['keterangan_bkimia'];?></td>
           <td><?php
           switch ($val['status_request']) {
               case 1:
                   echo '<div class="btn btn-round btn-warning">Order</div>';
                   break;
               case 2:
                   echo '<div class="btn btn-round btn-info">Proses</div>';
                   break;
               case 3:
                   echo '<div class="btn btn-round btn-success">Selesai</div>';
                   break;
               case 0:
                   echo '<div class="btn btn-round btn-danger">Cancel</div>';
                   break;
           }
            ?>
              <a href="<?php echo site_url('backendhome/detail_request')."/".$val['nota_bkimia']; ?>" class="btn btn-round btn-info">Detail</a>
            </td>
       </tr>
<?php
        }//endFOREACH
    }//endIF
?>
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->