<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class followers extends CI_Controller {



	public $isLoggedIn = false;
	public $data = array();

	public function __construct()
	{
	    parent::__construct();

	    if(isset($this->session->userdata['follower']->id))
		{
			$this->isLoggedIn = true;
			$this->data['isLoggedIn'] = true;
			$this->data['loggedInFollower'] = $this->session->userdata['follower'];
		}
		else
		{
			$this->isLoggedIn = false;
			$this->data['isLoggedIn'] = false;
		}

		$categories = $this->Category->get();
		$this->data['categories'] = $categories;
	}

	public function profile()
	{	
		$username = $this->uri->segment(2);
		$follower = $this->Follower->getFollower($username);
		$this->data['follower'] = $follower[0];

		

		//GET FOLLOWER FOLLOWING
		$this->data['following'] = $this->Follower->getFollowing($this->data['loggedInFollower']->id);

		//GET FOLLOWER LIKES
		$this->data['likes'] = $this->Follower->getLikes($this->data['loggedInFollower']->id);


		//GET FOLLOWER CATEGROIES getCategories
		//$this->data['categories'] = $this->Follower->getCategories($this->data['follower']->id);
		

		//GET FOLLOWER Feed followerFeed
		$this->data['feed'] = $this->Follower->followerFeed($this->data['loggedInFollower']->id);
		
		// printme($this->data['feed']);
		// exit();

		$output = array();
		foreach ($this->data['feed'] as $x) {

			if(isset($this->isLoggedIn) && $this->isLoggedIn)
			{
				$media = $x;
				$conditions = array();
				$conditions['follower_id'] = $this->data['loggedInFollower']->id;
				$conditions['media_id'] = $x->media_id;
				$media->like = $this->Follower->checkLike($conditions);
			}
			else
			{
				$media = $x;
				$media->like = false;
			}

			// GET MEDIA STATISTICS
			$statistics = $this->Media_Statistics->get(array('media_id'=> $media->media_id));
			if(empty($statistics))
			{	
				$statistics = new stdClass();
				$statistics->views = 0;
				$statistics->likes = 0;
				$media->statistics = $statistics;
			}
			else
			{
				$media->statistics = $statistics[0];
			}
			$output[] = $media;
		}

		$this->data['feed'] = $output;


		// printme($this->data);exit();


		$this->load->view('newfollower-profile',$this->data);
	}

	public function index()
	{	
		
		$this->load->view('follower',$this->data);
	}

	public function login()
	{	
		if(isset($_POST['email']))
		{
			$process = $this->Follower->login($_POST);
			if(!$process)
			{
				$this->load->view('login',$this->data);
			}
		}
		
		$this->load->view('newhome',$this->data);
	}


	

	public function follow()
	{
		$this->Follower->makeFollow($_POST['follower'],$_POST['user']);
	}

	public function unfollow()
	{
		$this->Follower->makeUnFollow($_POST['follower'],$_POST['user']);
	}

	public function like()
	{
		$this->Follower->makeLike($_POST['follower'],$_POST['media']);
	}

	public function unlike()
	{
		$this->Follower->makeUnLike($_POST['follower'],$_POST['media']);
	}


	public function makeview()
	{
		$this->Media_Statistics->makeView($_POST['media']);
	}

	public function pickcategories()
	{

		$follower_usernme = $this->uri->segment(2);
		$follower = $this->Follower->get(array('username'=>$follower_usernme))[0];

		$loggedIn_id = $this->session->userdata['follower']->id;


		//Form Handler
		if(isset($_POST['done']))
		{
			unset($_POST['done']);
			$process = $this->Follower->addSubCategories($_POST);
			redirect(base_url().'follower/'.$follower->username);
		}
		// Check if loggedIn User == Pick Categories user
		if($loggedIn_id == $follower->id)
		{	
			$this->data['sub_categories'] = $this->Base_Model->get(null,'sub_category');
			$this->load->view('pickcategories',$this->data);
		}
		else
		{
			redirect(base_url());
		}

	}
}

