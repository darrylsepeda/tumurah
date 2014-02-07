<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tumurah_model extends CI_Model {

    public function product_show()
    {
        $query = $this->db->query("CALL `product_show` ()");
        return $query;
    }

}