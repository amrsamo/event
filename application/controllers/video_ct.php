<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video_CT extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		if(!$this->isLoggedIn())
			redirect('login');

		$data['videos'] = $this->Video->get(null,null,5000,0);
		$this->load->view('admin/videos',$data);
	}

	public function get()
	{
		if(!$this->isLoggedIn())
			redirect('login');

		$video_id = $this->uri->segment(2, 0);
		$data['video'] = $this->Video->get(array("video_id"=>$video_id),null,1,0)[0];
		$data['video_files'] = $this->Video->getVideoFiles($data['video']->filename,$data['video']->user_id,$data['video']->video_id);
		$data['video_images'] = $this->Video->getVideoImages($data['video']->filename,$data['video']->user_id,$data['video']->video_id);
		
		$this->load->view('admin/video',$data);
	}

	public function get_frontend()
	{
		$video_id = $this->uri->segment(2, 0);


		$data['video'] = $this->Video->get(array("video_id"=>$video_id),null,1,0)[0];

		$views = (int)$data['video']->views;
		$views++;
		$process = $this->Video->update(array("views"=>$views),array("video_id"=>$data['video']->video_id));

		$data['video_files'] = $this->Video->getVideoFiles($data['video']->filename,$data['video']->user_id,$data['video']->video_id);
		$data['video_images'] = $this->Video->getVideoImages($data['video']->filename,$data['video']->user_id,$data['video']->video_id);
		$data['latest'] = $this->Video->getLatest();
		$data['popular'] = $this->Video->getPopular();
		
		$this->load->view('video',$data);
	}

	public function featured()
	{
		if(!$this->isLoggedIn())
			redirect('login');
		
		$data['video'] = $this->Video->get(array("featured"=>1),null,1,0);

		if(isset($data['video'][0]))
			redirect('video/'.$data['video'][0]->video_id);
		else
			$this->load->view('admin/notset',$data);
	}


	public function delete()
	{
		if(!$this->isLoggedIn())
			redirect('login');

		$video_id = $this->uri->segment(2, 0);
		//$process = $this->Video->delete(array("video_id"=>$video_id));
	}

	public function setFeatured()
	{
		if(!$this->isLoggedIn())
			redirect('login');

		$video_id = $this->uri->segment(2, 0);
		if($video_id)
		{
			$process = $this->Video->update(array("featured"=>0),array("featured"=>1));
			$process = $this->Video->update(array("featured"=>1),array("video_id"=>$video_id));
			if($process == 1)
				echo 'success';
				return;
		}
		return;
	}

	public function removeFeatured()
	{
		if(!$this->isLoggedIn())
			redirect('login');

		$video_id = $this->uri->segment(2, 0);
		if($video_id)
		{
			$process = $this->Video->update(array("featured"=>0),array("video_id"=>$video_id));
			if($process == 1)
				echo 'success';
				return;
		}
		return;
	}


	public function create()
	{
		if(!$this->isLoggedIn())
			redirect('login');

		$data = array();

		if(isset($_POST['submit']))
		{

			$title 			 = $_POST['title'];
			$description = $_POST['description'];
			$user_id 		 = "lifeisbig";
			$filename 	 = uniqid().'_'.time().'_'.$_FILES['fileToUpload']['name'];
			$process = $this->Video->put(array(
									"title"=>$_POST['title'],
									"filename"=>$filename,
									"create_date"=>date("Y-m-d H:i:s"),
									"code"=>'lifeisbig',
									"description"=>$_POST['description']));

			

			if($process == 1)
			{
				$video_id = $this->db->insert_id();
				if(handleUpload($video_id,$filename))
				{
					$data['success'] = 'Video has been uploaded';
				}
				else
				{
	        $data['error'] = 'Sorry, your file was not uploaded. Only flv & mp4 files are allowed';
				}
			}
			else
			{
				$data['error'] = 'Sorry, your file was not uploaded. Please try again';
			}
		}

		$this->load->view('admin/create_video',$data);
	}

	public function isLoggedIn()
	{
		if(isset($this->session->userdata['user_id']))
			return true;
		return false;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */