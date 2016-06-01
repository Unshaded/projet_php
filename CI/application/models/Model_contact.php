<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_contact extends CI_Model {
	public function __construct(){
	$this->load->database();
	}
	public function get_contact($id=null){
		if (isset($id)){
			$this->db->select('*')
				->from('contacts')
				->where('id', $id)
				->limit(1);
			$query = $this->db->get();

			if($query->num_rows() == 1)
				return $query->row();
			else
				return false;
		}else{
			$this->db->select('*')
				->from('contacts');
			$query = $this->db->get();
			return $query->result();
		}
	}
	public function create_contact($data){
	return	$this->db->insert('contacts', $data);	

	}
	public function delete_contact($id){
		return $this->db
			->where('id',$id)
			->delete("contacts");

	}
}
