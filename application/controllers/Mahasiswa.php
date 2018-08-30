<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Mahasiswa extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_crud');
		}

		public function index()
		{
			$data = array(
				'title' => 'Data Mahasiswa',
				'mhs' => $this->M_crud->data()
			);
			$this->load->view('header', $data);
			$this->load->view('list_mahasiswa');
			$this->load->view('footer');
		}

		public function MahasiswaBaru()
		{
			if (isset($_POST['submit']))
			{
				$nim = $this->input->post('nim');
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$telp = $this->input->post('tlp');
				$email = $this->input->post('email');

				$data = array(
					'no_induk' => $nim,
					'nama' => $nama,
					'alamat' => $alamat,
					'no_telp' => $telp,
					'email' => $email
				);

				$this->M_crud->simpan('mahasiswa', $data);

				$this->session->set_flashdata('simpan', 'Mahasiswa Baru Berhasil Disimpan');

				redirect('Mahasiswa');
			}else
			{
				$data = array(
					'title' => 'Tambah Mahasiswa',
					'auto' => $this->M_crud->autoNim()
				);
				$this->load->view('header', $data);
				$this->load->view('add_mahasiswa');
				$this->load->view('footer');
			}
		}

		public function EditMahasiswa()
		{
			if (isset($_POST['submit']))
			{
				$nim = $this->input->post('nim');
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$telp = $this->input->post('tlp');
				$email = $this->input->post('email');

				$data = array(
					'no_induk' => $nim,
					'nama' => $nama,
					'alamat' => $alamat,
					'no_telp' => $telp,
					'email' => $email
				);

				$this->M_crud->update('mahasiswa', $nim ,$data);

				$this->session->set_flashdata('edit', 'Data Mahasiswa Berhasil Dirubah');

				redirect('Mahasiswa');
			}else
			{
				$id = $this->uri->segment(3);

				$data = array(
					'title' => 'Data Mahasiswa',
					'mhs' => $this->db->get_where('mahasiswa', array('no_induk' => $id))->result()
				);
				$this->load->view('header', $data);
				$this->load->view('edit_mahasiswa');
				$this->load->view('footer');
			}
		}

		public function HapusMahasiswa()
		{
			$nim = $this->uri->segment(3);

			$where = array(
				'no_induk' => $nim
			);

			$this->M_crud->delete('mahasiswa', $where);

			$this->session->set_flashdata('hapus', 'Data Mahasiswa Berhasil Dihapus');

			redirect('Mahasiswa');
		}
	}
?>