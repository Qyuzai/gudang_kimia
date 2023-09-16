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
                        <a href="<?php echo base_url('backendhome/form_limbah'); ?>"><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Tambah Item</button></a>
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
                          <th>Kode Limbah</th>
                          <th>Keterangan Limbah</th>
                          <th>Lokasi Simpan Limbah</th>
                          <th>Klasifikasi Limbah</th>
                          <th>Status Limbah</th>
                          <th>Sumber Limbah</th>
                          <th>Volume Limbah</th>
                          <th>Tanggal Pengisian</th>
                          <!-- <th>Keterangan Limbah</th> -->
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
<?php
    if (empty($datalimbah_bkimia)) {
        echo "";
    }else{
        foreach ($datalimbah_bkimia as $val) {
?>
       <tr>
           <td><?php echo $val['kode_nama_limbah'];?></td>
           <td><?php echo $val['keterangan_limbah'];?></td>
           <td><?php echo $val['lokasi_simpan_limbah'];?></td>
           <td><?php echo $val['jenis_klasifikasi_limbah'];?></td>
           <td><?php echo $val['keterangan_bkimia'];?></td>
           <td><?php echo $val['asal_limbah_lab'];?></td>
           <td><?php echo $val['volume_limbah'];?></td>
           <td><?php echo $val['tanggal_pengisian'];?></td>
           <td>
             <a href="<?php echo site_url('backendhome/UpdateLimbah')."/".$val['id_limbah']; ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
             <a href="<?php echo site_url('backendhome/DeleteLimbah')."/".$val['id_limbah']; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-remove"></i></a>
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