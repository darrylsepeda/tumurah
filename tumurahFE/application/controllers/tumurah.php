<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tumurah extends MY_Controller {
	public function index()
	{
		$data['prod'] = $this->tumurah_model->product_show();
		$data['base_img'] = $this->base_img();
		$this->load->view('index2',$data);
	}
}
