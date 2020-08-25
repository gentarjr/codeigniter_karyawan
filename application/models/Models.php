<?php
class Models extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function post_data_karyawan($data, $link){
		$url = $this->config->item('java_url_karyawan').$link;
		$ch = curl_init($url);
		$json = json_encode($data);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		return $result;
	}
}
?>