<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){

		$this->load->model('StringGen');
		$data = array('word' => $this->StringGen->generateRandomString());

		if (!$this->session->userdata('count')){
			$this->session->set_userdata('count', 1);
		} else {
			$this->session->set_userdata('count', $this->session->userdata('count') + 1);
		}
		
		$this->load->view('view_home', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */