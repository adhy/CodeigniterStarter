<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersAdmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		 $this->load->model(array(
            'user_model'
        ));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		if (!$this->ion_auth->logged_in()) {
            redirect('admin/auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin())
            {
            redirect('admin/auth/logout', 'refresh');
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
				'module'=>'User',
				'user_detail' => $this->user_model->getDataById($id),
				'users' => $this->ion_auth->users()->result(),
			);
			$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}
			$this->load->view('admin/users/users_list', $data);
		}
	}

		// create a new user
	public function create_user()
    {
        $this->data['title'] = $this->lang->line('create_user_heading');

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
        {
            redirect('auth', 'refresh');
        }

        $tables = $this->config->item('tables','ion_auth');
        $identity_column = $this->config->item('identity','ion_auth');
        $this->data['identity_column'] = $identity_column;

        // validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required');
        $this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required');
        if($identity_column!=='email')
        {
            $this->form_validation->set_rules('identity',$this->lang->line('create_user_validation_identity_label'),'required|is_unique['.$tables['users'].'.'.$identity_column.']');
            $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email');
        }
        else
        {
            $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
        }
        $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
        $this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'trim');
        $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

        if ($this->form_validation->run() == true)
        {
            $email    = strtolower($this->input->post('email'));
            $identity = ($identity_column==='email') ? $email : $this->input->post('identity');
            $password = $this->input->post('password');

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'company'    => $this->input->post('company'),
                'phone'      => $this->input->post('phone'),
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register($identity, $password, $email, $additional_data))
        {
            // check to see if we are creating the user
            // redirect them back to the admin page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("auth", 'refresh');
        }
        else
        {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['first_name'] = array(
                'name'  => 'first_name',
                'id'    => 'first_name',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('first_name'),
            );
            $this->data['last_name'] = array(
                'name'  => 'last_name',
                'id'    => 'last_name',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('last_name'),
            );
            $this->data['identity'] = array(
                'name'  => 'identity',
                'id'    => 'identity',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $this->data['email'] = array(
                'name'  => 'email',
                'id'    => 'email',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('email'),
            );
            $this->data['company'] = array(
                'name'  => 'company',
                'id'    => 'company',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('company'),
            );
            $this->data['phone'] = array(
                'name'  => 'phone',
                'id'    => 'phone',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('phone'),
            );
            $this->data['password'] = array(
                'name'  => 'password',
                'id'    => 'password',
                'type'  => 'password',
                'value' => $this->form_validation->set_value('password'),
            );
            $this->data['password_confirm'] = array(
                'name'  => 'password_confirm',
                'id'    => 'password_confirm',
                'type'  => 'password',
                'value' => $this->form_validation->set_value('password_confirm'),
            );
            $this->data['module']	= 'User';
            $id        = $this->session->userdata('user_id');
            $this->data['user_detail']	= $this->user_model->getDataById($id);
            $this->load->view('admin/users/users_add', $this->data);
        }
    }
    public function detail($id)
    {
        $session             = $this->session->userdata('user_id');
        $data['detail'] = $this->user_model->getDataById($id);
        $data=array(
                'module'=>'User',
                'detail' => $this->user_model->getDataById($id),
                'user_detail' => $this->user_model->getDataById($session)
            );
        $this->load->view('admin/users/users_edit', $data);
    }
    
    public function update()
    {
        
        $user_id  = $this->input->post('user_id');
        
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name']  = $this->input->post('last_name');
        $data['phone']      = $this->input->post('phone');
        $edit               = $this->user_model->update($user_id, $data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Users Updated');
            redirect('admin/users');
        }
    }
    public function changeavatar()
    {
        $user_id  = $this->input->post('user_id');
        $users    = $this->user_model->getDataById($user_id);
       if ($_FILES['avatar']['name']) {
            $data['avatar'] = $this->doUpload('avatar');
            if (!$users[0]->avatar == NULL) {
            unlink('./content/media/users/' . $users[0]->avatar);
            }
        }
        $edit               = $this->user_model->update($user_id, $data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Users Updated');
            redirect('admin/users');
        }
    }
    function doUpload($file) {
        $config['upload_path'] = './content/media/users/';
        $config['allowed_types'] = '*';
        $config['max_size']      = 99999;
        $config['encrypt_name']  = true;
        $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload($file))
            {
              $error = array('error' => $this->upload->display_errors());
              $this->load->view('upload_form', $error);
            }
            else
            {
              $data = array('upload_data' => $this->upload->data());
              return $data['upload_data']['file_name'];
            }
        }
}
