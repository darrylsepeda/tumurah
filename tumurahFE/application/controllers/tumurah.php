<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tumurah extends MY_Controller {
	public function index()
	{
		$data['prod'] = $this->tumurah_model->product_show();
		$this->loadPage("page/index",$data);
	}
	
	public function about()
	{
		$this->loadPage('page/aboutus');
	}
	public function payment()
	{
		$data['kota'] = $this->tumurah_model->city_show();
		$this->loadPage('page/payment', $data);
	}
	public function product()
	{
		$this->loadPage('page/productview');
	}
	public function faq()
	{
		$this->loadPage('page/faq');
	}
	public function contact()
	{
		$this->loadPage('page/contact');
	}
}
