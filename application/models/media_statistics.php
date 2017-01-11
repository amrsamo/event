<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class Media_Statistics extends Base_Model 
{ 
    public function __construct() 
    { 	
        parent::__construct(); 
        $this->table = 'media_statistics';
    } 

    public function addLike($media_id)
    {	
        $input = array();
    	$input['media_id'] = $media_id;

        $checkEntry = $this->get($input);
        if(empty($checkEntry))
        {
            // FIRST LIKE
            $input = array();
            $input['media_id'] = $media_id;
            $input['likes'] = 1;
            $this->put($input);
        }
        else
        {
            
            $checkEntry = $checkEntry[0];
            $counter = $checkEntry->likes;
            $counter++;
            $this->update(array('likes'=>$counter),array('media_id'=>$checkEntry->media_id));
        }
    	
    }


    public function deleteLike($media_id)
    {   
        $input = array();
        $input['media_id'] = $media_id;

        $checkEntry = $this->get($input);
        $checkEntry = $checkEntry[0];
        $counter = $checkEntry->likes;
        $counter--;
        $this->update(array('likes'=>$counter),array('media_id'=>$checkEntry->media_id));
        
        
    }

    public function makeView($media_id)
    {
        $input = array();
        $input['media_id'] = $media_id;

        $checkEntry = $this->get($input);
        if(empty($checkEntry))
        {
            // FIRST LIKE
            $input = array();
            $input['media_id'] = $media_id;
            $input['views'] = 1;
            $this->put($input);
        }
        else
        {
            
            $checkEntry = $checkEntry[0];
            $counter = $checkEntry->views;
            $counter++;
            $this->update(array('views'=>$counter),array('media_id'=>$checkEntry->media_id));
        }
    }
}

 ?>