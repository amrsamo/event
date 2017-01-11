<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class User_Contact extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'user_contact';
    } 

    public function getUserContacts($user_id)
    {	
    	
    	$this->db->select('user_id,contact_id,value,name');
		$this->db->from('user_contact');
		$this->db->join('contact_type', 'user_contact.contact_id = contact_type.id');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();

		return ($query->result());
    }
}

 ?>