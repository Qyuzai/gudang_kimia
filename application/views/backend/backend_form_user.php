      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Basic Elements <small>different form elements</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form class="form-horizontal form-label-left" action="<?php echo site_url('backendhome/input_user'); ?>" method="post" enctype="multipart/form-data">

                    <!-- =========================================================================================================================================================================== -->
                    <?php echo $this->session->flashdata('error'); ?>
                    <?php echo $this->session->flashdata('success'); ?>

<!--                     <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">Code Item</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" readonly="readonly" name="code_item" placeholder="">
                      </div>
                    </div> -->
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Username*</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="get_username" placeholder="" required='required'>
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Password*</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="password" class="form-control" name="get_password" placeholder="" required='required'>
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Nama*</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="get_nama" placeholder="" required='required'>
                      </div>
                    </div>

                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Email</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="get_email" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">No Telphone</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="get_hp" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-sm-3  control-label">Role Hak Akses*
                        <br>
                        <!-- <small class="text-navy">status keamanan item</small> -->
                      </label>
                      <div class="col-md-9 col-sm-9 ">
<?php
if (empty($data_role)) {
    echo "";
}else{
$i = 1;
    foreach ($data_role as $val) {
?>
                        <div class="radio">
                          <label>
                            <input type="radio" class="flat iCheck0" name="get_role" id="1" value="<?php echo $val['hak_akses'];?>" required> <?php echo $val['keterangan'];?>
                          </label>
                        </div>
<?php 
    }//endFOREACH
}//endIF
?>
                      </div>
                    </div>
<!--                     <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">Deskripsi
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" name="get_" rows="3" placeholder=""></textarea>
                      </div>
                    </div> -->
                    <!-- =========================================================================================================================================================================== -->

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9  offset-md-3">
                        <a href="<?php echo site_url('backendhome/list_item'); ?>" class="btn btn-primary">Cancel</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- /page content -->
