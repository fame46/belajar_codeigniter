<?php
class Sekolah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_sekolah', 'model');
		$this->table = 'tb_sekolah';
	}

	public function add()
	{
		$this->load->view('sekolah_add');
	}

	public function save()
	{
		if (isset($_POST['kirim'])) {
			$email = $this->input->post('username');
			$pass = $this->input->post('password');
			$nama = $this->input->post('nama_sekolah');

			//untuk cek apakah email, password, dan nama sudah terisi
			if ($email and $pass and $nama) {
				//untuk cek apakah password lebih dari 6 karakter
				if (strlen($pass) > 6) {
					$data = [
						'username' => $email,
						'password' => $pass,
						'nama_sekolah' => $nama
					];

					$this->model->insert_data($this->table, $data);
				} else {
					echo '<script> alert("' . str_replace(array("\r", "\n"), '\n', "password harus lebih dari 6 karakter") . '"); </script>';
				}
			}

			redirect('sekolah/add');
		}
	}
}
