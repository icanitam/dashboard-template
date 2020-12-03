<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct()
    {
        parent::__construct();

        $this->load->model('user_fcd');
    }

	public function index()
	{
		$data['message'] = $this->session->flashdata('message');
		$data['list_user'] = $this->user_fcd->get_user()->result_array();

		$this->show($data);
	}

	public function edit($user_id = null)
	{
		$this->load->model('role_fcd');

		$data['action'] = 'Add new user';
		$data['list_role'] = $this->role_fcd->get_role()->result_array();

		if (!empty($user_id)) {
			$data['action'] = 'Edit user';
			$data['user'] = $this->user_fcd->get_user($user_id)->row_array();
		}

		$this->show($data);
	}

	public function save()
	{
        if ($this->input->method() == 'get') {
            redirect('404_override');
		}
		
		$user['id'] =  $this->input->post('id');
		$user['username'] =  $this->input->post('username');
		$user['password'] =  md5($this->input->post('password'));
		$user['name'] =  $this->input->post('name');
		$user['email'] =  $this->input->post('email');
		$user['roleid'] = $this->input->post('roleid');

		$save = $this->user_fcd->save($user, $this->data['user']['id']);

		if ($save['affected_rows'] > 0) {
			$this->set_message('Success', SUCCESS_SAVE_DATA, 'information');
		} else {
			$this->set_message('Warning', NOTHING_TO_SAVE, 'warning');
		}

        $this->show_index();
    }
    
    public function generate_password($user_id)
    {
        $data['action'] = 'Generate user password';
		$data['user'] = $this->user_fcd->get_user($user_id)->row_array();

		$this->show($data);
	}
	
	public function update_password()
	{
		$user['id'] =  $this->input->post('id');
		$user['password'] = md5($this->input->post('password'));

		$save = $this->user_fcd->update_password($user, $this->data['user']['id']);

		if ($save['affected_rows'] > 0) {
			$this->set_message('Success', SUCCESS_SAVE_DATA, 'information');
		} else {
			$this->set_message('Warning', NOTHING_TO_SAVE, 'warning');
		}

        $this->show_index();
	}

	public function delete($user_id)
	{
		$user['id'] =  $user_id;
		$user['isactive'] = FALSE;

		$save = $this->user_fcd->save($user, $this->data['user']['id']);

		if ($save['affected_rows'] > 0) {
			$this->set_message('Success', SUCCESS_SAVE_DATA, 'information');
		} else {
			$this->set_message('Warning', NOTHING_TO_SAVE, 'warning');
		}

        $this->show_index();
	}
}
