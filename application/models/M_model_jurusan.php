<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model_jurusan extends CI_Model {
	public function getdata($key)
	{
		$this->db->where('kd_prodi',$key);
		$hasil = $this->db->get('prodi');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('kd_prodi',$key);
		$this->db->update('prodi',$data);
	}
	public function getInsert($data)
	{
		$this->db->insert('prodi',$data);
	}
	public function getdelete($key)
	{
		$this->db->where('kd_prodi',$key);
		$this->db->delete('prodi');
	}
}
