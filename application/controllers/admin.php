<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {


	public $isLoggedIn = false;
	public $data = array();

	public function __construct()
	{
	    parent::__construct();

	    if(isset($this->session->userdata['admin']->id))
		{
			$this->isLoggedIn = true;
			$this->data['isLoggedIn'] = true;
			$this->data['admin'] = $this->session->userdata['admin'];
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
		if(!$this->isLoggedIn()){
			redirect('admin/login');
		}


		$this->load->view('admin/home',$this->data);
	}

	public function isLoggedIn()
	{
		if(isset($this->session->userdata['admin']))
			return true;
		return false;
	}

	public function logout()
	{
		echo 'here';
		exit();
	}

	public function login()
	{

		if(isset($_POST['username']))
		{
			$process = $this->Adminsystem->checkLogin($_POST['username'],$_POST['password']);
			if($process)
			{	
				$admin = $process;
				$admin->user_id = $process->id;
				$this->session->set_userdata('admin',$admin);
				redirect('admin');
			}
			else
			{
				$data['error'] = 'Login Failed';
			}
			var_dump($process);
			exit();
		}
		$this->load->view('admin/login',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */