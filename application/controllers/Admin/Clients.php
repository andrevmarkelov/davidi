<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Client_model');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(): void
	{
		if (!$this->session->userdata('admin_logged_in')) {
			redirect('/admin/auth');
		}
	}

	public function create(): void
	{
		if (!$this->session->userdata('admin_logged_in')) {
			redirect('/admin');
		}

		$this->form_validation->set_rules('name', 'ФИО', 'required');
		$this->form_validation->set_rules('phone', 'Номер телефона', 'required|is_unique[clients.phone]', array(
			'is_unique' => 'Этот номер телефона уже зарегистрирован'
		));
		$this->form_validation->set_rules('points', 'Баллы', 'required|integer');

		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', validation_errors());
		} else {
			$phone = preg_replace('/[^0-9]/', '', $this->input->post('phone'));
			if (str_starts_with($phone, '8')) {
				$phone = '375' . substr($phone, 1);
			}
			$data = array(
				'name' => $this->input->post('name'),
				'phone' => $phone,
				'points' => $this->input->post('points')
			);

			if (!$this->Client_model->create_client($data)) {
				$this->session->set_flashdata('error', 'Ошибка при создании клиента');
			}
		}
		redirect('/admin');
	}

	public function delete($id): void
	{
		if (!$this->session->userdata('admin_logged_in')) {
			redirect('/admin');
		}

		if (!$this->Client_model->delete_client($id)) {
			$this->session->set_flashdata('error', 'Ошибка при удалении клиента');
		}
		redirect('/admin');
	}

	public function edit($id): void
	{
		if (!$this->session->userdata('admin_logged_in')) {
			redirect('/admin');
		}

		$data['client'] = $this->Client_model->get_client_by_id($id);
		echo json_encode($data['client']);
	}

	public function update($id): void
	{
		if (!$this->session->userdata('admin_logged_in')) {
			redirect('/admin');
		}

		$this->form_validation->set_rules('name', 'ФИО', 'required');
		$this->form_validation->set_rules('phone', 'Номер телефона', 'required');
		$this->form_validation->set_rules('points', 'Баллы', 'required|integer');

		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', validation_errors());
		} else {
			$phone = preg_replace('/[^0-9]/', '', $this->input->post('phone'));
			if (str_starts_with($phone, '8')) {
				$phone = '375' . substr($phone, 1);
			}
			$data = array(
				'name' => $this->input->post('name'),
				'phone' => $phone,
				'points' => $this->input->post('points')
			);

			if (!$this->Client_model->update_client($id, $data)) {
				$this->session->set_flashdata('error', 'Ошибка при обновлении клиента');
			}
		}
		redirect('/admin');
	}
}
