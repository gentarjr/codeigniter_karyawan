<?php

class Controller_login extends CI_Controller{
	
	public function __construct(){
		parent:: __construct();
		$this->load->model('Models');
		$this->load->library('session');
		$this->load->helper(array('form','url','security'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login_aplikasi(){
		$this->form_validation->set_rules('nik-login', 'Nik', 'trim|xss_clean|callback_username_check');
		$this->form_validation->set_rules('pass-login', 'Password');
		$nik = $this->input->post('nik-login');
		$pass = $this->input->post('pass-login');

		$data_login = array(
			'nik' => $nik,
			'password' => $pass
		);
		// var_dump($data_login['password'] == '');
		// exit();
		if ($data_login['nik'] == '' && $data_login['password'] == '') {
			redirect(site_url('Controller_login'), 'refresh');
			return FALSE;
		}else if($data_login['nik'] == '' || $data_login['nik'] == null){
			redirect(site_url('Controller_login'), 'refresh');
			return FALSE;
		}else if($data_login['password'] == '' || $data_login['password'] == null){
			redirect(site_url('Controller_login'), 'refresh');
			return FALSE;
		}else{
			$link = 'loginSistem';
			$list = $this->Models->post_data_karyawan($data_login, $link);
			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode($list));
			$array = preg_split('/(,|:)/', $list);
			if (count($array) > 1) {
				$data_session = array(
					'nik' => $nik,
					'status' => 'login',
					'nama' => $array[3],
					'akses' => $array[7]
				);
				$this->session->set_userdata($data_session);
				redirect(site_url('Controller_home'), 'refresh');
			}else{
				redirect(site_url('Controller_login'), 'refresh');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('Controller_login'), 'refresh');
	}
}
?>