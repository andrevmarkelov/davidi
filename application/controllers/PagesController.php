<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PagesController extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'DaviDi Дом красивых волос | Выпрямление и восстановление волос в Молодечно',
			'page' => 'home',
		];

		$this->load->view('template', $data);
	}

	public function policy()
	{
		$data = [
			'title' => 'Политика конфиденциальности - DaviDi',
			'page' => 'policy',
		];

		$this->load->view('template', $data);
	}

	public function offer_agreement()
	{
		$data = [
			'title' => 'Договор оферты - DaviDi',
			'page' => 'offer-agreement',
		];

		$this->load->view('template', $data);
	}
}
