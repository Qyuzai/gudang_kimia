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
                        <a href="<?php echo base_url('backendhome/form_user'); ?>"><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Tambah User</button></a>
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
                          <th>Nama</th>
                          <th>Hak Akses</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
    if (empty($data_user)) {
        echo "";
    }else{
        foreach ($data_user as $val) {
?>
       <tr>
           <td><?php echo $val['nama'];?></td>
           <td><?php
           switch ($val['hak_akses']) {
               case 1:
                   echo '<div class="btn btn-round btn-danger">Admin</div>';
                   break;
               case 2:
                   echo '<div class="btn btn-round btn-info">Petugas</div>';
                   break;
               case 3:
                   echo '<div class="btn btn-round btn-info">Aslab</div>';
                   break;
               case NULL:
                   echo '';
                   break;
           }
            ?>
            </td>
            <td><a href="<?php echo site_url('backendhome/detail_request')."/"; ?>" class="btn btn-round btn-info">Detail</a></td>
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