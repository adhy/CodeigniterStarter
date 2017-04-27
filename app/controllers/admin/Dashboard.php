<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		 $this->load->model(array(
            'user_model'
        ));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		if (!$this->ion_auth->logged_in()) {
            redirect('admin/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin())
            {
            redirect('admin/logout', 'refresh');
        }
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('admin/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
		else
		{
			$id        = $this->session->userdata('user_id');
			$data=array(
				'module'=>'Dashboard',
				'user_detail' => $this->user_model->getDataById($id),

				);
			$this->load->view('admin/dashboard', $data);
		}
	}
}
