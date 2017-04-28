<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('v_tampilan_login');
	}
	public function getlogin()
	{
		$u=$this->input->post('username');
		$p=$this->input->post('password');
		$this->load->model('M_model_login');
		$this->M_model_login->getlogin($u,$p);
	}
}
