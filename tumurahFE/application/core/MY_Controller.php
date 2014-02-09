<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
	
	public function base_img()
	{
		return base_url()."../tumurahBE/assets/uploads/files/";
	}

	public function category()
	{
		$data['cat'] = $this->tumurah_model->cat_show();
		return $data['cat'];
	}
}
