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
		$cat = $this->tumurah_model->cat_show();
        foreach($cat->result() as $eachcat)
        {
            $data['cat'][$eachcat->product_category_id] = $eachcat->description;
        }
		return $data['cat'];
	}
	
	public function loadPage($page,$data=NULL) 
	{
        $data['cat'] = $this->category();
		$data['base_img'] = $this->base_img();
		$this->load->view("component/head.php",$data);
		$this->load->view($page,$data);
		$this->load->view("component/foot.php",$data);
	}
}
