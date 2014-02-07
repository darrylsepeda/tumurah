<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tumurah extends CI_Controller {
	$data['base_img'] = '../tumurahBE/assets/uploads/files/';
	
	public function index()
	{
		$data['prod'] = $this->tumurah_model->product_show();
		$this->load->view('index2',$data);
	}
}
