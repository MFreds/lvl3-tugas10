<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *  Post Controller
 */
class Post extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
	}

	public function index()
	{
		$data['data'] = $this->crud->get_records('produk');
		$this->load->view('post/list', $data);
	}


	public function create()
	{
		$this->load->view('post/create');
	}


	public function store() // Simpan
	{
		$data['nama_produk'] = $this->input->post('nama_produk');
		$data['keterangan'] = $this->input->post('keterangan');
        $data['harga'] = $this->input->post('harga');
        $data['jumlah'] = $this->input->post('jumlah');

		$this->crud->insert('produk', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');
		redirect(base_url());
	}

	public function edit($id)
	{
		$data['data'] = $this->crud->find_record_by_id('produk', $id);
		$this->load->view('post/edit', $data);
	}

	public function update($id)
	{
		$data['nama_produk'] = $this->input->post('nama_produk');
		$data['keterangan'] = $this->input->post('keterangan');
        $data['harga'] = $this->input->post('harga');
        $data['jumlah'] = $this->input->post('jumlah');

		$this->crud->update('produk', $data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been updated successfully.</div>');
		redirect(base_url());
	}

	public function delete($id)
	{
		$this->crud->delete('produk', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been deleted successfully.</div>');
		redirect(base_url());
	}
}