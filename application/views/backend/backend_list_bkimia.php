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
                        <a href="<?php echo base_url('backendhome/form_bkimia'); ?>"><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Tambah Bahan Kimia</button></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <?php echo $this->session->flashdata('error'); ?>
                            <?php echo $this->session->flashdata('success'); ?>
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                    </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nama Kimia</th>
                          <th>ID Sistem</th>
                          <th>Keterangan Kimia</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
    if (empty($data_bkimia)) {
        echo "";
    }else{
        foreach ($data_bkimia as $val) {
?>
       <tr>
           <td><?php echo $val['nama_bkimia'];?></td>
           <td><?php echo $val['kode_bkimia'];?></td>
           <td><?php echo $val['deskripsi_bkimia'];?></td>
           <td><?php echo '
<div class="x_content">
<a href="'.site_url('backendhome').'/update_form_bkimia/'.$val['kode_bkimia'].'" class="btn btn-warning">Update</a>
<a href="'.site_url('backendhome').'/DeleteListBkimia/'.$val['kode_bkimia'].'" class="btn btn-danger">Delete</a>
</div>
           ';?></td>
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