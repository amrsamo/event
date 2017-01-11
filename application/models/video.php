<?php 
    
if ( ! defined('BASEPATH')) 
exit('No direct script access allowed'); 

class video extends Base_Model 
{ 
    public function __construct() 
    { 
        parent::__construct(); 
    } 


    public function getVideoFiles($filename = null, $user_id = null, $video_id = null)
	  {
	        $video_files = array();
					$video_files["mp4"] = array('filename' => $filename . '.mp4' , 'url' => $this->config->item('S3_URL') . $this->config->item('S3_BUCKET'). '/users/' . $user_id . '/' . $filename . ".mp4" , 'type' => "video/mp4");
					$video_files["mp4_2"] = array('filename' => $filename . '.mp4' , 'url' => $this->config->item('S3_URL') . $this->config->item('S3_BUCKET_2'). '/' . $video_id . '/' . $filename . ".mp4" , 'type' => "video/mp4");
	        return $video_files;
	  }

	  public function getVideoImages($filename = null, $user_id = null)
	  {
	        $images = array();
	        $images['image'] = $this->config->item('S3_URL') .  $this->config->item('S3_BUCKET') . '/users/' . $user_id . '/' . $filename . ".jpg" ;
	        $images['icon'] = $this->config->item('S3_URL') . $this->config->item('S3_BUCKET') . '/users/' . $user_id . '/' . $filename . "_240.jpg" ;
	        $images['th'] = $this->config->item('S3_URL') . $this->config->item('S3_BUCKET') . '/users/' . $user_id . '/' . $filename . "_150.jpg" ;
	        return $images;
	  }

	  public function getLatest()
	  {
	  	$data['latest'] = $this->get(null,null,9,0,array("by"=>"create_date","direction"=>"desc"));
			foreach ($data['latest'] as $video) {
				$video->video_images = $this->Video->getVideoImages($video->filename,$video->user_id);
			}
			return $data['latest'];
	  }

	  public function getPopular()
	  {
	  	$data['popular'] = $this->get(null,null,9,0,array("by"=>"views","direction"=>"desc"));
			foreach ($data['popular'] as $video) {
				$video->video_images = $this->Video->getVideoImages($video->filename,$video->user_id);
			}
			return $data['popular'];
	  }

}

 ?>