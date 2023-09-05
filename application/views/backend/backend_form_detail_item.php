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
                  <form class="form-horizontal form-label-left" action="<?php echo site_url('backendhome/do_upload_form_detail_item/').$detailslist_bkimia[0]['kode_bkimia']; ?>" method="post" enctype="multipart/form-data">

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
                      <label class="control-label col-md-3 col-sm-3 ">Nama Item</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="nama_item" value="<?php echo $detailslist_bkimia[0]['nama_bkimia'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-sm-3  control-label">Sifat Kimia
                        <br>
                        <!-- <small class="text-navy">status keamanan item</small> -->
                      </label>
                      <div class="col-md-9 col-sm-9 ">
<?php
if (empty($sifat_bkimia)) {
    echo "";
}else{
$i = 1;
    foreach ($sifat_bkimia as $val) {
?>
                        <div class="radio">
                          <label>
                            <input type="radio" class="flat iCheck0" name="sifat_bkimia" id="1" value="<?php echo $val['jenis_id'];?>" > <?php echo $val['nama_jenis']; if($val['jenis_id'] == $detailslist_bkimia[0]['jenis_bkimia']){ echo'<i style="color:red;"> << selected</i>';}else{echo "";}?> 
                          </label>
                        </div>
<?php 
    }//endFOREACH
}//endIF
?>
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Nama Laboran</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="laboran_item" value="<?php echo $detailslist_bkimia[0]['petugas'];?>">
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 " for="inputDouble">Volume</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input class="form-control" value="<?php echo $detailslist_bkimia[0]['volume_bkimia'];?>" type="number" step="any" name="volume_item" id="inputIntDouble" =''><span class="fa  fa-calculator form-control-feedback right" aria-hidden="true"></span>
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Lokasi Penyimpanan</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="lokasi_item" value="<?php echo $detailslist_bkimia[0]['lokasi_simpan_bkimia'];?>">
                      </div>
                    </div><br>
                    <div class="form-group row">
                      <label class="col-md-3 col-sm-3  control-label">Jenis Klasifikasi B3
                        <br>
                        <!-- <small class="text-navy">status keamanan item</small> -->
                      </label>
                      <div class="col-md-9 col-sm-9 ">
<?php
if (empty($kategori_bkimia)) {
    echo "";
}else{
$i = 1;
    foreach ($kategori_bkimia as $val) {
?>
                        <div class="radio">
                          <label>
                            <input type="radio" class="flat iCheck1" name="klasifikasi_item" id="1" value="<?php echo $val['jenis_id'];?>" > <?php echo $val['nama_jenis']; if($val['jenis_id'] == $detailslist_bkimia[0]['kategori_bkimia']){ echo'<i style="color:red;"> << selected</i>';}else{echo "";}?>
                          </label>
                        </div>
<?php 
    }//endFOREACH
}//endIF
?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-sm-3  control-label">Keterangan
                        <br>
                        <small class="text-navy">status keamanan item</small>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
<?php
if (empty($keterangan_bkimia)) {
    echo "";
}else{
$i = 1;
    foreach ($keterangan_bkimia as $val) {
?>
                        <div class="radio">
                          <label>
                            <input type="radio" class="flat iCheck1" name="keterangan_bkimia" id="1" value="<?php echo $val['jenis_id'];?>" > <?php echo $val['nama_jenis']; if($val['jenis_id'] == $detailslist_bkimia[0]['keterangan_bkimia']){ echo'<i style="color:red;"> << selected</i>';}else{echo "";}?>
                          </label>
                        </div>
<?php 
    }//endFOREACH
}//endIF
?>
                      </div>
                    </div>

                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Upload Image
                        <br>
                        <small style="color: red;" class="text-navy">Resolusi gambar 500px x 500px</small>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="file" name="userfile">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">Deskripsi
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" rows="3" disabled><?php echo $detailslist_bkimia[0]['deskripsi_bkimia']; ?></textarea>
                      </div>
                    </div>
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
