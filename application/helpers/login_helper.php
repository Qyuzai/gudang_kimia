<?php
function cek_login(){
      $CI =& get_instance();
      $CI->load->library('session');
      if($CI->session->userdata('status_login') !='Oke'){
          redirect(base_url("backendhome/login"));
      }
}
?>