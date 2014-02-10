<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends MY_Controller {
	
	public function index()
	{
		$data['base_img'] = $this->base_img();
		$this->load->view('payment');
	}
}
