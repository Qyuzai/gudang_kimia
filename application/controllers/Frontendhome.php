<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontendhome extends CI_Controller {

	public function __construct() {
		date_default_timezone_set('Asia/Jakarta');
		parent::__construct();
		$this->load->database();
    }

	public function index()
	{
		redirect(base_url("frontendhome/home"), 'refresh');
	}

	public function home(){
	    // Ambil data penjualan dari database, misalnya menggunakan query
	    $get_data_bkimia = $this->getData->getDataGrafik();
	    $getdata_req_bkimia = $this->getData->getDataGrafikREQ();
	    $data_bkimia = $this->getData->getTableWhereCondition('v_sum_bkimia', '*','volume_bkimia','IS NOT NULL');
	    $get_profil = $this->getData->getTable('tbl_profil_web', '*');
	    $get_list_request = $this->getData->getTableRequest();

	    // $data_grafik = array();
	    // if (!empty($get_data_bkimia)) {
	    //     foreach ($get_data_bkimia as $row) {
	    //         $data_grafik[] = array(
	    //             'nama_bkimia' => $row['nama_bkimia'],
	    //             'volume_bkimia' => $row['volume_bkimia']
	    //         );
	    //     }
	    // }
	    // var_dump($data_bkimia);exit();
	    $data = array(
	        'title' => 'SIM - Monitoring LAB',
	        'data_grafik' => $get_data_bkimia,
	        'data_grafik_req' => $getdata_req_bkimia,
	        'data_bkimia' => $data_bkimia,
	        'data_request' => $get_list_request,
	        'get_data' => $get_profil,
	        'content' => 'frontend/home_base'
	    );
	    // var_dump($data['data_bkimia']);exit();
	    $this->load->view('frontend/frontend_wrapper', $data);
	}

	// ===================================================================================

    public function form_request_bkimia(){
    	// var_dump($_POST);exit();
		$kode_bkimia = $this->input->post('kode_bkimia');
		$nama_mk = $this->input->post('nama_mk');
		$nim_request = $this->input->post('nim_request');
		$nama_request = $this->input->post('nama_request');
		$nama_labs = $this->input->post('nama_labs');
		$nohp = $this->input->post('nama_nohp');
		$volume_bkimia = $this->input->post('volume_bkimia');
		$tgl_digunakan = $this->input->post('tgl_digunakan');
		$noinvoice	= $this->getData->no_invoice_request();
    	$data_bkimia = $this->getData->getTableWhereCondition2('v_sum_bkimia', '*','volume_bkimia','IS NOT NULL','kode_bkimia',$kode_bkimia);
	    $available_volume = floatval($data_bkimia[0]['volume_bkimia']);
	    $jml_available_volume = floatval($data_bkimia[0]['jml_vol']);
	    $massa_volume = $data_bkimia[0]['massa_volume_bkimia'];

	    if ($volume_bkimia > $jml_available_volume && !empty($jml_available_volume)) {
			$this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong> Vaolume yang anda request, tidak boleh lebih dari: '.$jml_available_volume.' '.$massa_volume.'</div>');
			redirect(base_url("frontendhome/home#contact"), 'refresh');
	    } elseif ($volume_bkimia > $available_volume) {
			$this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong> Vaolume yang anda request, tidak boleh lebih dari: '.$available_volume.' '.$massa_volume.'</div>');
			redirect(base_url("frontendhome/home#contact"), 'refresh');
	    }else{
	    	$data = array (
    		'nota_bkimia' => $noinvoice,
			'kode_bkimia' => $kode_bkimia,
			'nama_mk' => $nama_mk,
			'nim_request' => $nim_request,
			'nama_request' => $nama_request,
			'nama_labs' => $nama_labs,
			'nohp_request' => $nohp,
			'volume_bkimia' => $volume_bkimia,
			'tanggal_digunakan' => $tgl_digunakan,
			'tanggal_request' => date("Y-m-d h:i:s"),
			'status_request' => 1
    		);
	    	// var_dump($data);exit();
	    	$this->getData->insertData('tbl_request_bkimia', $data);
	    	redirect(base_url("frontendhome/home#contact"), 'refresh');
    	}
    }

}
