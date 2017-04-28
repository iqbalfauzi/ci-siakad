<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index()

	{
		$this->load->model('m_model_matkul');
		$this->m_model_security->getsecurity();
		$isi['content'] ='Matakuliah/v_tampil_datamatakuliah';
		$isi['judul']=' MASTER';
		$isi['sub_judul']= 'Mata Kuliah';


		$isi['data'] = $this->db->get('mata_kuliah'); //ini adalah cara untuk menampilkan tanpa Model



		/*$isi['data'] = $this->m_model_matkul->tampildatamatkul();*/   //ini adalah cara untuk menampilkan DENGAN Model

		$this->load->view('v_tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->load->model('m_model_matkul');
		$this->m_model_security->getsecurity();
		$isi['content'] ='Matakuliah/v_form_tambahmatakuliah';
		$isi['judul']=' MASTER';
		$isi['sub_judul']= 'Mata Kuliah';


		

		$this->load->view('v_tampilan_home',$isi);
	}

	public function simpan()
	{
		$this->load->model('M_model_matkul');
		$this->m_model_security->getsecurity();

		$key['kd_mk'] = $this->input->post('kode');
		$data['kd_mk'] = $this->input->post('kode');
		$data[',kd_prodi'] 	= $this->input->post('jurusan');
		$data['nama_mk'] 	= $this->input->post('matkul');
		$data['sks'] 	= $this->input->post('sks');
		$data['smt'] 	= $this->input->post('smt');
		$data['aktif'] 	= $this->input->post('aktif');

		$query = $this->db->get_where('mata_kuliah',$key);
		if($query->num_rows()>0)
		{
			$this->db->update('mata_kuliah',$key,$data);
			echo "data sukses di update";
		}
		else
		{
			$this->db->input('mata_kuliah',$data);
			echo "data sukses di simpan";
		}

	}
}
