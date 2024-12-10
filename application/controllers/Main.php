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

	function register_page($data=false)
	{
		$this->load->view('register_page', $data);
	}

	function doCreateAccount($data=false)
	{
		$data = $this->input->post();
		// print_r($data); exit();

		$emailExist = $this->main->check_email(array('email' => $data['email']));

		// echo "string"; exit;

		// print_r($emailExist); exit;

		if ($emailExist['status'] == true) {
			$this->session->set_flashdata('error', 'Sorry, the email address is already exist.');
			redirect(base_url('main/register_page'));
		} else {

			# do register account
			$data_insert = array(
				'name' 	 	 => $data['name'],
				'email'  	 => $data['email'],
				'password' 	 => md5($data['password']),
				'create_dt'  => current_date(),
				'user_type'  => '1',
			);

			// print_r($data_insert); exit;

			$insert = $this->main->insert_users_table($this->users_table, $data_insert);
			

			// if ($insert == true) {
			// 	$response    = array('status' => true, 'msg' => 'Account has been successfully created !');
			// } else {
			// 	$response = array('status' => false, 'msg' => 'Something when wrong !');
			// }

			$this->session->set_flashdata('success', 'Account has been successfully created !');
			redirect(base_url('main/register_page'));
		}

		// echo encode($response);
		// exit();
	}

	function loginProcess($data=false)
	{
		$data = $this->input->post();
		// print_r($data); exit();
		$user_login = $this->main->check_user_login($data);

		if ($user_login == false) {

			$this->session->set_flashdata('error', 'Sorry, the email or password is incorrect, please try again.');
			redirect('main/login_page');

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
			} 

			if ($user_login['user_type'] == 3) {
				// code...
				redirect('admin');
			}

			if ($user_login['user_type'] == 2) {
				// code...
				redirect('teacher');
			}

			// else {
			// 	redirect('office');
			// }
			
		}
	}

	function logout()
	{	
		$this->session->sess_destroy();
		redirect();
	}
}
