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
                  <form class="form-horizontal form-label-left" action="<?php echo site_url('backendhome/form_profil_web'); ?>" method="post" enctype="multipart/form-data">

                    <!-- =========================================================================================================================================================================== -->
                    <?php echo $this->session->flashdata('error'); ?>
                    <?php echo $this->session->flashdata('success'); ?>

                    <div class="col-md-12 col-sm-12 ">

                    <div class="form-group row">
<?php
if (empty($get_data)) {
    echo "";
}else{
    foreach ($get_data as $val) {
?>
                <textarea class="form-control" name="profil_bkimia" rows="15" placeholder=""><?php echo $val['profil_web'];?></textarea>
<?php 
    }//endFOREACH
}//endIF
?>

                    </div>

                    </div>
                    <!-- =========================================================================================================================================================================== -->

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- /page content -->
