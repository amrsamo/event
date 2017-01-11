<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dev extends CI_Controller {

	public function index()
	{
		if(!$this->isLoggedIn())
			redirect('login');

		$data = array();
		$this->load->view('admin/dev',$data);
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