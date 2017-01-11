<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

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
	}


	public function index()
	{	
		

		$this->data['countries'] = $this->Country->get();
		$this->data['cities'] = $this->City->get();
		$this->data['hassuccess'] = '';
		$this->data['haserror'] = '';
		

		if($this->session->flashdata('result'))
		{
			$result = $this->session->flashdata('result');
			if($result['proccess'] == 'success')
			{
				// INSERT FOLLOWER TO DATABASE
				$proccess = $this->Follower->insert($result['input']);

				$follower = $this->Follower->get(array('id'=>$proccess),null,1)[0];

				$this->session->unset_userdata();
				$this->session->set_userdata('follower',$follower);
				redirect(base_url().'follower/'.$follower->username.'/pick-categories');
			}
			else
			{
				$this->data['error'] = $result['value'];
				$this->data['input'] = $result['input'];
				if(isset($data['errorfield']))
				$this->data['errorfield'] = $result['errorfield'];
			}
		}

		// COMING FROM HOME PAGE
		if(isset($_POST['email']) && !($this->session->flashdata('result')))
		{
			//CHECK IF EMAIL IS AVAILABLE
			$follower = $this->Follower->get(array('email'=>$_POST['email']));
			if(!empty($follower))
			{
				$this->data['error'] = 'Email not available - Please use another one.';
				$this->data['haserror'] = 'email';
			}
			else
			{
				$this->data['success'] = 'Email availble - Please fill the rest of the form';
				$this->data['hassuccess'] = 'email';
			}

				$this->data['mail'] = $_POST['email'];
				if(isset($_POST['password']))
				$this->data['password'] = $_POST['password'];
				// printme($data);
		}
		
		// printme($data);
		// exit();
		$this->load->view('signup',$this->data);
	}

	public function try()
	{

		$data = array();
		while(true)
		{



			//Validate Username
			$follower = $this->Follower->get(array('username'=>$_POST['username']));
			if(!empty($follower))
			{
				$data['error'] = 'Username entered is not available, Please use another one.';
				$data['errorfield'] = 'username';
				break;
			}



			//Validate Email
			$follower = $this->Follower->get(array('email'=>$_POST['email']));
			if(!empty($follower))
			{
				$data['error'] = 'Email entered is not available, Please use another one.';
				$data['errorfield'] = 'email';
				break;
			}


			//Validate Password
			if( strlen($_POST['password']) < 8)
			{
				$data['error'] = 'Password must be 8 characters or more, Please user another one.';
				$data['errorfield'] = 'password';
				break;
			}

			//Validate Confirmation Password
			if($_POST['password'] != $_POST['password_confirmation'])
			{
				$data['error'] = 'Password Confirmation does not match.';
				$data['errorfield'] = 'password_confirmation';
				break;
			}

			//Validate Terms
			if(!isset($_POST['terms']) || $_POST['terms'] != 1)
			{
				$data['error'] = 'You have to agree to the terms of use before registration';
				break;
			}

			break;
		}

			if(isset($data['error']))
			{	
				$data['proccess'] = 'error';
				$data['value'] = $data['error'];
				
			}
			else
			{
				$data['proccess'] = 'success';
			}

		$data['input'] = $_POST;
		$this->session->set_flashdata('result',$data);
		redirect(base_url().'signup/');
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */