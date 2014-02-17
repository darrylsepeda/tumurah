<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tumurah_model extends CI_Model {
	public function login($user, $pass){
		$this->db->select('user_id, first_name, last_name');
		$this->db->from('users');
		$this->db->where('email', $user);
		$this->db->where('password', $pass);
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
			return $query->result();	
		else
			return false;
	}
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
        $query = $this->db->query("
			SELECT c.description as merk, b.description as cat, d.location as imgurl, a.* 
			FROM product a 
			LEFT JOIN product_category b ON a.product_category_id = b.product_category_id 
			LEFT JOIN product_manufacture c ON c.product_manufacture_id = a.product_manufacture_id 
			LEFT JOIN product_image d ON a.product_id=d.product_id ORDER BY product_id DESC
        ");
        return $query;
    }
    public function cat_show()
    {
		// storprocedure 
		/* 
			SELECT * FROM product_category
		*/
        $query = $this->db->get("product_category");
        return $query;
    }
	public function city_show(){
		$query = $this->db->get("city");
        return $query;
	}
    
    public function product($data=NULL,$limit=0,$start=0){
        $rating = "(
            SELECT * , FORMAT( (
                AVG( rating ) * COUNT( rating ) / ( 
                SELECT MAX( rate_count ) 
                FROM (
                    
                    SELECT COUNT( rating ) AS rate_count
                    FROM  `product_rating` 
                    GROUP BY (
                    product_id
                    ) ) temp )
                ), 1
            )actual_average
            FROM  `product_rating` 
            GROUP BY (
                product_id
            )
        ) temp_rating";
        
        $return['product'] = $this->db->get("product");
        
        $return['product_page'] = $this->db->query("
            SELECT pi.location, p.*, FORMAT(price_current, 2, 'de_DE') AS price_current, temp_rating.actual_average
            FROM (`product` p) 
            LEFT JOIN `product_image` pi ON `pi`.`product_id`=`p`.`product_id`
            LEFT JOIN $rating ON temp_rating.product_id = p.product_id
            GROUP BY `p`.`product_id` LIMIT $limit OFFSET $start
        ");
        return $return;
    }
}