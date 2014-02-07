<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tumurah_cms extends CI_Controller {
	
	public function index()
	{
	   $data['title'] = "Welcome to `Tumurah` Content Management System";
       $this->load->view('backend/index',$data);
	}

	public function _example_output($output = null)
	{
        $this->load->view('backend/index',$output);
	}
    
    public function product(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('product');
			$crud->set_subject('Product');
            
			$crud->columns('name','description','stock_level','weight_kg','colour','price_current');
            $crud->set_relation('product_category_id','product_category','description');
            $crud->set_relation('product_manufacture_id','product_manufacture','description');
            $crud->set_relation('product_status_id','product_status','description');
            
            $crud->required_fields('product_manufacture_id','product_category_id','product_status_id','name','description','stock_level','weight_kg','price_current','currency');

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    
    public function product_image(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('product_image');
			$crud->set_subject('Product Image');
			$crud->columns('product_id','location','caption');
            $crud->set_relation('product_id','product','{product_id} - {name}');
            $crud->display_as('location','image');
            
            $crud->set_field_upload('location','assets/uploads/files');
            
            $crud->required_fields('product_id','location');

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    
    public function product_category(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('product_category');
			$crud->set_subject('Product Category');
            $crud->required_fields('description');

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    
    public function product_manufacture(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('product_manufacture');
			$crud->set_subject('Product Manufacture');
            $crud->required_fields('description');

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }

    public function product_rating(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('product_rating');
			$crud->set_subject('Product Rating');
            $crud->required_fields('user_id','product_id','rating');
            
            $crud->set_relation('user_id','users','{user_id} - {first_name} {last_name}');
            $crud->set_relation('product_id','product','{product_id} - {name}');

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    
    public function product_comment(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('product_comment');
			$crud->set_subject('Product Comment');
            $crud->required_fields('user_id','product_id','rating');
            
            $crud->set_relation('user_id','users','{user_id} - {first_name} {last_name}');
            $crud->set_relation('product_id','product','{product_id} - {name}');

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    
    public function users(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('users');
			$crud->set_subject('User');
            $crud->unset_fields('date_created','date_last_login');
            $crud->unset_columns('date_created','date_last_login','password');
            $crud->callback_column('is_subscribed',array($this,'is_subscribed'));
            $crud->set_relation('user_status_id','user_status','description');
            $crud->display_as('user_status_id','User Status');
            
            $crud->set_rules('email','Email ','valid_email');
            $crud->required_fields('user_status_id','first_name','email','password','is_subscribed','date_created','date_last_login');

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    
	public function is_subscribed($value, $row)
	{
		if($value == 1) return $value.' (Yes)';
        else if($value == 0) return $value.' (No)';
	}
    
    public function customer(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('customer');
			$crud->set_subject('Customer');

            $crud->set_relation('user_id','users','{user_id} - {first_name} {last_name}');
            $crud->unset_edit();
            $crud->required_fields('user_id');

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    
    public function staff(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('staff');
			$crud->set_subject('Staff');

            $crud->set_relation('user_id','users','{user_id} - {first_name} {last_name}');
            $crud->set_relation('staff_level_id','staff_level','description');
            $crud->required_fields('user_id','staff_level_id');

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    
    public function order(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('order');
			$crud->set_subject('Order');
            
            $crud->set_relation_n_n('products', 'order_item', 'product', 'order_id', 'product_id', '{name} - {qty}','qty');
            $crud->set_relation('user_id','users','{user_id} - {first_name} {last_name}');
            $crud->set_relation('order_status_id','order_status','description');
            $crud->unset_add();
            $crud->unset_edit_fields('user_id','date_placed','products');
            $crud->unset_delete();

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    
    public function invoice(){
        try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('order');
			$crud->set_subject('Order');
            
            $crud->set_relation_n_n('products', 'order_item', 'product', 'order_id', 'product_id', '{name} - {qty}','qty');
            $crud->set_relation('user_id','users','{user_id} - {first_name} {last_name}');
            $crud->set_relation('order_status_id','order_status','description');
            $crud->unset_add();
            $crud->unset_edit_fields('user_id','date_placed','products');
            $crud->unset_delete();

			$output = $crud->render();
            $this->_example_output($output);
            
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
}