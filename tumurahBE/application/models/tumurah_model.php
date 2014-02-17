<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tumurah_model extends CI_Model {

    public function product_manufacture()
    {
        return $this->db->get("product_manufacture");
    }
    
    public function product_category()
    {
        return $this->db->get("product_category");
    }
    
    public function product_status()
    {
        return $this->db->get("product_status");
    }
}