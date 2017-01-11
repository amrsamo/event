<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class User_Social extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'user_social';
    } 
}

 ?>