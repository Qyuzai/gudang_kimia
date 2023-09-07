<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backendhome extends CI_Controller {

	public function __construct() {
		date_default_timezone_set('Asia/Jakarta');
		parent::__construct();
		$this->load->database();
    }

	public function index()
	{
		// $this->load->helper('login');
		// if(!cek_login()){
			redirect(base_url("backendhome/admin"), 'refresh');
		// }
	}

	public function admin(){
		$data = array(
			'title' => 'Monitoring LAB - Dashboard',
			'content' => 'backend/dashboard_base'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function login(){
		$data = array(
			'title' => 'Monitoring LAB - Login'
		);
		$this->load->view('backend/login_page',$data);
	}

	public function signin(){
		var_dump($_POST);exit();
        $user   = $this->input->post('inputUsername');
        $pssd   = $this->input->post('inputPassword');
		$check  = $this->getData->masuk($user,$pssd);
        if(isset($check)){
            $this->session->set_userdata(array(
                'status_login'  => 'Oke',
                'username_id'   => $check[0]['username_id'],
                'username_u'    => $check[0]['username_u'],
                'nama'          => $check[0]['nama'],
                'email'			=> $check[0]['email'],
                'hak_akses'		=> $check[0]['hak_akses'],
                'akses_sebagai'	=> $check[0]['keterangan_ha']
            ));
            $this->db->where('username_u',$this->session->userdata('username_u'));
            switch ($check[0]['hak_akses']) {
            	case 0:
            		redirect(base_url("home/dashboard"), 'refresh');
            		break;
				case 1:
            		redirect(base_url("home/dashboard"), 'refresh');
            		break;
				case 2:
            		redirect(base_url("martshop/dashboard"), 'refresh');
            		break;
				case 3:
            		redirect(base_url("home/dashboard"), 'refresh');
            		break;
				case 4:
            		redirect(base_url("home/dashboard"), 'refresh');
            		break;
            }			
        }else{
        	$this->pesan_login();
            redirect(base_url("admin/login"));
        }
	}

	public function register(){
		$data = array(
			'title' => 'Monitoring LAB - Registrasi'
		);
		$this->load->view('backend/registrasi_page',$data);
	}

	public function list_user(){
		$get_list_user = $this->getData->getTable('tbl_user','*');
		$data = array(
			'title' => 'Monitoring LAB - List User',
			'data_user' => $get_list_user,
			'content' => 'backend/backend_list_user'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function form_user(){
		$get_role = $this->getData->getTable('tbl_role_user','*');
		$data = array(
			'title' => 'Monitoring LAB - Tambah User',
			'data_role' => $get_role,
			'content' => 'backend/backend_form_user'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function list_bkimia(){
		$get_list_item = $this->getData->getTable('tbl_m_bkimia','*');
		$data = array(
			'title' => 'Monitoring LAB - List Bahan Kimia',
			'data_bkimia' => $get_list_item,
			'content' => 'backend/backend_list_bkimia'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function form_bkimia(){
		$get_list_item = $this->getData->getTable('tbl_m_bkimia','*');
		$data = array(
			'title' => 'Monitoring LAB - Form Bahan Kimia',
			'data_bkimia' => $get_list_item,
			'content' => 'backend/backend_form_bkimia'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function update_form_bkimia($get_id){ //($table,$kolom,$set,$val_set){
		$get_list_item = $this->getData->getTableWhere('tbl_m_bkimia','*','kode_bkimia',$get_id);
		$data = array(
			'title' => 'Monitoring LAB - Form Update Bahan Kimia',
			'data_bkimia' => $get_list_item,
			'content' => 'backend/backend_update_form_bkimia'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function list_item(){
		$get_list_item = $this->getData->getTable('v_listbkimia','*');
		$data = array(
			'title' => 'Monitoring LAB - List Barang',
			'data_bkimia' => $get_list_item,
			'content' => 'backend/backend_list_item'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function form_item(){
		$get_list_item = $this->getData->getTable('tbl_m_bkimia','*');
		$get_list_sifat = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',1);
		$get_list_kategori = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',2);
		$get_list_keterangan_bkimia = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',3);
		$get_list_statuskimia = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',4);

	        $get_bkimia = array();
	        foreach ($get_list_item as $row) {
	            $get_bkimia[] = array(
	                'id' => $row['kode_bkimia'],
	                'text' => $row['nama_bkimia']
	            );
	        }

		$data = array(
			'title' => 'Monitoring LAB - Form Input',
			'list_bkimia' => $get_bkimia,
			'sifat_bkimia' => $get_list_sifat,
			'kategori_bkimia' => $get_list_kategori,
			'keterangan_bkimia' => $get_list_keterangan_bkimia,
			'statuskimia' => $get_list_statuskimia,
			'content' => 'backend/backend_form_item'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function form_detail_item($idget){
		$get_list_item = $this->getData->getTable('tbl_m_bkimia','*');
		$get_listdetail_item = $this->getData->getTableLeftJoinWhere('tbl_m_bkimia.*,tbl_bkimia_detail.*','tbl_bkimia_detail.kode_iddetail','tbl_m_bkimia','tbl_bkimia_detail','tbl_m_bkimia.kode_bkimia = tbl_bkimia_detail.kode_bkimia',$idget);
		$get_list_sifat = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',1);
		$get_list_kategori = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',2);
		$get_list_keterangan_bkimia = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',3);
		$get_list_statuskimia = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',4);

	        $get_bkimia = array();
	        foreach ($get_list_item as $row) {
	            $get_bkimia[] = array(
	                'id' => $row['kode_bkimia'],
	                'text' => $row['nama_bkimia']
	            );
	        }

		$data = array(
			'title' => 'Monitoring LAB - Form Input',
			'list_bkimia' => $get_bkimia,
			'detailslist_bkimia' => $get_listdetail_item,
			'sifat_bkimia' => $get_list_sifat,
			'kategori_bkimia' => $get_list_kategori,
			'keterangan_bkimia' => $get_list_keterangan_bkimia,
			'statuskimia' => $get_list_statuskimia,
			'content' => 'backend/backend_update_form_item'
		);
		// var_dump($data['detailslist_bkimia']);exit();
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function list_limbah(){
		$get_list_limbah = $this->getData->getTable('v_listlimbahbkimia','*');
		$data = array(
			'title' => 'Monitoring LAB - List Limbah Bahan Kimia',
			'datalimbah_bkimia' => $get_list_limbah,
			'content' => 'backend/backend_list_limbah_bkimia'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function form_limbah(){
		$get_list_sifat = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',1);
		$get_list_kategori = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',2);
		$get_list_keterangan_bkimia = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',3);
		$get_list_statuslimbah = $this->getData->getTableWhere('jenis_bkimia','*','kelompok_bkimia',5);
		$data = array(
			'title' => 'Monitoring LAB - Form Limbah Kimia',
			'sifat_bkimia' => $get_list_sifat,
			'kategori_bkimia' => $get_list_kategori,
			'keterangan_bkimia' => $get_list_keterangan_bkimia,
			'status_limbah' => $get_list_statuslimbah,
			'content' => 'backend/backend_form_limbah_bkimia'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function list_request(){
		$get_list_request = $this->getData->getTableRequest();
		$data = array(
			'title' => 'Monitoring LAB - List Request',
			'data_request' => $get_list_request,
			'content' => 'backend/backend_list_request'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function detail_request($get_nota){
		$get_list_request = $this->getData->getTableRequestDetails($get_nota);
		$data = array(
			'title' => 'Monitoring LAB - Detail Request',
			'data_request' => $get_list_request,
			'content' => 'backend/backend_form_detail_request'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

	public function form_profilweb(){
		$get_profil = $this->getData->getTable('tbl_profil_web','*');
		$data = array(
			'title' => 'Monitoring LAB - Update Profil Webs',
			'get_data' => $get_profil,
			'content' => 'backend/backend_form_profil'
		);
		$this->load->view('backend/backend_wrapper',$data);
	}

/*====================================================================== INSERT DATA*/

	public function do_upload_form_item() {
		// var_dump($_POST);exit();
        $upload_path = './uploads/';
        $allowed_types = 'gif|jpg|jpeg|png';
        $max_size = 2048; // 2MB

		$nama_item = $this->input->post('nama_item');
		$sifat_bkimia = $this->input->post('sifat_bkimia');
		$laboran_item = $this->input->post('laboran_item');
		$volume_item = $this->input->post('volume_item');
		$lokasi_item = $this->input->post('lokasi_item');
		$klasifikasi_item = $this->input->post('klasifikasi_item');
		$keterangan_bkimia = $this->input->post('keterangan_bkimia');
		$status_item = $this->input->post('status_item');
		$deskripsi_bkimia = $this->input->post('deskripsi_bkimia');
		if (empty($status_item)) {
			$status_item = 3;
		}

        $file_name = $_FILES['userfile']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        if (!empty($file_name)) {
            $new_file_name = md5(uniqid(rand(), true)) . '.' . $file_ext;
            $destination = $upload_path . $new_file_name;

            if ($_FILES['userfile']['size'] > $max_size * 1024) {
                $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Ukuran file terlalu besar.</strong> Maksimal 2MB.</div>');
                redirect(base_url("backendhome/form_item"), 'refresh');
                return;
            }

            if (!in_array($file_ext, explode('|', $allowed_types))) {
                $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Tipe file tidak didukung.</strong> Hanya diperbolehkan GIF, JPG/JPEG, dan PNG.</div>');
                redirect(base_url("backendhome/form_item"), 'refresh');
                return;
            }

            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $destination)) {
                // Pemotongan gambar ke ukuran 500x500 dengan teknik center crop
                $image = imagecreatefromstring(file_get_contents($destination));
                $width = imagesx($image);
                $height = imagesy($image);

                if ($width > $height) {
                    $new_width = 500;
                    $new_height = round($height * ($new_width / $width));
                } else {
                    $new_height = 500;
                    $new_width = round($width * ($new_height / $height));
                }

                $x_offset = ($new_width - 500) / 2;
                $y_offset = ($new_height - 500) / 2;

                $new_image = imagecreatetruecolor(500, 500);
                imagecopyresampled($new_image, $image, 0, 0, $x_offset, $y_offset, 500, 500, $new_width, $new_height);

                // Simpan gambar yang telah dipotong
                imagejpeg($new_image, $destination);

                imagedestroy($image);
                imagedestroy($new_image);

                $gambar = $new_file_name;
            } else {
                $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Gagal</strong> mengunggah file gambar.</div>');
                redirect(base_url("backendhome/form_item"), 'refresh');
                return;
            }
        } else {
            $gambar = ''; // Set nilai gambar ke string kosong jika tidak ada file yang diunggah
        }

            $data = array(
				'kode_bkimia' => $nama_item,
				'jenis_bkimia' => $sifat_bkimia,
				'petugas' => $laboran_item,
				'volume_bkimia' => $volume_item,
				'lokasi_simpan_bkimia' => $lokasi_item,
				'kategori_bkimia' => $klasifikasi_item,
				'keterangan_bkimia' => $keterangan_bkimia,
				'status_bkimia' => $status_item,
				'tanggal_input' => date("Y-m-d h:i:s"),
				'deskripsi' => $deskripsi_bkimia,
				'upimage' => $gambar
            );
        $this->getData->insertData('tbl_bkimia_detail', $data);
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'Tambah Data Transaksi Bahan Kimia',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		$this->getData->insertData('history_data',$data_history);
        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Success</strong> Data barang berhasil diunggah dan disimpan.</div>');
        redirect(base_url("backendhome/form_item"), 'refresh');
    }

    public function form_profil_web(){
    	// var_dump($_POST);exit();
    	$descr = $this->input->post('profil_bkimia');
    	$chek_data = $this->getData->getTable('tbl_profil_web','*');
    	// var_dump($chek_data[0]['id_profil_web']);exit(); updateData($tabel,$data,$id,$kolom)
    	if (empty($descr)) {
    		redirect(base_url("backendhome/form_profilweb"), 'refresh');
    	}else if(empty($chek_data)){
			$data = array('profil_web' => $descr);
			$this->getData->insertData('tbl_profil_web', $data);
			$data_history = array(
				'username_id' => NULL,
				'deskripsi_history' => 'Tambah Data Profil Perusahaan',
				'tanggal_input' => date("Y-m-d h:i:s")
			);
			
			$this->getData->insertData('history_data',$data_history);
			redirect(base_url("backendhome/form_profilweb"), 'refresh');
    	}else{
    		$data = array('profil_web' => $descr);
			$this->getData->updateData('tbl_profil_web', $data, $chek_data[0]['id_profil_web'],'id_profil_web');
			$data_history = array(
				'username_id' => NULL,
				'deskripsi_history' => 'Update Data Profil Perusahaan',
				'tanggal_input' => date("Y-m-d h:i:s")
			);
			
			$this->getData->insertData('history_data',$data_history);
			redirect(base_url("backendhome/form_profilweb"), 'refresh');
    	}
    }

    public function input_bkimia(){
    	// var_dump($_POST);exit();
		$nama_item = $this->input->post('nama_item');
		$deskripsi_bkimia = $this->input->post('deskripsi_bkimia');

		$data = array(
			'nama_bkimia' => $nama_item,
			'deskripsi_bkimia' => $deskripsi_bkimia
		);

		$this->getData->insertDataSet('tbl_m_bkimia', $data,'kode_bkimia');
		
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'Tambah Data Bahan Kimia',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		
		$this->getData->insertData('history_data',$data_history);
		$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Success</strong> Data barang berhasil diunggah dan disimpan.</div>');

		redirect(base_url("backendhome/form_bkimia"), 'refresh');
    }

    public function input_user(){
    	// var_dump($_POST);exit();
		$get_username = $this->input->post('get_username');
		$get_password = $this->input->post('get_password');
		$get_nama = $this->input->post('get_nama');
		$get_email = $this->input->post('get_email');
		$get_hp = $this->input->post('get_hp');
		$get_role = $this->input->post('get_role');

		$data = array(
			'username_u' => $get_username,
			'password_p' => $get_password,
			'nama' => $get_nama,
			'email' => $get_email,
			'nohp' => $get_hp,
			'hak_akses' => $get_role
		);

		$this->getData->insertDataSet('tbl_user', $data,'username_id');
		
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'Tambah Data User',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		
		$this->getData->insertData('history_data',$data_history);
		$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Success</strong> Data barang berhasil diunggah dan disimpan.</div>');

		redirect(base_url("backendhome/list_user"), 'refresh');

    }

    public function input_limbah(){
    	// var_dump($_POST);exit();
		$deskripsi_bkimia = $this->input->post('deskripsi_bkimia');
		$zatkimia = $this->input->post('zatkimia');
		$laboran_limbah = $this->input->post('laboran_limbah');
		$volume_limbah = $this->input->post('volume_limbah');
		$lokasi_limbah = $this->input->post('lokasi_limbah');
		$asal_limbah = $this->input->post('asal_limbah');
		$klasifikasi_limbah = $this->input->post('klasifikasi_limbah');
		$keterangan_bkimia = $this->input->post('keterangan_bkimia');
		$status_limbah = $this->input->post('status_limbah');
    	$getkode = $this->getData->kode_limbah($zatkimia);
    	// var_dump($getkode);exit();
		$data = array(
			'kode_nama_limbah' => $getkode,
			'keterangan_limbah' => $deskripsi_bkimia,
			'asal_limbah_lab' => $asal_limbah,
			'jenis_klasifikasi_limbah' => $klasifikasi_limbah,
			'volume_limbah' => $volume_limbah,
			'zat_bkimia' => $zatkimia,
			'kelompok_bkimia' => $keterangan_bkimia,
			'tanggal_pengisian' => date("Y-m-d h:i:s"),
			'nama_laboran' => $laboran_limbah,
			'lokasi_simpan_limbah' => $lokasi_limbah,
			'status_lokasi' => $status_limbah
		);

		$this->getData->insertDataSet('tbl_limbah_bkimia', $data,'id_limbah');
		
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'Menambahkan Data Limbah',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		
		$this->getData->insertData('history_data',$data_history);
		$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Success</strong> Data barang berhasil diunggah dan disimpan.</div>');

		redirect(base_url("backendhome/list_limbah"), 'refresh');
    }

/*====================================================================== UPDATE DATA*/
	public function UpdateListBKimia($get_id){
		// var_dump($_POST);exit();
		// Mendapatkan data lama dari database
		$data_get = $this->db->get_where('tbl_m_bkimia', array('kode_bkimia' => $get_id))->row_array();

		// Proses update data
		$data_baru = array();
		$nama_bkimia_baru = $this->input->post('nama_item');
		$deskripsi_bkimia_baru = $this->input->post('deskripsi_bkimia');
		if ($nama_bkimia_baru != $data_get['nama_bkimia']) {
			$data_baru['nama_bkimia'] = $nama_bkimia_baru;
		}

		if ($deskripsi_bkimia_baru != $data_get['deskripsi_bkimia']) {
			$data_baru['deskripsi_bkimia'] = $deskripsi_bkimia_baru;
		}

		// Jika ada data yang berubah, lakukan update
		if (!empty($data_baru)) {
			$this->db->where('kode_bkimia', $get_id);
			$this->db->update('tbl_m_bkimia', $data_baru);
		}
		// Redirect ke halaman lain (misalnya halaman tampilan data)
		$this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Success</strong> Data barang berhasil diunggah dan disimpan.</div>');
		redirect(base_url("backendhome/update_form_bkimia/".$get_id), 'refresh');
	}

	public function UpdateSetRequestProses($get_nota){
		$data_baru = array();
		$data_baru['status_request'] = 2;
		$this->db->where('nota_bkimia', $get_nota);
		$this->db->update('tbl_request_bkimia', $data_baru);
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'Dirubah Ke Proses',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		$this->getData->insertData('history_data',$data_history);
		redirect(base_url("backendhome/detail_request/".$get_nota), 'refresh');
	}

	public function UpdateSetRequestSelesai($get_nota){
		$data_baru = array();
		$data_baru['status_request'] = 3;
		$this->db->where('nota_bkimia', $get_nota);
		$this->db->update('tbl_request_bkimia', $data_baru);
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'Dirubah Ke Selesai',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		$this->getData->insertData('history_data',$data_history);
		redirect(base_url("backendhome/detail_request/".$get_nota), 'refresh');
	}

	public function UpdateSetRequestBatal($get_nota){
		$data_baru = array();
		$data_baru['status_request'] = 0;
		$this->db->where('nota_bkimia', $get_nota);
		$this->db->update('tbl_request_bkimia', $data_baru);
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'Dibatalkan',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		$this->getData->insertData('history_data',$data_history);
		redirect(base_url("backendhome/detail_request/".$get_nota), 'refresh');
	}

	public function do_upload_form_detail_item($get_id){
		// var_dump($_POST);exit();
		$sifat_bkimia = $this->input->post('sifat_bkimia');
		$laboran_item = $this->input->post('laboran_item');
		$volume_item = $this->input->post('volume_item');
		$lokasi_item = $this->input->post('lokasi_item');
		$klasifikasi_item = $this->input->post('klasifikasi_item');
		$keterangan_bkimia = $this->input->post('keterangan_bkimia');
		$data_update = array();
		$data_update['petugas'] = $laboran_item;
		$data_update['volume_bkimia'] = $volume_item;
		$data_update['lokasi_simpan_bkimia'] = $lokasi_item;
		if (!empty($sifat_bkimia)) {
			$data_update['jenis_bkimia'] = $sifat_bkimia;
		}
		if (!empty($klasifikasi_item)) {
			$data_update['kategori_bkimia'] = $klasifikasi_item;

		}
		if (!empty($keterangan_bkimia)) {
			$data_update['keterangan_bkimia'] = $keterangan_bkimia;
		}		
		// var_dump($data_update);exit();
		$this->db->where('kode_iddetail', $get_id);
		$this->db->update('tbl_bkimia_detail', $data_update);
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'update data bahan kimia: '.$get_id.'',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		$this->getData->insertData('history_data',$data_history);
		redirect(base_url("backendhome/form_detail_item/".$get_id), 'refresh');
	}

/*====================================================================== DELETE DATA*/
	public function DeleteListBkimia($get_id){
		// var_dump($get_id);exit();
		$data_update['is_delete'] = 1;
		$this->db->where('kode_bkimia', $get_id); //hapus data di tabel tbl_bkimia_detail (menghapus di pembelian bahan kimia)
		$this->db->update('tbl_bkimia_detail', $data_update);
		$this->db->where('kode_bkimia', $get_id); //hapus data di tabel tbl_request_bkimia (menghapus di request bahan kimia)
		$this->db->update('tbl_request_bkimia', $data_update);
		$this->db->where('kode_bkimia', $get_id); //hapus data di tabel tbl_m_bkimia (menghapus data master bahan kimia)
		$this->db->update('tbl_m_bkimia', $data_update);
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'Data master kimia dihapus',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		$this->getData->insertData('history_data',$data_history);
		//$this->getData->deleteData('tbl_m_bkimia',$get_id,'kode_bkimia');
		$this->session->set_flashdata('error', '<div class="alert alert-warning alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Data Telah Terhapus,</strong> data yang telah terhapus tidak bisa dipulihkan.</div>');
		redirect(base_url('backendhome/list_bkimia'));
	}

	public function DeleteDetailBkimia($get_id){
		// var_dump($get_id);exit();
		$data_update['is_delete'] = 1;
		$this->db->where('kode_iddetail', $get_id); //hapus data di tabel tbl_bkimia_detail (menghapus di pembelian bahan kimia)
		$this->db->update('tbl_bkimia_detail', $data_update);
		$data_history = array(
			'username_id' => NULL,
			'deskripsi_history' => 'Data Detail kimia dihapus',
			'tanggal_input' => date("Y-m-d h:i:s")
		);
		$this->getData->insertData('history_data',$data_history);
		//$this->getData->deleteData('tbl_m_bkimia',$get_id,'kode_bkimia');
		$this->session->set_flashdata('error', '<div class="alert alert-warning alert-dismissible " role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>Data Telah Terhapus,</strong> data yang telah terhapus tidak bisa dipulihkan.</div>');
		redirect(base_url('backendhome/list_item'));
	}

}