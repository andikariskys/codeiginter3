<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('toko_buku');
        }

	public function index()
	{
		$query = $this->toko_buku->get_data();
		$data = array('data'=>$query);
		$this->load->view('buku_view',$data);
	}

	//halaman tambah data buku
	public function tambah()
	{
		$this->load->view('tambah_view');
	}

	//simpan data
	public function simpan()
	{
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');

		$Arrinsert = array(
			'judul'=>$judul,
			'pengarang'=>$pengarang
		);
		$this->toko_buku->insert($Arrinsert);
		redirect('Buku');
	}
	//halaman edit
	public function edit($id)
	{
		$query = $this->toko_buku->getbyid($id);
		$data = array('buku'=>$query);
		$this->load->view('edit_view',$data);
	}

	//simpan edit data
	public function simpan_edit()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');

		$Arrupdate = array(
			'id'=>$id,
			'judul'=>$judul,
			'pengarang'=>$pengarang
		);
		$this->toko_buku->update($id,$Arrupdate);
		redirect('Buku');
	}


	//hapus
	public function hapus($id)
	{
		$this->toko_buku->delete($id);
		redirect('Buku');
	}

}
