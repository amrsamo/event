<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{

		if($this->isLoggedIn())
			redirect('admin');

		$data = array();

		if(isset($_POST['password']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$proccess = $this->Adminuser->checkLogin($username,$password);

			if($proccess)
			{	
				$user = $proccess;
				$user->user_id = $proccess->id;
				$this->setUserData($user);
				redirect('admin');
			}
			else
			{
				$data['error'] = 'Login Failed';
			}
		}

		
		$this->load->view('admin/login',$data);
	}

	public function isLoggedIn()
	{	
		if(isset($this->session->userdata['id']))
			return true;
		return false;
	}

	public function setUserData($user)
	{
		$this->session->set_userdata($user);
	}


	function clear_cache()
	{
	    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
	    $this->output->set_header("Pragma: no-cache");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */