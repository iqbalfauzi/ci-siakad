<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function index()

	{
		$this->m_model_security->getsecurity();
		$isi['content'] ='Jurusan/v_tampil_datajurusan';
		$isi['judul']=' MASTER';
		$isi['sub_judul']= 'Jurusan';
		$isi['data'] =$this->db->get('prodi');
		$this->load->view('v_tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->m_model_security->getsecurity();
		$isi['content']='Jurusan/v_form_tambahjurusan';
		$isi['judul']='Master';
		$isi['sub_judul']='Tambah Jurusan';
		$isi['kode'] 		= '';
		$isi['jurusan'] 	= '';
		$isi['singkatan'] 	= '';
		$isi['ketua'] 		= '';
		$isi['nik'] 		= '';
		$isi['akreditasi'] 	= '';
		$this->load->view('v_tampilan_home',$isi);
	}

	public function edit()
	{
		$this->m_model_security->getsecurity();
		$isi['content']='Jurusan/v_form_tambahjurusan';
		$isi['judul']='Master';
		$isi['sub_judul']='Edit Jurusan';

		$key=$this->uri->segment(3);
		$this->db->where('kd_prodi',$key);
		$query=$this->db->get('prodi');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$isi['kode'] 		= $row->kd_prodi;
				$isi['jurusan'] 	= $row->prodi;
				$isi['singkatan'] 	= $row->singkat;
				$isi['ketua'] 		= $row->ketua_prodi;
				$isi['nik'] 		= $row->nik;
				$isi['akreditasi'] 	= $row->akreditasi;
			}
		}else
		{
			$isi['kode'] 		= '';
			$isi['jurusan'] 	= '';
			$isi['singkatan'] 	= '';
			$isi['ketua'] 		= '';
			$isi['nik'] 		= '';
			$isi['akreditasi'] 	= '';
		}

		$this->load->view('v_tampilan_home',$isi);
	}

	public function simpan()
	{

		$this->m_model_security->getsecurity();

		$key= $this->input->post('kode');
		$data['kd_prodi'] = $this->input->post('kode');
		$data['prodi'] = $this->input->post('jurusan');
		$data['singkat'] = $this->input->post('singkatan');
		$data['ketua_prodi'] = $this->input->post('ketua');
		$data['nik'] = $this->input->post('nik');
		$data['akreditasi'] = $this->input->post('akreditasi');

		$this->load->model('m_model_jurusan');
		$query = $this->m_model_jurusan->getdata($key);
		if($query->num_rows()>0)
		{
			$this->m_model_jurusan->getupdate($key,$data);
			$this->session->set_flashdata('info','Data Sukses di Update');
		}
		else
		{
			$this->m_model_jurusan->getInsert($data);
			$this->session->set_flashdata('info','Data Sukses di Simpan');
		}
		redirect('jurusan');
	}
	public function delete()
	{
		$this->m_model_security->getsecurity();
		$this->load->model('m_model_jurusan');
		$key=$this->uri->segment(3);
		$this->db->where('kd_prodi',$key);
		$query=$this->db->get('prodi');
		if($query->num_rows()>0)
		{
			$this->m_model_jurusan->getdelete($key);
		}
		redirect('jurusan');
	}
}
