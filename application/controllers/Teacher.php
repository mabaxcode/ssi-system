<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

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
		$data['content']      = 'teacher/dashboard';
		$data['add_script']   = 'teacher/script';
		$data['menu']	 	= 'teacher/menu';

		$this->load->view('master-ui/main', $data);
	}

	public function inventory($data=false)
	{
		// code...
		$data['content']      = 'teacher/inventory';
		$data['add_script']   = 'teacher/script';
		$data['menu']	 	= 'teacher/menu';

		$data['inventorys'] = get_any_table_array(array('status' => '1'), 'inventory');

		$this->load->view('master-ui/main', $data);

	}

	function request_item($data=false)
	{
		$data['content']      = 'teacher/request_item';
		$data['add_script']   = 'teacher/script';
		$data['menu']	 	= 'teacher/menu';

		$data['inventorys'] = get_any_table_array(array('status' => '0'), 'inventory');

		$this->load->view('master-ui/main', $data);
	}

	function create_inventory($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>"; exit;

		$insert_data = array(
			'name' => $post['name'], 
			'category' => $post['category'], 
			'stock' => $post['stock'], 
			'create_dt' => current_date(),
		);

		$insert = insert_any_table($insert_data, 'inventory');

		if ($insert == true) {
			echo encode(array('status' => true, 'msg' => 'Successfully request for the item !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to create !'));
		}
	}

	function edit_inventory($data=false)
	{
		$id = $this->input->post('id');

		$data['inventory'] = get_any_table_row(array('id' => $id), 'inventory');

		$this->load->view('teacher/modal-restock-inventory', $data);
	}

	function do_restock($data=false)
	{
		$post = $this->input->post();


		$insert = array('inventory_id' => $post['id'], 'restock_amount' => $post['restock_amount'], 'status' => 'In Processing', 'status_code' => '0', 'create_dt' => current_date(), );


		insert_any_table($insert, 'restock');


		update_any_table(array('restock_status' => '1'), array('id' => $post['is']), 'inventory');

		echo encode(array('status' => true, 'msg' => 'Successfully request to restock !'));




	}
}
