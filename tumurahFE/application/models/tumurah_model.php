<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tumurah_model extends CI_Model {

    public function product_show()
    {
		// storprocedure 
		/* 
			SELECT c.description as merk, b.description as cat, d.location as imgurl, a.* 
			FROM product a 
			LEFT JOIN product_category b ON a.product_category_id = b.product_category_id 
			LEFT JOIN product_manufacture c ON c.product_manufacture_id = a.product_manufacture_id 
			LEFT JOIN product_image d ON a.product_id=d.product_id ORDER BY product_id DESC
		*/
        $query = $this->db->query("CALL `product_show` ()");
        return $query;
    }
    public function cat_show()
    {
		// storprocedure 
		/* 
			SELECT * FROM product_category
		*/
        $query = $this->db->query("CALL `category_list` ()");
        return $query;
    }
}