<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RealtimeGudang_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('data_realtime_gudang');
        if ($id != null) {
            $this->db->where('id_realtime', $id);
        } else {
            $this->db->order_by('id_realtime', 'desc');
        }
        $query = $this->db->get();
        return $query;
    }

    public function getData()
    {
        $this->db->select('data_realtime_gudang.*, data_jenis_barang.*');
        $this->db->from('data_realtime_gudang');
        $this->db->join('data_jenis_barang', 'data_jenis_barang.id_barang = data_realtime_gudang.id_barang', 'left');

        $this->db->order_by('data_realtime_gudang.id_realtime', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function input($data)
    {
        $this->db->set('id_barang', $data['id_barang']);
        $this->db->set('keterangan', strtoupper($data['status']));
        $this->db->insert('data_realtime_gudang');
    }
}

/* End of file RealtimeGudang_m.php */
