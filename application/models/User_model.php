<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	/**
	 * get a client by phone number
	 *
	 * @param $phone
	 * @return mixed
	 */
	public function get_client_by_phone($phone): mixed
	{
		$this->db->where('phone', $phone);
		$query = $this->db->get('clients');
		return $query->row();
	}

	/**
	 * get data by client id
	 *
	 * @param $client_id
	 * @return mixed
	 */
	public function get_client_data($client_id): mixed
	{
		$this->db->select('name, phone, points');
		$this->db->where('id', $client_id);
		$query = $this->db->get('clients');
		return $query->row();
	}
}
