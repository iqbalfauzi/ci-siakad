<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model_login extends CI_Model {
	public function getlogin($u,$p)
	{
		$pwd =md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query =$this->db->get('admins');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				# code...
				$sess=array('username' =>$row->username,
					'nama_lengkap' =>$row->nama_lengkap,
					'foto' =>$row->foto);
				$this->session->set_userdata($sess);
				redirect('home');
			}
		}
		else
		{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('login');
		}
	}
}
