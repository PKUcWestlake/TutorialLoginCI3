<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengguna extends CI_Model {

	function insertData($data) {
		$this->db->insert('tb_login', $data);
	}

	function getDataUser($username) {
		$this->db->where('username', $username);
		$query = $this->db->get('tb_login');
		return $query->row();
	}

	function getLoginUser($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('tb_login');
		return $query->row();
	}

}

/* End of file Mpengguna.php */
/* Location: ./application/models/Mpengguna.php */