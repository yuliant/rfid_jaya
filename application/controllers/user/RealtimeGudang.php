<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RealtimeGudang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_user();
        $this->load->model('user/RealtimeGudang_m', 'rt_gudang_m');
    }

    public function index()
    {
        $data['tittle'] = "Realtime Gudang";
        $data['realtime'] = $this->rt_gudang_m->getData()->result();
        $this->template->load('temp_dashboard', 'user/realtime_gudang/index', $data);
    }

    public function delete()
    {
        $this->db->empty_table('data_realtime_gudang');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus semua data realtime berhasil dilakukan</div>');
        redirect('gudang');
    }
}

/* End of file RealtimeBarang.php */
