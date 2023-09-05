<!-- Grafik Section-->
        <section class="page-section Grafik" id="grafik">
            <div class="container">
                <!-- Grafik Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Grafik</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Grafik Grid Items-->
                <div class="row justify-content-center">
                    <!-- Grafik Item 1-->
<!-- Container untuk grafik batang -->
<!-- <div id="bar-chart" style="width: 100%; height: 400px;"></div> -->

<!-- Container untuk grafik lingkaran -->
<!-- <div id="pie-chart" style="width: 100%; height: 400px;"></div> -->

<div class="col-md-6">
    <h3 class="chart-title">Tahun 2023</h3>
        <canvas id="myBarChart"></canvas>
    </div>
<div class="col-md-6">
    <h3 class="chart-title">Tahun 2023</h3>
        <canvas id="myBarChart1"></canvas>
    </div>

                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="text-center mt-4 ms-auto">
                        <p class="lead">
<?php
// var_dump($data_grafik);exit();
if (empty($get_data)) {
    echo "";
}else{
    foreach ($get_data as $val) {
?>
                <?php echo $val['profil_web'];?>
<?php 
    }//endFOREACH
}//endIF
?>
                        </p>
                    </div>
                </div>
                <!-- About Section Button-->
<!--                 <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                        <i class="fas fa-download me-2"></i>
                        Free Download!
                    </a>
                </div> -->
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
<div class="container mt-4">
    <h2>Form Request Bahan Kimia</h2>
    <form action="<?php echo site_url('frontendhome/form_request_bkimia'); ?>" method="post" enctype="multipart/form-data">
        <?php echo $this->session->flashdata('error'); ?>
        <?php echo $this->session->flashdata('success'); ?>
        <div class="form-group">
            <br><select class="form-control" id="kode_bkimia" name="kode_bkimia" required>
                <option>--- (Pilih Bahan Kimia) ---</option>
<?php
if (empty($data_bkimia)) {
    echo "";
}else{
    foreach ($data_bkimia as $val) {
?>
                <option value="<?php echo $val['kode_bkimia'];?>"><?php echo $val['nama_bkimia'];?></option>
<?php 
    }//endFOREACH
}//endIF
?>
            </select>
        </div>

      <div class="form-group">
        <!-- <label for="kodemk">Kode MK</label> -->
        <br><input type="text" placeholder="Matakuliah / Praktikum" class="form-control" id="nama_mk" name="nama_mk" required='required'>
      </div>

      <div class="form-group">
        <!-- <label for="nim_request">NIM Request</label> -->
        <br><input type="text" placeholder="NRP Mahasiswa" class="form-control" id="nim_request" name="nim_request" required='required'>
      </div>
      <div class="form-group">
        <!-- <label for="nama_request">Nama Request</label> -->
        <br><input type="text" placeholder="Nama Mahasiswa" class="form-control" id="nama_request" name="nama_request" required='required'>
      </div>
      <div class="form-group">
        <!-- <label for="nama_request">Nama Request</label> -->
        <br><input type="number" placeholder="No Telp / No Whatsapp" class="form-control" id="nama_nohp" name="nama_nohp" required='required'>
      </div>
      <div class="form-group">
        <!-- <label for="nama_labs">Nama Labs</label> -->
        <br><input type="text" placeholder="Dari Laboratorium" class="form-control" id="nama_labs" name="nama_labs" required='required'>
      </div>
      <div class="form-group">
        <!-- <label for="volume_bkimia">Volume BKimia</label> -->
        <br><input type="number" placeholder="gram / liter" class="form-control" id="volume_bkimia" name="volume_bkimia" step="any" required='required'>
      </div>

<div class="control-group">
  <div class="form-group floating-label-form-group controls">
    <br>
    <input type="date" class="form-control" name="tgl_digunakan" placeholder="Tanggal Digunakan" id="tanggaldigunakan" required data-validation-required-message="Silakan pilih tanggal Kapan Anda Akan Menggunakannya.">
    <p class="help-block text-danger"></p>
  </div>
</div>


      <br><button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
                    </div>
                </div>
            </div> <br><br>

<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tabel Request</h2>
                    <div class="container mt-4"><table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                        <tr>
                          <th>Status</th>
                          <th>Nota Request</th>
                          <th>Nama Request</th>
                          <th>Request Kimia</th>
                          <th>Volume Request</th>
                          <th>Tanggal Digunakan</th>
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
            ?></td>
           <td><?php echo $val['nota_bkimia'];?></td>
           <td><?php echo $val['nama_request'];?></td>
           <td><?php echo $val['nama_bkimia'];?></td>
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
           <td><?php echo date("Y-m-d", strtotime($val['tanggal_digunakan'])); ?></td>
       </tr>
<?php
        }//endFOREACH
    }//endIF
?>
                      </tbody>
                    </table></tr>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">

            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>
        <!-- Grafik Modals-->
        <!-- Grafik Modal 1-->
        <div class="Grafik-modal modal fade" id="GrafikModal1" tabindex="-1" aria-labelledby="GrafikModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Grafik Modal - Title-->
                                    <h2 class="Grafik-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Grafik Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets');?>/frontend/assets/img/Grafik/cabin.png" alt="..." />
                                    <!-- Grafik Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grafik Modal 2-->
        <div class="Grafik-modal modal fade" id="GrafikModal2" tabindex="-1" aria-labelledby="GrafikModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Grafik Modal - Title-->
                                    <h2 class="Grafik-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Grafik Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets');?>/frontend/assets/img/Grafik/cake.png" alt="..." />
                                    <!-- Grafik Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grafik Modal 3-->
        <div class="Grafik-modal modal fade" id="GrafikModal3" tabindex="-1" aria-labelledby="GrafikModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Grafik Modal - Title-->
                                    <h2 class="Grafik-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Grafik Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets');?>/frontend/assets/img/Grafik/circus.png" alt="..." />
                                    <!-- Grafik Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grafik Modal 4-->
        <div class="Grafik-modal modal fade" id="GrafikModal4" tabindex="-1" aria-labelledby="GrafikModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Grafik Modal - Title-->
                                    <h2 class="Grafik-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Grafik Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets');?>/frontend/assets/img/Grafik/game.png" alt="..." />
                                    <!-- Grafik Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grafik Modal 5-->
        <div class="Grafik-modal modal fade" id="GrafikModal5" tabindex="-1" aria-labelledby="GrafikModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Grafik Modal - Title-->
                                    <h2 class="Grafik-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Grafik Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets');?>/frontend/assets/img/Grafik/safe.png" alt="..." />
                                    <!-- Grafik Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grafik Modal 6-->
        <div class="Grafik-modal modal fade" id="GrafikModal6" tabindex="-1" aria-labelledby="GrafikModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Grafik Modal - Title-->
                                    <h2 class="Grafik-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Grafik Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo base_url('assets');?>/frontend/assets/img/Grafik/submarine.png" alt="..." />
                                    <!-- Grafik Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>