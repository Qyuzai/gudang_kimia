 <?php
 if (isset($content)) {
 	if($content){
		$this->load->view($content);
	}else{
		redirect(base_url('backendhome'));
	}
 }
?>