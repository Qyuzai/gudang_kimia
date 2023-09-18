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
                  <form class="form-horizontal form-label-left" action="<?php echo site_url('backendhome/update_data_limbah/').$data_limbah[0]['id_limbah']; ?>" method="post" enctype="multipart/form-data">

                    <!-- =========================================================================================================================================================================== -->
                    <?php echo $this->session->flashdata('error'); ?>
                    <?php echo $this->session->flashdata('success'); ?>

                    <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">Code Nama Limbah</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" readonly="readonly" name="kode_nama_limbah" value="<?php echo $data_limbah[0]['kode_nama_limbah']; ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label col-md-3 col-sm-3 ">Deskripsi
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" name="deskripsi_bkimia" rows="3"><?php echo $data_limbah[0]['keterangan_limbah']; ?></textarea>
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
                            <input type="radio" class="flat iCheck0" name="zatkimia" id="1" value="<?php echo $val['jenis_id'];?>" > <?php echo $val['nama_jenis']; if($val['jenis_id'] == $data_limbah[0]['zat_bkimia']){ echo'<i style="color:red;"> << selected</i>';}else{echo "";}?>
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
                        <input type="text" class="form-control" name="laboran_limbah" value="<?php echo $data_limbah[0]['nama_laboran'];?>">
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 " for="inputDouble">Volume</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input class="form-control" type="number" step="any" name="volume_limbah" id="inputIntDouble" value="<?php echo $data_limbah[0]['volume_limbah'];?>"><span class="fa  fa-calculator form-control-feedback right" aria-hidden="true"></span>
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Lokasi Penyimpanan</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="lokasi_limbah" value="<?php echo $data_limbah[0]['lokasi_simpan_limbah'];?>">
                      </div>
                    </div>
                    <div class="form-group row ">
                      <label class="control-label col-md-3 col-sm-3 ">Asal Limbah</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="asal_limbah" value="<?php echo $data_limbah[0]['asal_limbah_lab'];?>">
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
                            <input type="radio" class="flat iCheck1" name="klasifikasi_limbah" id="1" value="<?php echo $val['jenis_id'];?>"> <?php echo $val['nama_jenis']; if($val['jenis_id'] == $data_limbah[0]['jenis_klasifikasi_limbah']){ echo'<i style="color:red;"> << selected</i>';}else{echo "";}?>
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
                        <small class="text-navy">status keamanan limbah</small>
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
                            <input type="radio" class="flat iCheck1" name="keterangan_bkimia" id="1" value="<?php echo $val['jenis_id'];?>"> <?php echo $val['nama_jenis']; if($val['jenis_id'] == $data_limbah[0]['kelompok_bkimia']){ echo'<i style="color:red;"> << selected</i>';}else{echo "";}?>
                          </label>
                        </div>
<?php 
    }//endFOREACH
}//endIF
?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-sm-3  control-label">Status Lokasi
                        <br>
                        <small class="text-navy">status posisi limbah</small>
                      </label>
                      <div class="col-md-9 col-sm-9 ">
                        
<?php
if (empty($status_limbah)) {
    echo "";
}else{
$i = 1;
    foreach ($status_limbah as $val) {
?>
                        <div class="radio">
                          <label>
                            <input type="radio" class="flat iCheck1" name="status_limbah" id="1" value="<?php echo $val['jenis_id'];?>"> <?php echo $val['nama_jenis']; if($val['jenis_id'] == $data_limbah[0]['status_lokasi']){ echo'<i style="color:red;"> << selected</i>';}else{echo "";}?>
                          </label>
                        </div>
<?php 
    }//endFOREACH
}//endIF
?>

                      </div>
                    </div>
                    <!-- =========================================================================================================================================================================== -->

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9  offset-md-3">
                        <a href="<?php echo site_url('backendhome/list_limbah'); ?>" class="btn btn-primary">Cancel</a>
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
