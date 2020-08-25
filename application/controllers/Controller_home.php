<?php
defined('BASEPATH') OR exit('koneksi tidak berhasil');
class Controller_home extends CI_Controller{
	
	function __construct() {
		parent:: __construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Controller_login"));
		}
	}
	public function index(){
		$this->load->view('header');
		$this->load->view('view_home');
		$this->load->view('footer');
	}
}
?>