<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Admin_model');
		$this->load->model('Admin/Client_model');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
	}

	/**
	 * admin login page
	 *
	 * @return void
	 */
	public function auth(): void
	{
		$data = [
			'title' => 'Авторизация - DaviDi',
			'page' => 'admin/auth',
		];

		$this->load->view('template', $data);
	}

	/**
	 * admin login
	 *
	 * @return void
	 */
	public function login(): void
	{
		$password = $this->input->post('password');
		$admins = $this->Admin_model->get_admins();

		$is_valid = false;
		foreach ($admins as $admin) {
			if (password_verify($password, $admin->password)) {
				$is_valid = true;
				break;
			}
		}

		if ($is_valid) {
			$this->session->set_userdata('admin_logged_in', true);
			redirect('/admin');
		} else {
			$this->session->set_flashdata('error', 'Неверные учетные данные для входа в систему');
			redirect('/admin/auth');
		}
	}

	/**
	 * admin home page
	 *
	 * @return void
	 */
	public function index(): void
	{
		if (!$this->session->userdata('admin_logged_in')) {
			redirect('/admin/auth');
		}

		$data = [
			'title' => 'Клиенты - DaviDi',
			'page' => 'admin/clients',
			'clients' => $this->Client_model->get_clients()
		];

		$this->load->view('admin/template', $data);
	}

	/**
	 * admin logout
	 *
	 * @return void
	 */
	public function logout(): void
	{
		$this->session->unset_userdata('admin_logged_in');
		redirect('/');
	}
}
