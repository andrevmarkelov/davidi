<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	/**
	 * create a client
	 *
	 * @param $data
	 * @return mixed
	 */
	public function create_client($data): mixed
	{
		return $this->db->insert('clients', $data);
	}

	/**
	 * get all clients
	 *
	 * @return mixed
	 */
	public function get_clients(): mixed
	{
		$query = $this->db->get('clients');
		return $query->result();
	}

	/**
	 * get the client by id
	 *
	 * @param $id
	 * @return mixed
	 */
	public function get_client_by_id($id): mixed
	{
		$query = $this->db->get_where('clients', array('id' => $id));
		return $query->row();
	}

	/**
	 * delete the client by id
	 *
	 * @param $id
	 * @return mixed
	 */
	public function delete_client($id): mixed
	{
		return $this->db->delete('clients', array('id' => $id));
	}

	/**
	 * update the client by id
	 *
	 * @param $id
	 * @param $data
	 * @return mixed
	 */
	public function update_client($id, $data): mixed
	{
		$this->db->where('id', $id);
		return $this->db->update('clients', $data);
	}
}
