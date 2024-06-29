<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PagesController extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'DaviDi Дом красивых волос | Молодечно',
			'page' => 'home',
		];

		$this->load->view('template', $data);
	}
}
