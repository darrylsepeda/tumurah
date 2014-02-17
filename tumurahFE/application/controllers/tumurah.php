<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Tumurah extends MY_Controller {
	/* FUNCTION SATUAN */
	
	public function check_db($pass){
		$user=$this->input->post('user');
		$result = $this->tumurah_model->login($user, $pass);
		
		if($result){
			$sess_array = array();
			foreach($result as $row){
				$sess_array = array(
					'id' => $row->user_id,
					'first' => $row->first_name,
					'last'=>$row->last_name
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}	
			return TRUE;
		}else{
			$this->form_validation->set_message('check_db','Invalid username or password');
			return FALSE;
		}
	}
	public function verifyLogin(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user','Email','trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('pass','Password','trim|required|xss_clean|callback_check_database');
		
		if($this->form_validation->run()==FALSE){
			$this->loadPage("page/index");
		}else{
			$pass=$this->input->post('pass');
			$result = $this->check_db($pass);
			$this->loadPage("page/index");
			
		}
	}
	public function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		$this->loadPage('page/index');
	}
	/* /.FUNCTION SATUAN */
	
	/* FUNCTION PER PAGE */
	public function index()
	{
		$data['prod'] = $this->tumurah_model->product_show();
		$data['base_img'] = $this->base_img();
		//$this->load->view('index2',$data);
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
	public function productlist($start=0)
	{
        $data['brand'] = $this->security->xss_clean(strip_image_tags($this->input->post('brand')));
        $data['category'] = $this->security->xss_clean(strip_image_tags($this->input->post('category')));
        
        echo $data['brand'];
        echo $data['category'];
        
        $config['per_page'] = 7;
        $data['product'] = $this->tumurah_model->product(NULL,$config['per_page'],$start);
       
        $config['base_url'] = site_url('tumurah/productlist');
        $config['total_rows'] = $data['product']['product']->num_rows();
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a><b>';
        $config['cur_tag_close'] = '</a></b></li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        
		$this->loadPage('page/productlist',$data);
	}
	public function productview()
	{
		$this->loadPage('page/productview');
	}
	public function faq()
	{
		$this->loadPage('page/faq');
	}
	public function contact()
	{
		$this->loadPage('page/contactus');
	}
	public function termcondition()
	{
		$this->loadPage('page/termcondition');
	}
	public function paymentconfirm()
	{
		$this->loadPage('page/paymentconfirm');
	}
}
