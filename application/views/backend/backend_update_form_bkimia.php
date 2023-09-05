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
                  <form class="form-horizontal form-label-left" action="<?php echo site_url('backendhome/UpdateListBKimia/').$data_bkimia[0]['kode_bkimia']; ?>" method="post" enctype="multipart/form-data">

                    <!-- =========================================================================================================================================================================== -->
                    <?php echo $this->session->flashdata('error'); ?>
                    <?php echo $this->session->flashdata('success'); ?>

                    <div class="col-md-12 col-sm-12 ">

                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Nama Item</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="nama_item" placeholder="" value="<?php echo $data_bkimia[0]['nama_bkimia']; ?>" required='required'>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">Deskripsi
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" name="deskripsi_bkimia" rows="3" placeholder=""><?php echo $data_bkimia[0]['deskripsi_bkimia']; ?></textarea>
                      </div>
                    </div>

                    </div>
                    <!-- =========================================================================================================================================================================== -->

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <a href="<?php echo site_url('backendhome/list_bkimia'); ?>" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- /page content -->