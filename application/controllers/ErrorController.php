<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorController extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Limbah B3 - Dashboard',
			'content' => 'backend/backend_error'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

}
