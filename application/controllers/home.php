<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		
		$categories = $this->Category->get();

		$this->data['categories'] = array();

		foreach ($categories as $category) {
			$sub_category = $this->Category->getCategoryInfo($category->id);
			$output = new stdClass();
			$output->category = $category;
			$output->sub = $sub_category;
			$this->data['categories'][] = $output;
		}
		// printme($this->data);
		// exit();
		$this->load->view('newhome',$this->data);
	}


	


	public function category($name)
	{
		$name = urldecode($name);
		$this->data['category_name'] = $name;

		//Get Category

		$category = $this->Category->get(array('name'=>$name));
		$category = $category[0];

		$this->data['category'] = $category;
		
		$sub_category = $this->Category->getCategoryInfo($category->id);

		if(!empty($sub_category))
		{
			$this->data['sub_category'] = $sub_category;
		}
		


		// GET USERS UNDER CATEGORY
		$getCategoryTypes = $this->Usertype->get(array('category'=> $category->id));
		$categoryTypesArray = array();
		foreach ($getCategoryTypes as $type) {
			$categoryTypesArray[] = $type->id;
			
		}
		
		// printme($category);
		// printme($getCategoryTypes);
		$users = $this->Adminuser->getUsersByType(null,$categoryTypesArray,9);

		// printme($users);
		// exit();
		$this->data['users'] = array();

		//GET USER INFO AND  PROFILE PICS
		foreach ($users as $user) {
			$picture = $this->Adminuser->getUserProfilePicture($user->user_id);
			if(is_array($picture) && !empty($picture))
			{
				$picture = $picture[0];
				$user->profile_picture = $picture;
			}

			//Get User media
			$media = $this->Media->get(array('user_id'=> $user->user_id),null,8);
			$user->media = $media;


			//GET USER RELATION (FOLLOWED OR NOT)
			if(isset($this->isLoggedIn) && $this->isLoggedIn)
			{	
				$conditions = array();
				$conditions['follower_id'] = $this->data['loggedInFollower']->id;
				$conditions['user_id'] = $user->user_id;
				$user->relation = $this->Follower->checkRelation($conditions);
			}
			else
			{
				$user->relation = false;
			}
			
			$this->data['users'][] = $user;
		}

		if (count($this->data['users']) > 0) {
			$this->data['min_id'] = $this->data['users'][count($this->data['users'])-1]->user_id;
		}
		
		
		// $categories = $this->Category->get();
		// $this->data['categories'] = $categories;

		$this->data['categories'] = array();
		$categories = $this->Category->get();
		foreach ($categories as $category) {
			$sub_category = $this->Category->getCategoryInfo($category->id);
			$output = new stdClass();
			$output->category = $category;
			$output->sub = $sub_category;
			$this->data['categories'][] = $output;
		}

		
		// printme($this->data['category']);exit();
		// printme($this->data);exit();
		$this->load->view('newcategory',$this->data);
	}


	public function moreCategorUsers()
	{
		$category_id = $_POST['category'];

		// GET USERS UNDER CATEGORY
		$getCategoryTypes = $this->Usertype->get(array('category'=> $category_id));
		$categoryTypesArray = array();
		foreach ($getCategoryTypes as $type) {
			$categoryTypesArray[] = $type->id;
		}

		$conditions = array("user.id <"=>$_POST['min_id']);
		$users = $this->Adminuser->getUsersByType($conditions,$categoryTypesArray,9);

		$this->data['users'] = array();

		//GET USER INFO AND  PROFILE PICS
		foreach ($users as $user) {
			$picture = $this->Adminuser->getUserProfilePicture($user->user_id);
			if(is_array($picture) && !empty($picture))
			{
				$picture = $picture[0];
				$user->profile_picture = $picture;
			}

			//Get User media
			$media = $this->Media->get(array('user_id'=> $user->user_id),null,8);
			$user->media = $media;


			//GET USER RELATION (FOLLOWED OR NOT)
			if(isset($this->isLoggedIn) && $this->isLoggedIn)
			{	
				$conditions = array();
				$conditions['follower_id'] = $this->data['loggedInFollower']->id;
				$conditions['user_id'] = $user->user_id;
				$user->relation = $this->Follower->checkRelation($conditions);
			}
			else
			{
				$user->relation = false;
			}
			
			$this->data['users'][] = $user;
		}

		$this->data['min_id'] = $this->data['users'][count($this->data['users'])-1]->user_id;
		$view = $this->load->view('categorymore',$this->data, true);
		echo json_encode(array($view, $this->data['min_id']));
		// printme($users);
	}

	public function blog()
	{
		$this->data = array();
		$this->load->view('blog',$this->data);
	}

	public function trending()
	{
		$this->data = array();

		$user_types = $this->Usertype->get();
		$types = "";
		foreach ($user_types as $x) {
			if($x->id == 6)
				continue;
			$types .= $x->id.',';
		}

		$users = $this->Adminuser->get(array("type"=>$types),null,10);


		$this->data['users'] = $users;

		$this->load->view('trending',$this->data);
	}

	public function user($name)
	{
		$this->data['username'] = $name;
		$user = $this->Adminuser->getUserByUsername($name)[0];
		$user->profile_picture = $this->Adminuser->getUserProfilePicture($user->user_id)[0];
		
		$this->data['user'] = $user;

		//GET USER MEDIA
		$this->data['media'] = $this->Media->get(array('user_id'=> $this->data['user']->user_id));


		//GET USER LIKES (LIKED OR NOT) AND MEDIA STATISTICS
		$output = array();
		foreach ($this->data['media'] as $x) {

			if(isset($this->isLoggedIn) && $this->isLoggedIn)
			{
				$media = $x;
				$conditions = array();
				$conditions['follower_id'] = $this->data['loggedInFollower']->id;
				$conditions['media_id'] = $x->id;
				$media->like = $this->Follower->checkLike($conditions);
			}
			else
			{
				$media = $x;
				$media->like = false;
			}

			// GET MEDIA STATISTICS
			$statistics = $this->Media_Statistics->get(array('media_id'=> $media->id));
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

		$this->data['media'] = $output;
		
		// printme($this->data);
		// exit();

		//GET USER CONTACTS
		$this->data['contacts'] = $this->Adminuser->getContacts(array('user_id'=> $this->data['user']->user_id));


		//GET USER CONTACTS
		$this->data['social'] = $this->Adminuser->getSocial(array('user_id'=> $this->data['user']->user_id));



		$this->data['categories'] = array();
		$categories = $this->Category->get();
		foreach ($categories as $category) {
			$sub_category = $this->Category->getCategoryInfo($category->id);
			$output = new stdClass();
			$output->category = $category;
			$output->sub = $sub_category;
			$this->data['categories'][] = $output;
		}

		$this->data['category'] = $category;
		
		// printme($this->data);
		// exit();

		$this->load->view('newuser',$this->data);
	}


	public function search()
	{
		
		$this->data['search_input'] = $_POST['input'];
		$this->data['feed'] = $this->Media->searchResultsFromMedia($_POST['input']);
		// printme($this->data);exit();
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

		$this->load->view('searchresults',$this->data);
	}
	public function about()
	{
		$data = array();
		$this->load->view('about',$data);
	}

	public function contact()
	{
		$data = array();

		if(isset($_POST['submit']))
		{
			$data['success'] = 'Email Sent Successfully';
		}
		$this->load->view('contact',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */