<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class Follower extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'follower';
    } 

    public function insert($data)
    {
    	unset($data['terms']);
    	unset($data['register']);

    	$random_key = uniqid();
    	$password = $this->hash_password($data['password'],$random_key);

    	$data['password']   = $password;
    	$data['password_salt'] = $random_key;
    	unset($data['password_confirmation']);
    	$data['is_valid'] = 0;
    	$data['is_loggedin'] = 0;

    	$process = $this->put($data);

    	if($process == 1)
        {
    		return $this->db->insert_id();
        }
    	return false;
    	
    }

    public function addSubCategories($data)
    {
    	$follower_id = $this->session->userdata['follower']->id;
    	foreach ($data as $x) {
    		$input = array();
    		$input['follower_id'] = 	$follower_id;
    		$input['sub_category_id'] = $x;
    		$check = $this->Base_Model->get($input,'follower_subcategories');
    		if(empty($check))
    		{
    			$this->Base_Model->put($input,'follower_subcategories');
    		}
    	}
    	
    	
    }


    public function login($data)
    {

        $email = $data['email'];
        $password = $data['password'];
        $checkEmail = $this->get(array('email'=>$email));
        if(!empty($checkEmail))
        {
            $follower = $checkEmail[0];

            if($follower->password == $this->hash_password($password,$follower->password_salt))
            {
                $this->session->set_userdata('follower',$follower);
                redirect(base_url().'follower/'.$follower->username);
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
        exit();
    }

    public function hash_password($password,$random_key)
    {
    	return md5($password.md5($random_key));
    }


    public function makeFollow($follower_id,$user_id)
    {
        $data = array();
        $data['follower_id'] = $follower_id;
        $data['user_id'] = $user_id;

        $checkRelation = $this->Follower->get($data,'follower_user');
        if(empty($checkRelation))
        $this->Base_Model->put($data,'follower_user');
    }

    public function checkRelation($input)
    {   
        $checkRelation = $this->Base_Model->get($input,'follower_user');
        if(empty($checkRelation))
            return false;
        return true;
    }


    public function checkLike($input)
    {   
        $checkRelation = $this->Base_Model->get($input,'follower_media');
        if(empty($checkRelation))
            return false;
        return true;
    }



    public function makeUnFollow($follower_id,$user_id)
    {
        $data = array();
        $data['follower_id'] = $follower_id;
        $data['user_id'] = $user_id;

        $this->Base_Model->delete($data,'follower_user');
    }


    public function makeLike($follower_id,$media_id)
    {
        $data = array();
        $data['follower_id'] = $follower_id;
        $data['media_id'] = $media_id;

        $checkLike = $this->Follower->get($data,'follower_media');
        if(empty($checkLike))
        {
            $this->Base_Model->put($data,'follower_media');

            // +1 TO MEDIA LIKES COUNTER
            $this->Media_Statistics->addLike($media_id);
        }
    }


    public function makeUnLike($follower_id,$media_id)
    {
        $data = array();
        $data['follower_id'] = $follower_id;
        $data['media_id'] = $media_id;

        $this->Base_Model->delete($data,'follower_media');

        // -1 TO MEDIA LIKES COUNTER
        $this->Media_Statistics->deleteLike($media_id);
    }


    public function getFollower($username)
    {
        $this->db->select('*, follower.id as follower_id, city.id as city_id, country.id as country_id');
        $this->db->from('follower');
        $this->db->join('country', 'follower.country = country.id','inner');
        $this->db->join('city', 'follower.city = city.id','inner');
        $this->db->where('follower.username',$username);
        $query = $this->db->get();

        return ($query->result());
    }

    public function getFollowing($follower_id)
    {
        $this->db->select('*');
        $this->db->from('follower_user');
        $this->db->join('user', 'follower_user.user_id = user.id','inner');
        $this->db->where('follower_user.follower_id',$follower_id);
        $this->db->order_by("follower_user.creation_date", "desc");
        $query = $this->db->get();

        return ($query->result());
    }

    public function getCategories($follower_id)
    {
        $this->db->select('*');
        $this->db->from('follower_subcategories');
        $this->db->where('follower_id',$follower_id);
        $query = $this->db->get();

        return ($query->result());
    }


     public function getLikes($follower_id)
    {
        $this->db->select('*');
        $this->db->from('follower_media');
        $this->db->where('follower_id',$follower_id);
        $this->db->order_by("follower_media.creation_date", "desc");
        $query = $this->db->get();
        
        return ($query->result());
    }

    public function followerFeed($follower_id)
    {
        $this->db->select('* ,user.id as user_id, profile_picture.source_url as user_source_url, media.creation_date as media_creation_date, media.id as media_id');
        $this->db->from('follower_user');
        $this->db->join('user', 'follower_user.user_id = user.id','inner');
        $this->db->join('profile_picture', 'follower_user.user_id = profile_picture.user_id','inner');
        $this->db->join('media', 'follower_user.user_id = media.user_id','inner');
        $this->db->join('user_type', 'user.type = user_type.id','inner');
        $this->db->where('follower_user.follower_id',$follower_id);
        $this->db->order_by("media.creation_date", "desc");
        $query = $this->db->get();

        return ($query->result());
    }

}

 ?>