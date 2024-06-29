<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
	}

	/**
	 * authorization page
	 *
	 * @return void
	 */
	public function login(): void
	{
		$data = [
			'title' => 'Вход - DaviDi',
			'page' => 'profile/login',
		];

		$this->load->view('template', $data);
	}

	/**
	 * authorization processing
	 *
	 * @return void
	 */
	public function do_login(): void
	{
		$phone = $this->input->post('phone');
		$client = $this->user_model->get_client_by_phone($phone);

		if ($client) {
			$this->session->set_userdata('client_id', $client->id);
			redirect('profile');
		} else {
			$this->session->set_flashdata('error', 'Номер телефона не найден в системе');
			redirect('login');
		}
	}

	/**
	 * private office
	 *
	 * @return void
	 */
	public function profile(): void
	{
		if (!$this->session->userdata('client_id')) {
			redirect('login');
		}

		$client_id = $this->session->userdata('client_id');
		$client_data = $this->user_model->get_client_data($client_id);

		$data = [
			'title' => 'Личный кабинет - DaviDi',
			'page' => 'profile/index',
			'client' => $client_data
		];

		$this->load->view('template', $data);
	}

	/**
	 * logout
	 *
	 * @return void
	 */
	public function logout(): void
	{
		$this->session->unset_userdata('client_id');
		redirect('/');
	}
}
