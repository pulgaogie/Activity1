<?php
class account_model extends CI_Model{

	public function get_register(){

		$result = $this->db->get('register');

		return $result;
	}
}