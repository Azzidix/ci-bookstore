<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Users');
	}

	// Check User login
	public function is_logged_in()
	{
		$data = ['title' => "Login"];
		$is_login = $this->session->userdata('logged_in');

		if (!isset($is_login) || $is_login != True) {

			$this->load->view('login', $data);
		} else {
			redirect('dashboard');
		}
	}

	// View login page
	public function index()
	{
		$this->is_logged_in();
	}

	// Function login users
	public function loginUser()
	{
		$data = [
			"username" => $this->input->post('username'),
			"password" => md5($this->input->post('password'))
		];
		$query = $this->Users->login($data);
		if ($query != False) {
			foreach ($query as $key) {
				$loginSession = array(
					'id' => $key->id_user,
					'name'  => $key->name,
					'role' => $key->role,
					'logged_in' => True
				);
				$this->session->set_userdata($loginSession);
			}
			$this->session->set_flashdata('success', 'Login Success');
			redirect('dashboard');
		} else {
			$this->session->set_flashdata('failed', 'Login Failed');
			redirect('login');
		}
	}

	// function register new users
	public function register()
	{
		$data = [
			"id_user" => uniqid(),
			"username" => $this->input->post('username'),
			"name" => $this->input->post('fullname'),
			"email" => $this->input->post('email'),
			"gender" => $this->input->post('gender'),
			"password" => md5($this->input->post('password')),
			"role" => $this->input->post('level')
		];
		$query = $this->Users->register($data);
		if ($query == True) {
			$this->session->set_flashdata('success', 'Register New Users Success');
			redirect('dashboard/formuser');
		} else {
			$this->session->set_flashdata('failed', 'Register New Users Failed');
			redirect('dashboard/formuser');
		}
	}

	// Function logout
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('success', 'Logout');
		redirect('login');
	}
}