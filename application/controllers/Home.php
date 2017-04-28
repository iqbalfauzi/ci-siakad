<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()

	{
		$this->m_model_security->getsecurity();
		$isi['content'] ='v_tampilan_content';
		$isi['judul']=' HOME';
		$isi['sub_judul']= 'Home';
		$this->load->view('v_tampilan_home',$isi);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
