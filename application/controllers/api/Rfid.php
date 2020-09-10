<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rfid extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user/JenisBarang_m', 'jenis_barang_m');
        $this->load->model('user/RealtimeGudang_m', 'rt_gudang_m');
    }

    public function index()
    {
        $id_barang = htmlspecialchars($this->input->get('id_barang', TRUE));
        $status = htmlspecialchars($this->input->get('status', TRUE));
        if ($id_barang == null || $status == null) {
            $kode = [
                'kode' => 500,
                'status' => "Internal error",
                'keterangan' => "Response null, you must solved now",
            ];
        } else {
            $cekBarang = $this->jenis_barang_m->get($id_barang);
            if ($cekBarang->num_rows() > 0) {
                $kode = [
                    'kode' => 200,
                    'status' => "Dikenali",
                    'keterangan' => "Barang $status berhasil didata",
                ];
                $data = [
                    'id_barang' => $id_barang,
                    'status' => $status
                ];
                $this->rt_gudang_m->input($data);
                include_once APPPATH . 'vendor/autoload.php';
                $options = array(
                    'cluster' => 'ap1',
                    'useTLS' => true
                );
                $pusher = new Pusher\Pusher(
                    '451054362d659535edfc', //ganti dengan App_key pusher Anda
                    'bda802f53aee02e6fff7', //ganti dengan App_secret pusher Anda
                    '1069590', //ganti dengan id pusher Anda
                    $options
                );

                $data['message'] = 'success';
                $pusher->trigger('my-channel', 'my-event', $data);
            } else {
                $kode = [
                    'kode' => 404,
                    'status' => "Tidak dikenali",
                    'keterangan' => "Barang $status tidak berhasil didata",
                ];
            }
        }
        $jsondata = json_encode($kode);
        echo $jsondata;
    }
}

/* End of file Rfid.php */
