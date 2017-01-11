<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class usertype extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'user_type';
    } 
}

 ?>