<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class Category extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'category';
    }

    public function getCategoryInfo($categoryID)
    {	
    	
    	$this->db->select('sub_category.id,sub_category.name,category.info,sub_category.info,sub_category.icon');
		$this->db->from('category');
		$this->db->join('sub_category', 'category.id = sub_category.category_id');
		$this->db->where('category.id',$categoryID);
		$query = $this->db->get();

		return ($query->result());
    } 
}

 ?>