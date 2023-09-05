        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="#">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

<script>
    const form = document.getElementById('inputForm');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      const inputIntDouble = document.getElementById('inputIntDouble').value;
      
      if (isInt(inputIntDouble) || isDouble(inputIntDouble)) {
        showError('inputIntDouble', 'Harap masukkan bilangan bulat.');
        return;
      }
      
      // Lakukan tindakan lain dengan nilai inputIntDouble dan inputIntDouble
      console.log('Bilangan Bulat (int):', parseInt(inputIntDouble));
      console.log('Bilangan Desimal (double):', parseFloat(inputIntDouble));
      
      // Reset form
      form.reset();
    });
    
    function isInt(value) {
      return /^[0-9]+$/.test(value);
    }
    
    function isDouble(value) {
      return /^[0-9]+([,.][0-9]+)?$/.test(value);
    }
    
    function showError(inputId, errorMessage) {
      const errorDiv = document.querySelector(`#${inputId} + .error-message`);
      errorDiv.textContent = errorMessage;
    }
  </script>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- PNotify -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/skycons/skycons.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/starrr/dist/starrr.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url('assets');?>/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets');?>/backend/build/js/custom.min.js"></script>

  <script>
  $(document).ready(function() {
    // Data buah yang telah Anda sediakan
    var buahData = <?php 
    if (empty($list_bkimia)) {
      echo "null";
    }else{
      echo json_encode($list_bkimia);
    }
    ?>;

    // Inisialisasi autocomplete dengan select2
    $("#pilihan").select2({
      data: buahData,
      placeholder: "Ketik untuk memilih",
      allowClear: true
    });

    // Tangkap perubahan pada input select
    $("#pilihan").on("change", function() {
      var selectedValue = $(this).val();
      $("#nilai").val(selectedValue); // Isi nilai yang dikirim
    });

    // Mencegah submit form jika tidak ada pilihan yang dipilih
    $("#autocompleteForm").on("submit", function(e) {
      e.preventDefault();
      var selectedValue = $("#pilihan").val();
      if (selectedValue === null || selectedValue === "") {
        alert("Silakan pilih salah satu buah dari daftar.");
      } else {
        // Lakukan submit form
        this.submit();
      }
    });
  });
</script>

  </body>
</html>