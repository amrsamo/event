<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class Media extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'media';
    } 

    public function searchResultsFromMedia($input)
    {	
    	$this->db->select('* ,user.id as user_id, profile_picture.source_url as user_source_url, media.creation_date as media_creation_date, media.id as media_id, media.source_url as source_url');
        $this->db->from('media');
        $this->db->join('user', 'media.user_id = user.id','inner');
        $this->db->join('profile_picture', 'media.user_id = profile_picture.user_id','inner');
        $this->db->join('user_type', 'user.type = user_type.id','inner');
        $this->db->or_like(array('title'=>$input,'description'=>$input));
        $this->db->order_by("media.creation_date", "desc");
        $query = $this->db->get();
       
        return ($query->result());
    }
}

 ?>