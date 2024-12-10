<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        //if ($this->session->userdata('user_id')) {
        // 	if ($this->session->userdata('user_type') == '1') {
        // 		redirect('app');
        // 	} else {
        // 		redirect('office');
        // 	}
        // }

        // $this->load->model('App_model', 'DbApp');
        // $this->users_table  = 'users';
        // $this->user_id = $this->session->userdata('user_id');
	}

	public function index()
	{	
		$data['content']      = 'app/dashboard';
		$data['add_script']   = 'app/script';
		$data['menu']	 	= 'app/menu';

		$data['inventorys'] = get_any_table_array(array('status' => '1'), 'inventory');

		$this->load->view('master-ui/main', $data);
	}
}
