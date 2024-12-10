<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	function __construct()
	{
        parent::__construct();

        // if ($this->session->userdata('user_id')) {  
        // 	// check user type
        // 	if ($this->session->userdata('user_type') == '1') {
        // 		// user
        // 		redirect('app');
        // 	} else {
        // 		// admin
        // 		redirect('office');
        // 	}

        // }

        $this->load->model('Main_model', 'main');
        $this->users_table  = 'users';
	}

	public function index()
	{
		$this->load->view('main');
	}


	function login_page($data=false)
	{
		$this->load->view('login_page', $data);
	}

	function loginProcess($data=false)
	{
		$data = $this->input->post();
		// print_r($data); exit();
		$user_login = $this->main->check_user_login($data);

		if ($user_login == false) {

			$this->session->set_flashdata('error', 'Sorry, the email or password is incorrect, please try again.');
			redirect('main/login');

		} else {

			$sess_data = array(
				'user_id' 	=> $user_login['id'],
				'name' 	  	=> $user_login['name'],
				'email' 	=> $user_login['email'],
				'user_type' => $user_login['user_type']
			);

			$this->session->set_userdata($sess_data);
			if ($user_login['user_type'] == 1) {
				redirect('app');
			} else {
				redirect('office');
			}
			
		}
	}
}
