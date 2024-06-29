<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	/**
	 * list all admins
	 *
	 * @return mixed
	 */
	public function get_admins(): mixed
	{
		$query = $this->db->get('admin');
		return $query->result();
	}
}
