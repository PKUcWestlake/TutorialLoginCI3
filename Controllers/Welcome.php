<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Mpengguna");
	}

	public function index()
	{
		$this->load->view('hal_login');
	}

	public function hal_tambah()
	{
		$this->load->view('hal_tambah');
	}

	public function hal_home()
	{
		$dtSession = $this->session->userdata('username');
		$userData = $this->Mpengguna->getDataUser($dtSession);

		if (empty($dtSession)) {
			redirect(base_url());
		} else {
			$this->load->view('hal_home', ['DATA' => $userData]);
		}
	}

	public function add_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');

		$arrInsert = array(
			'username' => $username,
			'password' => md5($password),
			'nama' => $nama,
		);

		$this->Mpengguna->insertData($arrInsert);
		$this->session->set_flashdata('msg', '2');
		redirect(base_url());
	}

	public function cekLoginUser()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$userData = $this->Mpengguna->getLoginUser($username, $password);
		if (!empty($userData)) {
			$sess = array (
				'username' => $userData->username,
			);
			$this->session->set_userdata($sess);
			redirect('welcome/hal_home');
		} else {
			$this->session->set_flashdata('msg', '1');
			redirect(base_url());
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
