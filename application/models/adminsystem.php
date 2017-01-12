<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class adminsystem extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'admin';
    } 



    public function getUserByUsername($username)
    {
        $this->db->select('*, user.id as user_id');
        $this->db->from('user');
        $this->db->join('user_type', 'user.type = user_type.id','inner');
        $this->db->where_in('user.username',$username);
        $query = $this->db->get();

        return ($query->result());
    }




    public function insert($user)
    {   
        unset($user['verify']);
        
    	$random_key = uniqid();
    	$password = $this->hash_password($user['password'],$random_key);

    	$user['password']   = $password;
    	$user['random_key'] = $random_key;

    	$process = $this->Adminuser->put($user);

    	if($process == 1)
        {
    		return true;
        }
    	return false;

    }

    public function checkLogin($username,$password)
    {
    	$user = $this->Adminuser->get(array("username"=>$username));
    	if(!empty($user))
    	{
    		$user = $user[0];
    		$random_key = $user->random_key;
    		$checkPassword = $this->hash_password($password,$random_key);
    		if($checkPassword == $user->password && $user->type == 6) // Check if its an admin Account
    			return $user;
    	}

    	return false;

    }

    public function changePassword($user_id,$password,$random_key)
    {   
        $process = $this->Adminuser->update(array("password"=>$this->hash_password($password,$random_key)),array("user_id"=>$user_id));
        if($process == 1)
            return true;
        return false;
    }

    public function hash_password($password,$random_key)
    {
    	return md5($password.md5($random_key));
    }

    

}

 ?>