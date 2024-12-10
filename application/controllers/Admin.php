<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        // if ($this->session->userdata('user_id')) {
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
		$data['content']      = 'admin/dashboard';
		$data['add_script']   = 'admin/script';
		$data['menu']   = 'admin/menu';

		$this->load->view('master-ui/main', $data);
	}

	function user_management($data=false)
	{
		$data['content']      = 'admin/user_management';
		$data['add_script']   = 'admin/script';
		$data['menu']   = 'admin/menu';

		$data['users'] = get_any_table_array(array('user_type !=' => '3'), 'users');

		$this->load->view('master-ui/main', $data);
	}

	function request_restock($data=false)
	{
		$data['content']      = 'admin/request_restock';
		$data['add_script']   = 'admin/script';
		$data['menu']   = 'admin/menu';

		$data['requests'] = get_any_table_array(array('status_code' => '0'), 'restock');

		$this->load->view('master-ui/main', $data);
	}

	function inventory_management($data=false)
	{
		$data['content']      = 'admin/inventory_management';
		$data['add_script']   = 'admin/script';
		$data['menu']   = 'admin/menu';


		$data['inventorys'] = get_any_table_array(array('status' => '1'), 'inventory');

		$this->load->view('master-ui/main', $data);
	}

	function request_item($data=false)
	{
		$data['content']      = 'admin/inventory_request';
		$data['add_script']   = 'admin/script';
		$data['menu']   = 'admin/menu';


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
			'status' => '1',
		);

		$insert = insert_any_table($insert_data, 'inventory');

		if ($insert == true) {
			echo encode(array('status' => true, 'msg' => 'Successfully created !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to create !'));
		}
	}

	function edit_inventory($data=false)
	{
		$id = $this->input->post('id');

		$data['inventory'] = get_any_table_row(array('id' => $id), 'inventory');

		$this->load->view('admin/modal-edit-inventory', $data);
	}

	function do_edit_inventory($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$update = array(
			'name' => $post['name'],
			'category' => $post['category'],
			'stock' => $post['stock'],
		);

		$insert = update_any_table($update, array('id' => $post['id']), 'inventory');


		// $data_ewallet   = array('staff_id' =>$post['staff_id'], 'user_id' => $post['id'], 'balance' => $post['balance']);
		// $insert_ewallet = insert_any_table($data_ewallet, 'ewallet_detail');


		if ($insert == true) {
			echo encode(array('status' => true, 'msg' => 'Inventory has been updated !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to update !'));
		}
	}

	function delete_inventory($data=false)
	{
		$id = $this->input->post('id');

		$delete = delete_any_table(array('id' => $id), 'inventory');

		if ($delete == true) {
			echo encode(array('status' => true, 'msg' => 'Deleted !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to delete !'));
		}
	}

	function delete_user($data=false)
	{
		$id = $this->input->post('id');

		$delete = delete_any_table(array('id' => $id), 'users');

		if ($delete == true) {
			echo encode(array('status' => true, 'msg' => 'Deleted !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to delete !'));
		}
	}

	function create_user_account($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>";

		$insert_data = array(
			'name' => $post['name'], 
			'email' => $post['email'], 
			'password' => md5($post['password']), 
			'user_type' => $post['role'],
			'create_dt' => current_date(),
		);

		$insert = insert_any_table($insert_data, 'users');

		if ($insert == true) {
			echo encode(array('status' => true, 'msg' => 'Account has been created !'));
		} else {
			echo encode(array('status' => false, 'msg' => 'Failed to create !'));
		}
	}

	function edit_user($data=false)
	{
		$id = $this->input->post('id');

		$data['user'] = get_any_table_row(array('id' => $id), 'users');

		$this->load->view('admin/modal-edit-user', $data);
	}

	function process_stock($data=false)
	{
		$id = $this->input->post('id');

		$data['request'] = get_any_table_row(array('id' => $id), 'restock');

		$data['inventory'] = get_any_table_row(array('id' => $data['request']['inventory_id']), 'inventory');

		$this->load->view('admin/modal-process-stock', $data);
	}

	function do_edit_user($data=false)
	{
		$post = $this->input->post();

		// echo "<pre>"; print_r($post); echo "</pre>"; exit;

		$update_user = array(
			'name' => $post['name'],
			'email' => $post['email'],
			'user_type' => $post['role']
		);

		// print_r($update_user); exit;

		// $insert = insert_any_table($insert_data, 'staff_details');

		update_any_table($update_user, array('id' => $post['id']), 'users');

		echo encode(array('status' => true, 'msg' => 'User Details has been updated !'));


		//$data_ewallet = array('staff_id' =>$post['staff_id'], 'user_id' => $post['id'], 'balance' => $post['balance']);
		//$insert_ewallet = insert_any_table($data_ewallet, 'ewallet_detail');

		# insert log e-wallet
		// $log = array('user_id' => $post['id'], '' );


		// if ($insert == true) {
		// 	$update_user = array('status' => '2', 'name' => $post['name']);
		// 	update_any_table($update_user, array('id' => $post['id']), 'users');
		// 	echo encode(array('status' => true, 'msg' => 'Staff registration has been completed !'));
		// } else {
		// 	echo encode(array('status' => false, 'msg' => 'Failed to register !'));
		// }
	}

	function do_restock($data=false)
	{
		$post = $this->input->post();


		$restock = get_any_table_row(array('id' => $post['id']), 'restock');

		$inventory = get_any_table_row(array('id' => $restock['inventory_id']), 'inventory');

		// print_r($post); exit;

		// $id = $post['id'];

		$current_stock = $inventory['stock'];



		$approved_amount = $post['approve_amount'];

		$update = array('status' => 'Complete Restock', 'status_code' => '1', 'approve_amount' => $approved_amount);

		update_any_table($update, array('id' => $post['id']), 'restock');

		$total_update = $current_stock + $approved_amount;

		$updateCurr = array('stock' => $total_update, 'restock_status' => '0');

		update_any_table($updateCurr, array('id' => $restock['inventory_id']), 'inventory');


		echo encode(array('status' => true, 'msg' => 'Successfully restock !'));




	}

	function approve_item($data=false)
	{
		$id = $this->input->post('id');

		$update = array('status' => '1');

		update_any_table($update, array('id' => $id), 'inventory');

		echo encode(array('status' => true, 'msg' => 'Successfully saved !'));

	}
}
