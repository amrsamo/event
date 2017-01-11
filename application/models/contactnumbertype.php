<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class Contactnumbertype extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'contact_type';
    } 
}

 ?>