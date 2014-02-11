<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tumurah extends MY_Controller {
	public function index()
	{
		$data['prod'] = $this->tumurah_model->product_show();
		$this->loadPage("index2",$data);
	}
	
	public function about()
	{
		$this->loadPage('page/aboutus');
	}
}
