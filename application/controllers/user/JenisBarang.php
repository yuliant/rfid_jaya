<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisBarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_user();
        $this->load->library('form_validation');
        $this->load->model('user/JenisBarang_m', 'jenis_barang_m');
    }

    public function index()
    {
        $data['tittle'] = "Jenis Barang";
        $data['jenis_barang'] = $this->jenis_barang_m->get()->result();
        $data['modal'] = $this->load->view('user/jenis_barang/modal/modal_add_barang', $data, TRUE);
        $this->template->load('temp_dashboard', 'user/jenis_barang/index', $data);
    }

    public function input()
    {
        $this->form_validation->set_rules('id_barang', 'ID Barang', 'required|numeric|min_length[1]|max_length[25]');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required|max_length[25]');
        $this->form_validation->set_rules('distributor', 'Distributor', 'trim|required|max_length[25]');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Input gagal, terdapat kesalahan saat penginputan. Silahkan input kembali</div>');
            redirect('jenis_barang');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->jenis_barang_m->addData($post);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Input data jenis barang berhasil dilakukan</div>');
            redirect('jenis_barang');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('id_barang', 'ID Barang', 'required|numeric|min_length[1]|max_length[25]');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required|max_length[25]');
        $this->form_validation->set_rules('distributor', 'Distributor', 'trim|required|max_length[25]');
        //message
        $this->form_validation->set_message('required', '%s tidak boleh kosong, silahkan diisi');
        $this->form_validation->set_message('numeric', '%s harus diisi dengan nominasi angka');
        $this->form_validation->set_message('min_length', '%s anda terlalu pendek');
        $this->form_validation->set_message('max_length', '%s anda terlalu panjang');
        if ($this->form_validation->run() == false) {
            $data['tittle'] = "Edit Jenis Barang";
            $data['jenis_barang'] = $this->jenis_barang_m->get($id)->row();
            $this->template->load('temp_dashboard', 'user/jenis_barang/edit', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->jenis_barang_m->editData($post, $id);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit data jenis barang berhasil dilakukan</div>');
            redirect('jenis_barang');
        }
    }

    public function hapus($id)
    {
        $this->jenis_barang_m->deleteData($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus data jenis barang berhasil dilakukan</div>');
        redirect('jenis_barang');
    }
}

/* End of file JenisBarang.php */
