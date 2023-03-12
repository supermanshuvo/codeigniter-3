<?php
class Crud extends CI_Model {
	public function insert($table, $data) {
		return $this->db->insert($table, $data);
	}
	public function update($table, $data, $id) {
		return $this->db->where('id', $id)->update($table, $data);
	}
	public function delete($table, $id){
		return $this->db->delete($table,['id' => $id]);
	}
	public function get_records($table)
	{
		return $this->db->get($table)->result();
	}

	public function find_record_by_id($table, $id)
	{
		return $this->db->get_where($table, ['id' => $id])->row();
	}
}
